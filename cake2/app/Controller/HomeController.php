<?php
class HomeController extends AppController {

    public $helpers = array('Html', 'Form');

    public $paginate = array(
        'limit' => 10,
        'conditions' => array('status' => '1'),
        'order' => array('Blog.id' => 'desc' )
    );

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = "customlayout";
        //Allow only index page
        $this->Auth->allow('index');
    }

    public function index() {
        // Load Blog Model in this controller
        $this->loadModel('Blog');
        // Set all data of model into blogs variable to send index.ctp file to display
        //$this->set('blogs', $this->Blog->find('all'));

        $this->paginate = array(
            'limit' => 2,
            'order' => array('Blog.id' => 'desc' )
        );
        $blogs = $this->paginate('Blog');
        $this->set(compact('blogs'));

    }




}