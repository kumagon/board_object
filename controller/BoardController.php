<?php

require_once __DIR__ . '/BaseController.php';
require_once  __DIR__ . '/../libs/util/InputUtil.php';
require_once  __DIR__ . '/../libs/dao/BoardDao.php';
require_once  __DIR__ . '/../libs/dao/CommentDao.php';

class BoardController extends BaseController {

    // 読み込むテンプレートファイルを設定
    protected $template = 'board.tpl';

    // ログイン必須でなくす
    protected $isLogin = false;

    protected function main()
    {
        $errors = [];
        $id = InputUtil::extractNumber('id', 'ID', $errors);
        if(!empty($errors)) {
            header('Location: /board_object/index.php');
            exit;
        }

        // 掲示板情報を取得しsmarty変数に値を受け渡す
        $boardDao = new BoardDao();
        $board = $boardDao->findById($id);
        if(empty($board)) {
            header('Location: /board_object/index.php');
            exit;
        }
        $this->smarty->assign('id', $id);
        $this->smarty->assign('board', $board);

        $commentDao = new CommentDao();
        $comment = InputUtil::extractString('comment', 'コメント', $errors);
        if(empty($errors)) {
            if(!empty($this->user)) {
                $commentDao->insert($id, $this->user->id, $comment);
            } else {
                $errors[] = 'ログインしてください';
            }
        } else {
            $errors = [];
        }

        $commentList = $commentDao->findAllByBoardId($id);
        $this->smarty->assign('commentList', $commentList);
        $this->smarty->assign('errors', $errors);
    }
}
