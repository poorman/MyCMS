<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {
        $this->view->disable(); //no view here
        $post_array = array();

        $posts = Posts::find();

        $posts->rewind();
        while ($posts->valid()) {
            $post = $posts->current();

            array_unshift($post_array,array(
                'title'     => $post->getTitle(),
                'content'   => $post->getContent(),
                'id'        => $post->id()
            ));
            $posts->next();
        }

        return (new \Phalcon\Http\Response)->setContent(json_encode($post_array));

    }

    public function postAction($id) {

        $post = Posts::findFirst($id);

        if (! $post) {
            return (new \Phalcon\Http\Response)
                            ->setStatusCode(404,"Not Found")
                            ->setContent("Not Found");
        }

        $this->view->pick('posts/post');
        $this->view->title = $post->getTitle();
        $this->view->content = $post->getContent();
        $this->view->id = $id;

        //select all comments for the post
        $comments = PostComments::find(array(
            'conditions'    => 'post_id = ?1',
            'bind'          => array(1 => $id)
        ));

        $comment_array = array();
        foreach ($comments as $c) {
            $comment = Comments::findFirst($c->getCommentId());
            array_push($comment_array, array(
                'commenter'     => $comment->getName(),
                'content'       => $comment->getContent()
            ));
        }

        $this->view->comments = $comment_array;
    }

}