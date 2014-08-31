<?php

class Comments extends \Phalcon\Mvc\Model {
    private $id;
    private $commenter_name;
    private $commenter_email;
    private $commenter_content;

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
        return $this->commenter_content;
    }

    public function setContent($content) {
        $this->commenter_content = $content;
    }
}