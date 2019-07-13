<?php

class Jimu
{

    /** @var PDO  */
    public $pdoBengoshi;

    public $pdoGeneral;

    public function __construct()
    {
        $DBSERVER = 'localhost';
        $DBUSER = 'root';
        $DBPASSWD = 'ultraman7';
        $DBNAME = 'bengoshi';

        $dsn = 'mysql:'
            . 'host=' . $DBSERVER . ';'
            . 'dbname=' . $DBNAME . ';'
            . 'charset=utf8';
        $this->pdoBengoshi = new PDO($dsn, $DBUSER, $DBPASSWD, array(PDO::ATTR_EMULATE_PREPARES => false));

        $dsn = 'mysql:'
            . 'host=' . $DBSERVER . ';'
            . 'dbname=' . 'general' . ';'
            . 'charset=utf8';
        $this->pdoGeneral = new PDO($dsn, $DBUSER, $DBPASSWD, array(PDO::ATTR_EMULATE_PREPARES => false));
    }

    public function getCallT() {
        $sql = 'SELECT * FROM `call_t`';
        $stmt = $this->pdoBengoshi->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function execute() {
        $callList = $this->getCallT();
    }
}

$jimu = new Jimu();
$jimu->execute();