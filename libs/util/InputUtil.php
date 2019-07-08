<?php

class InputUtil
{

    static public function extractString($key, $keyName, &$errors, $isExist = true)
    {
        if (!$isExist && (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '')) {
            return '';
        }
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {
            $errors[$key] = $keyName . 'が入力されていません。';
            return '';
        }
        if (!is_string($_REQUEST[$key])) {
            $errors[$key] = $keyName . 'が不正です。';
            return '';
        }
        return $_REQUEST[$key];
    }

    static public function extractNumber($key, $keyName, &$errors, $isExist = true)
    {
        if (!$isExist && (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '')) {
            return '';
        }
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {
            $errors[$key] = $keyName . 'が入力されていません。';
            return '';
        }
        if (!is_numeric($_REQUEST[$key])) {
            $errors[$key] = $keyName . 'が数値ではありません。';
            return '';
        }
        return $_REQUEST[$key];
    }

    static public function extractPhone($key, $keyName, &$errors, $isExist = true)
    {
        if (!$isExist && (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '')) {
            return '';
        }
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {
            $errors[$key] = $keyName . 'が入力されていません。';
            return '';
        }
        if (!is_string($_REQUEST[$key])) {
            $errors[$key] = $keyName . 'が不正です。';
            return '';
        }
        if (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $_REQUEST['phone'])) {
            $errors[$key] = $keyName . 'が不正です。';
            return '';
        }
        return $_REQUEST[$key];
    }

    static public function extractMail($key, $keyName, &$errors, $isExist = true)
    {
        if (!$isExist && (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '')) {
            return '';
        }
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '') {
            $errors[$key] = $keyName . 'が入力されていません。';
            return '';
        }
        if (!is_string($_REQUEST[$key])) {
            $errors[$key] = $keyName . 'が不正です。';
            return '';
        }
        if (!preg_match('/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/', $_REQUEST['mail'])) {
            $errors[$key] = $keyName . 'が不正です。';
            return '';
        }
        return $_REQUEST[$key];
    }

    static public function extractCheckBox($key, $keyName, &$errors, $isExist = true) {
        if (!$isExist && (!isset($_REQUEST[$key]) || $_REQUEST[$key] == '')) {
            return array();
        }
        if (!isset($_REQUEST[$key]) || $_REQUEST[$key] == array()) {
            $errors[$key] = $keyName . 'が入力されていません。';
            return array();
        }
        if(!is_array($_REQUEST[$key])) {
            $errors[$key] = $keyName . 'が不正です。';
            return array();
        }
        foreach ($_REQUEST[$key] as $value) {
            if($value !== '1') {
                $errors[$key] = $keyName . 'が不正です。';
                return array();
            }
        }
        return $_REQUEST[$key];
    }

    static public function extractMode()
    {
        $mode = $_REQUEST['mode'];
        if ($mode === 'confirm') {
            return 'confirm';
        } elseif ($mode === 'commit') {
            return 'commit';
        } else {
            return 'input';
        }
    }

    static public function extractAssent($key, $keyName, &$errors)
    {
        if ($_REQUEST[$key] !== '1') {
            $errors[$key] = $keyName . 'に同意してください。';
            return '';
        }
        return '1';
    }
}