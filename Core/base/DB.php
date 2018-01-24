<?php
namespace Core\Base;

class Db
{
    private $pdo;
    public static $instance;

    
    
    private function __construct() {
            $opt = array(
                    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                    );
        $db = require_once(ROOT. '/config/config_db.php');
        $this->pdo = new \PDO($db['dsn'],$db['user'],$db['password'],$opt);
    }

    public static function getInstance()
    {
        if (empty(self::$pdo))
        {
               self::$instance = new self;
        }
        return self::$instance;
    }

    public function execute($sql, $param = [])
    {	
    	$res = false;
        try{
        	$stmt = $this->pdo->prepare($sql);
			$res = $stmt->execute($param);
		}
		catch(PDOException $e){
			$res = false;
		}
		finally{
        	return $res;			
		}

    }

    public function query($sql, $param = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($param);
        if($res !== false)
        {
            return $stmt->fetchAll();
        }
        else
        {
            return [];
        }
    }

    public function Transaction($param) {
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->beginTransaction();
        try {
            foreach ($param as $sql) {
                $this->execute($sql[0], $sql[1]);
            }
            $this->pdo->commit();
            return true;
        } catch (Exception $e) {
            $this->pdo->rollBack();
            return false;
        }
    }

}
