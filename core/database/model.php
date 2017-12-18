<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/5/2017
 * Time: 8:29 PM
 */
    namespace core\database;
    use \functions as nameSpc;
    abstract class model
    {
        public function save()
        {
            $db = dbConn::getConnection();
            if (!empty($db)) {
                $array = get_object_vars($this);
                $array = nameSpc\arrayFunctions::arrayPop($array);
                $INSERT = FALSE;
                if ($this->id != '') {
                    $sql = $this->update($array);
                } else {
                    foreach ($array as $key => $value) {
                        if (is_null($value)) {
                            $array[$key] = 'null';
                        }
                    }
                    $array = nameSpc\arrayFunctions::arrayShift($array);
                    $columnArray = nameSpc\arrayFunctions::arrayKeys($array);
                    $columnString = implode(',', $columnArray);
                    $valueString = implode(',', $array);
                    $sql = $this->insert($columnString, $valueString);
                    $INSERT = TRUE;
                }
                print($sql);
                try {
                    $statement = $db->prepare($sql);
                    $statement->execute();
                    if ($INSERT == TRUE) {
                        $this->id = $db->lastInsertId();
                        return $this->id;
                    }
                } catch (\PDOException $e) {
                    echo 'SQL query error: ' . $e->getMessage();
                }
            }
        }
        private function insert($columnString, $valueString)
        {
            $sql = 'INSERT INTO ' . $this->tableName . ' (' . $columnString . ') VALUES (' . $valueString . ')';
            return $sql;
        }
        private function update($array)
        {
            $sql = 'UPDATE ' . $this->tableName . ' SET ';
            foreach ($array as $key => $column) {
                if ($key == 'id') {
                    $sql .= $key . '=' . $column;
                } else {
                    if (!is_null($column)){
                        $sql .= ',' . $key . '=' . $column;
                    }
                }
            }
            $sql .= ' WHERE id = ' . $this->id;
            return $sql;
        }

        public function delete()
        {
            $db = dbConn::getConnection();
            if (!empty($db)) {
                $sql = 'DELETE FROM ' . $this->tableName . ' WHERE id = ' . $this->id;
                try {
                    $statement = $db->prepare($sql);
                    $statement->execute();
                } catch (\PDOException $e){
                    echo('SQL query error: ' . $e->getMessage());
                }
            }
        }
}
?>