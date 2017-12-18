<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/3/2017
 * Time: 11:00 PM
 */
    namespace model;
    final class todos extends \core\database\model {
        public $id;
        public $owneremail;
        public $ownerid;
        public $createddate;
        public $updateddate;
        public $body;
        public $complete;
        protected static $modelName = 'todos';
        public function __construct()
        {
            $this->tableName = 'todos';
        }
    }
?>