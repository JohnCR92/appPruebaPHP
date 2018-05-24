<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=bddjohn.mysql.database.azure.com;dbname=bddjohn;charset=utf8', 'johncr@bddjohn', 'JohnHCR92');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
