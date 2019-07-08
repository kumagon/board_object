<?php

class CommentEntity {

    public $id;
    public $boardId;
    public $userId;
    public $comment;
    public $created;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->boardId = $data['boardId'];
        $this->userId = $data['userId'];
        $this->comment = $data['comment'];
        $this->created = $data['created'];
    }
}
