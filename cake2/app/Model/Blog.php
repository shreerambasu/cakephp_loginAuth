<?php
class Blog extends AppModel {

    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'author' => array(
            'rule' => 'notBlank'
        )
    );
}