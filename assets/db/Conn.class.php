<?php
error_reporting(E_ALL ^ E_NOTICE);

class Conn {

    private static $Host = 'localhost';
    private static $Dbsa = 'pristore';
    private static $User = 'postgres';
    private static $Pass = '';
    private static $Port = '5432';

    /** @var PDO */
    private static $Connect = null;

    private static function Conectar() {
        try {
            if (self::$Connect == null):
                $dsn = 'pgsql:host=' . self::$Host . ';port=' . self::$Port . ';dbname=' . self::$Dbsa . ';user=' . self::$User . ';password=' . self::$Pass;
                self::$Connect = new PDO($dsn);
            endif;
        } catch (PDOException $e) {
            echo $e->getCode().', '. mb_convert_encoding($e->getMessage(), 'UTF-8', 'auto') .','. $e->getFile().','. $e->getLine();
            die;
        }
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    public static function getConn() {
        return self::Conectar();
    }

    public function alterabanco($banco){
        self::$Dbsa = $banco;
        self::getConn();
    }

    public function Disconnect(){
        self::$Connect = null;
    }
}
?>
