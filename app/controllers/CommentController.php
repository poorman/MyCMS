<?php

class CommentController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {
        if ($this->request->isPost()) {

            $comment = new Comments();
            $comment->setName($this->request->getPost('name'));
            $comment->setEmail($this->request->getPost('email'));
            $comment->setContent($this->request->getPost('comment'));

            //store comment on the comments table
            if ($comment->save() == false) {
                echo "These errors occurred: ";
                foreach($comment->getMessages() as $msg) {
                    echo $msg;
                }
            } else {
                //store on the post_comments table
                $post_id = $this->request->getPost('id');
                $post_comment = new PostComments();
                $post_comment->setCommentId($comment->id());
                $post_comment->setPostId($post_id);

                if ($post_comment->save() == false) {
                    echo "These errors occurred: ";
                    foreach($post_comment->getMessages() as $msg) {
                        echo $msg;
                    }
                } else {
                    return (new \Phalcon\Http\Response)->redirect('posts/post/'.$post_id);
                }
            }
        }

    }

}

