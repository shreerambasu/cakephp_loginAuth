<?php

class BlogsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'customlayout';
    }

    public function add()
    {
        if (!empty($this->request->data)) {
            $data = array(
                'Blog' => array(
                    'title' => $this->request->data['Blog']['title'],
                    'author' => $this->request->data['Blog']['author'],
                    'contain' => $this->request->data['Blog']['contain'],
                    'img' => file_get_contents($this->request->data['Blog']['img']['tmp_name']),
                )
            );
            if ($this->Blog->save($data)) {
                $this->Session->setFlash('アップロードしました');
            } else {
                $this->Session->setFlash('アップロードできませんでした');
            }
        }

    }

    public function index() {
        $this->set('blogs', $this->Blog->find('all'));
    }

    public function view($id = null) {

        if (!$id){
            throw new NotFoundException('Invalid ID');
        }
        $blogs = $this->Blog->findById($id);
        if(!$blogs){
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->set('blog', $blogs);
    }

}