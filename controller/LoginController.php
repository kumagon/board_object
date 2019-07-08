<?php

require_once __DIR__ . '/BaseController.php';
require_once  __DIR__ . '/../libs/dao/BoardDao.php';

class LoginController extends BaseController {

    // 読み込むテンプレートファイルを設定
    protected $template = 'login.tpl';

    // ログイン必須でなくす
    protected $isLogin = false;

    protected function main()
    {
        // ログインしてたらトップにリダイレクト
        if(!empty($this->user)) {
            header('Location: /board_object/index.php');
            exit;
        }

        // 掲示板情報を取得しsmarty変数に値を受け渡す
        $boardDao = new BoardDao();
        $this->smarty->assign('boardList', $boardDao->findAll());
    }
}
