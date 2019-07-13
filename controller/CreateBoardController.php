<?php

require_once __DIR__ . '/BaseController.php';
require_once  __DIR__ . '/../libs/dao/BoardDao.php';

class CreateBoardController extends BaseController {

    // 読み込むテンプレートファイルを設定
    protected $template = 'create_board.tpl';

    protected function main()
    {

        $errors = [];
        $title = InputUtil::extractString('title', 'タイトル', $errors);
        if(empty($errors)) {
            $boardDao = new BoardDao();
            $id = $boardDao->insert($title);
            if($id) {
                // 作成したら掲示板ページにリダイレクトします
                header('Location: /board_object/board.php?id=' . $id);
                exit;
            } else {
                $errors[] = '作成に失敗しました';
            }
        } else {
            $errors = [];
        }

        $this->smarty->assign('errors', $errors);
    }
}
