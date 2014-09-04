<?php

class AdminController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {
        if (! $this->session->get('user_id')) {
            //login admin
            return (new \Phalcon\Http\Response)->redirect('admin/login');
        }
    }

    private function _registerSession($user)
    {
        $this->session->set('user_id', $user->id);
        $this->session->set('username', $user->username);
    }

    public function loginAction() {
        if ($this->request->isPost()) {

            //Receiving the variables sent by POST
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            //Find the user in the database
            $user = Users::findFirst(array(
                "username = :username: AND password = :password: ",
                "bind" => array('username' => $username, 'password' => md5($password))
            ));

            if ($user != false) {
                $this->_registerSession($user);
                $response = new \Phalcon\Http\Response();
                return $response->redirect("admin");
            } else {
                $this->flash->error('Wrong email/password');
            }

        }

    }

    public function logoutAction() {
        $this->session->destroy();
        return (new \Phalcon\Http\Response())->redirect('admin');
    }

    public function newpostAction() {
        if ($this->request->isPost()) {

            //Receiving the variables sent by POST
            $title = $this->request->getPost('title');
            $content = $this->request->getPost('content');

            if (!$title && !$content) {

                return (new \Phalcon\Http\Response)->redirect('admin');
            }

            //admin is logged in
            if ($this->session->get('user_id')) {
                $post = new Posts();
                $post->setTitle($title);
                $post->setContent($content);
                $post->save();

                return (new \Phalcon\Http\Response)->redirect('admin');
            } else {
                $this->flash->error('Not logged in');
            }

        }
    }
}