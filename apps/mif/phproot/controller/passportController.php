<?php

class passportController extends AdminController
{

    public $defaultAction = 'login';

    public function actionLogin()
	{
        $this -> render('passport_login');
    }

    public function actionLogging()
    {
        $err = '';
        $rep = WinBase::app()->getRequest();
        do {
            
            if (!$rep->isAjaxRequest()) {
                $err = 'not json';
                break;
            }

            $username = $rep->getParam('username', '');
             if ($username == '') {
                $err = 'username is null';
            }
            $password = $rep->getParam('password', '');
            if ($password == '') {
               $err = 'password is null';
            }
        }while(0);

        if ($err != '') {
            echo json_encode(array('result'=>'error', 'msg'=>$err));
            die;
        }
        $user_info = user_info::model()->signIn($username, $password);
        if (!$user_info || count($user_info) == 0) {
            echo json_encode(array('result'=>'error', 'msg'=>'username or password error'));
            die;
        }
        $this->session->add('login_member', $user_info);
        $res = array('result'=>'ok', 'referer'  => $this->getReferer(), 'message' => '登入成功！');
        echo json_encode($res);
    }
    

    public function afterLogin($uid)
    {
    }    

    public function actionLogout()
    {
        $this->session->clear('login_member');
        $this->redirect('/');
    }

    public function actionCngpass()
    {
        
    }

}