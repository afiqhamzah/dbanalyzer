<?php

    namespace afiqhamzah\dbanalyzer\UtilClass;

    class table {
        var $tableName;
        var $columnNames = array();

        function set_tableName($tableName) {
            $this->tableName = $tableName;
        }

        function get_tableName() {
            return $this->tableName;
        }

        function add_columnNames($columnNames) {
            array_push($this->columnNames, $columnNames);
        }

        function get_columnNames() {
            return $this->columNames;
        }


    }

?>