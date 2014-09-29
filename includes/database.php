<?php
/**
 * Created by PhpStorm.
 * User: sakib
 * Date: 29/09/14
 * Time: 11:20
 */
require_once("config.php");

class MYSQLDatabase{

    private $connection;
    function __construct(){
        $this->open_connection();
    }
    function open_connection(){
        // 1. Create a database connection
        $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
        if (!$this->connection) {
            die("Database connection failed: " . mysql_error());
        } else{
            // 2. Select a database to use
            $db_select = mysql_select_db(DB_NAME, $this->connection);
            if (!$db_select) {
                die("Database selection failed: " . mysql_error());
            }
        }
    }
    public function close_connection(){
        // 5. Close connection
        if(isset($this->connection)) {
            mysql_close($this->connection);
            unset($this->connection);
        }
    }
}

$database = new MYSQLDatabase();
$db= &$database;
?>