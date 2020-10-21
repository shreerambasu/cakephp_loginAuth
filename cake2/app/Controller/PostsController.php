<?php
class PostsController extends AppController {

    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = "customlayout";
    }

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Added successfully'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function view($id = null) {

        if (!$id){
            throw new NotFoundException('Invalid ID');
        }
        $posts = $this->Post->findById($id);
        if(!$posts){
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->set('post', $posts);
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Post'));
        }

        $post = $this->Post->findById($id);
        if (!$post){
            throw new NotFoundException(__('INvalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Successfullly edited post saved.'));
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Flash->success(__('The Post with id: %s has been deleted.', h($id)));
        }else {
            $this->Flash->error(__('The Post with id: %s could not be deleted. '. h($id)));
        }
        return $this->redirect(array('action'=> 'index'));
    }

    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

}