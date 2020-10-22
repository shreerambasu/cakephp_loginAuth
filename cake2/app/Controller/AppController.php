<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'このページを表示するためログインする必要があります。',
            'loginError' => 'Invalid Username or Password entered, please try again.'

        ));

    // only allow the login controllers only
    public function beforeFilter() {
        $this->Auth->allow('login');
        //$this->set('auth',$this->Auth);
    }

    public function isAuthorized($user) {
        // Here is where we should verify the role and give access based on role

        return true;
    }


}
