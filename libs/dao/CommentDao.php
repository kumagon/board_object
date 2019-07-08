<?php

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/../entity/CommentEntity.php';

class CommentDao extends Database
{

    /**
     * コメントを作成する
     * @param $boardId
     * @param $userId
     * @param $comment
     * @return bool|string
     */
    public function insert($boardId, $userId, $comment)
    {
        $sql = 'INSERT INTO `comments` (boardId, userId, comment, created)';
        $sql .= ' VALUES (:boardId, :userId, :comment, NOW())';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':boardId', $boardId, \PDO::PARAM_INT);
        $stmt->bindValue(':userId', $userId, \PDO::PARAM_INT);
        $stmt->bindValue(':comment', $comment, \PDO::PARAM_STR);
        $result = $stmt->execute();
        if ($result) {
            return $this->pdo->lastInsertId();
        } else {
            return false;
        }
    }

    /**
     * 掲示板のコメントを取得する
     * @param $boardId
     * @return array
     */
    public function findAllByBoardId($boardId) {
        $sql = 'SELECT * FROM `comments` WHERE boardId = :boardId ORDER BY created';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':boardId', $boardId, \PDO::PARAM_INT);
        $stmt->execute();
        $commentEntity = [];
        foreach ($stmt->fetchAll() as $data) {
            $commentEntity[] = new CommentEntity($data);
        }
        return $commentEntity;
    }
}
