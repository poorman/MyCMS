<?php

class Posts extends \Phalcon\Mvc\Model {

    private $id;
    protected $postTitle;
    protected $postContent;

    public function getTitle() {
        return $this->postTitle;
    }

    public function getContent() {
        return $this->postContent;
    }

    public function setTitle($title) {
        if (strlen($title) < 4) {
            throw new \InvalidArgumentException('This title is too short');
        } else {
            $this->postTitle = $title;
        }
    }

    public function setContent($content) {
        $this->postContent = $content;
    }

    public function id() {
        return $gthis->id;
    }

} 