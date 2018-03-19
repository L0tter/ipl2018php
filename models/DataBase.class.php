<?php
/**
 * @author Daspremont Elodie
 */
class DataBase{
    private static $_instance;
    private $_db;
    private static $DB='mysql:host=localhost;dbname=bdbn;charset=utf8';
    private static $PASSW='';
    private static $LOG='root';
    
    public function __construct(){
        try{
            $this->_db = new PDO(self::$DB, self::$LOG, self::$PASSW);
            $this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die("DataBase constructor error : " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new DataBase();
        }
        return self::$_instance;
    }

    public function select(){}
    public function update(){}
    public function insert(){}
    public function delete(){}
}
?>