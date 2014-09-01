<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {

    }

    private function _registerSession($user)
    {
        $this->session->set('id', $user->id);
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

                //Forward to the 'invoices' controller if the user is valid
            } else {
                $this->flash->error('Wrong email/password');
                echo "Not logged in";
            }

        }

        /*/Forward to the login form again
        return $this->dispatcher->forward(array(
            'controller' => 'session',
            'action' => 'index'
        ));
        //*/
    }

}

