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
            return (new \Phalcon\Http\Response)->setContent(json_encode(array(
                'message'   => "post doesn't exist"
            )));
        }

        return (new \Phalcon\Http\Response)->setContent(json_encode(array(
            'id'        => $id,
            'title'     => $post->getTitle(),
            'content'   => $post->getContent()
        )));
    }

}