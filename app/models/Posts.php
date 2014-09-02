<?php

class Posts extends \Phalcon\Mvc\Model {

    private $id;
    private $post_title;
    private $post_content;

    public function initialize() {
        $this->hasMany('id', 'PostComment','post_id');
    }

    public function getTitle() {
        return $this->post_title;
    }

    public function getContent() {
        return $this->post_content;
    }

    public function setTitle($title) {
        if (strlen($title) < 4) {
            throw new \InvalidArgumentException('This title is too short');
        } else {
            $this->post_title = $title;
        }
    }

    public function setContent($content) {
        $this->post_content = $content;
    }

    public function id() {
        return $this->id;
    }

}