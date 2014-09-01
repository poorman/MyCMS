<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {

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
                "bind" => array('username' => $username, 'password' => $password)
            ));

            if ($user != false) {

                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->username);
                echo "Logged in: " . $this->session->get('username');


                echo "redirecting";
                //redirect to a webpage
                $response = new \Phalcon\Http\Response();
                return $response->redirect("admin/index");

            } else {
                $this->flash->error('Wrong email/password');
            }

        }

    }

}

