<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=servidorjohn1.mysql.database.azure.com;dbname=bddjohn;charset=utf8', 'bddjohn@servidorjohn1', 'JohnHCR92');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
