<?php

class PostComments extends \Phalcon\Mvc\Model {

    public function initialize() {
        $this->belongsTo('post_id','Posts','id');
        $this->belongsTo('comment_id','Comments','id');
    }
}