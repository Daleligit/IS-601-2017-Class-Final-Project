<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:00 PM
 */
    namespace model;
    final class todos extends model {
        public $id;
        public $owneremail;
        public $ownerid;
        public $createddate;
        public $duedate;
        public $message;
        public $isdone;
        protected static $modelName = 'todos';
        public function __construct()
        {
            $this->tableName = 'todos';
        }
    }
?>