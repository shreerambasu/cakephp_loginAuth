<?php
class HomeController extends AppController {

    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = "customlayout";
        //Allow only index page
        $this->Auth->allow('index');
    }

    public function index() {
        //$this->set('posts', $this->Post->find('all'));

    }




}