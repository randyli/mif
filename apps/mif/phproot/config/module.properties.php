<?php
return array(
    
    'index'=>array(
        'action' => '/',
        'title' => '首页',
        'menus' => array(
            array('action' => '/msg/my','title' => '我的消息'),
            array('action' => '/msg/my','title' => '我的消息')
        )
    ),
    
    'user_manager'=>array(
        'action' => '/member/',
        'title' => '用户管理',
        'menus' => array(
            array('action' => '/member/add','title' => '添加用户'),
            array('action' => '/member/list','title' => '管理用户')
        )
    )
);