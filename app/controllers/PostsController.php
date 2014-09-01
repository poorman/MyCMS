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

            array_push($post_array,array(
                'title'     => $post->getTitle(),
                'content'   => $post->getContent()
            ));
            $posts->next();
        }

        return (new \Phalcon\Http\Response)->setContent(json_encode($post_array));

    }

}

