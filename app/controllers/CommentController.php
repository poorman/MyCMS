<?php

class CommentController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {
        if ($this->request->isPost()) {

            //Receiving the variables sent by POST
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $content = $this->request->getPost('comment');
            $post_id = $this->request->getPost('id');

            $comment = new Comments();
            $comment->setName($name);
            $comment->setEmail($email);
            $comment->setContent($content);
            $comment->save();


            //$comment_id = $comment->id();
            /*
            return (new \Phalcon\Http\Response)->setContent(json_encode(array(
                'name'      => $comment->getName(),
                'email'     => $comment->getEmail(),
                'content'   => $comment->getContent(),
              //  'id'        => $comment_id
            )));
            */
        }

    }

}

