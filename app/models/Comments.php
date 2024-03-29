<?php

class Comments extends \Phalcon\Mvc\Model {
    private $id;
    private $commenter_name;
    private $commenter_email;
    private $comment_content;

    public function initialize() {
        $this->hasOne('id','PostComments','comment_id');
    }

    public function id() {
        return $this->id;
    }

    public function getName() {
        return $this->commenter_name;
    }

    public function setName($name) {
        $this->commenter_name = $name;
    }

    public function getEmail() {
        return $this->commenter_email;
    }

    public function setEmail($email) {
        $this->commenter_email = $email;
    }

    public function getContent() {
        return $this->comment_content;
    }

    public function setContent($content) {
        $this->comment_content = $content;
    }
}