<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:12 PM
 */
    namespace core\database;
    abstract class collection
    {
        //factory to make model
        static public function create()
        {
            $model = new static::$modelName;
            return $model;
        }
        static public function findAll()
        {
            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName;
            return self::getResults($sql);
        }
        static public function findOne($id)
        {
            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
            return self::getResults($sql);
        }
        //you can use this to run other queries in on classes that extend the collection class because this is protected
        protected static function getResults($sql) {
            $db = dbConn::getConnection();
            $statement = $db->prepare($sql);
            $statement->execute();
            $class = static::$modelName;
            $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
            $recordsSet = $statement->fetchAll();
            return $recordsSet;
        }
    }
?>