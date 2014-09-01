<?php

class RegisterController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {

    }

    public function saveAction() {

        $user = new Users();


        $success = $user->save($this->request->getPost(), array('username', 'password'));

        if ($success) {
            echo "Thanks for registering!";

        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

    }

}

