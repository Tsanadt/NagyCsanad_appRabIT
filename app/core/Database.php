<?php
class Database{
    private static $instance = null;
    private $pdo;
    #constructing the database
    private function __construct(){
        $dsn='mysql:host=localhost;dbname=apprabit';
        $dbusername='root';
        $dbpassword='1';

        try {
            $this->pdo = new PDO($dsn, $dbusername, $dbpassword);
            $this->initializeDatabase();
        }catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    #we check whether a Database have already been created, if not, we create one
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    #we get access through the pdo object
    public function getConnection() {
        return $this->pdo;
    }
    #running the sql file
    private function initializeDatabase() {
        $sqlFile = __DIR__.'/database.sql';
        $sql = file_get_contents($sqlFile);
        $this->pdo->exec($sql);
    }
}
