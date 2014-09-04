<?php

class PostComments extends \Phalcon\Mvc\Model {
    private $id;
    private $post_id;
    private $comment_id;

    public function initialize() {
        $this->setSource("post_comments");
        $this->belongsTo('post_id','Posts','id');
        $this->belongsTo('comment_id','Comments','id');
    }

    public function setPostId($id) {
        $this->post_id = $id;
    }

    public function getPostId() {
        return $this->post_id;
    }

    public function setCommentId($id) {
        $this->comment_id = $id;
    }

    public function getCommentId() {
        return $this->comment_id;
    }

    public function id() {
        return $this->id;
    }

}