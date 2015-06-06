<?php
namespace System;
class DB {
    function __construct (){
        $this->db = new \PDO("mysql:host=localhost;dbname=real;charset=utf8", "root", "");
    }
    function select($table, $where = "", $what = "", $order = "", $desc = "", $limit = "")
    {
        if (!empty($what)) {
            $what_sql = "$what";
        } else {
            $what_sql = "*";
        }

        if (!empty($where)) {
            $where_sql = "WHERE ";
            foreach ($where as $key => $value) {
                $where_sql .= " $and $key='$value'";
                if (empty($and)) {
                    $and = " AND ";
                }
            }
        }
        if (!empty($order)) {
            $order_by = " ORDER BY " . $order;
        }
        if ($desc == "true") {
            $order_by .= " DESC";
        }
        if (!empty($limit)) {
            $limito = " LIMIT " . $limit;
        }
        $sql = "SELECT $what_sql FROM $table $where_sql $order_by $limito";
        $array = $this->query($sql);
        return $array;
    }
    function insert($table, $parametrs, $return_id = 'false')
    {
        foreach ($parametrs as $key => $value) {
            $keys .= $key . ',';
            $values .= "'" . $value . "'" . ',';
        }
        $key_sql = substr($keys, 0, strlen($keys) - 1);
        $value_sql = substr($values, 0, strlen($values) - 1);
        $query = "INSERT INTO $table ($key_sql) VALUES ($value_sql)";
        $this->query($query);
    }
    function delete($table,$where)
    {
        if (!empty($where))
        {
            foreach ($where as $key=>$value)
            {
                $where_sql.="$and $key='$value'";
                if(empty($and))
                    $and=" and ";
            }
            $where_sql = "where ".$where_sql;
        }
        $sql = "DELETE FROM $table $where_sql";
        $this->query($sql);
    }
    function update($table, $parameters, $where){
        foreach($parameters as $key => $val)
        {
            $what_sql.= "$c `$key` = '$val'";
            if(empty($c))
                $c=" , ";
        }
        if (!empty($where))
        {
            foreach ($where as $key=>$value)
            {
                $where_sql.="$and $key='$value'";
                if(empty($and))
                    $and=" and ";
            }
            $where_sql = " where ".$where_sql;
        }
        $sql = "UPDATE $table SET $what_sql $where_sql";
        $this->query($sql);
    }
    function query($sql)
    {
        $query = $this->db->prepare($sql);
        $result = $query->execute();
        $array = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $array;
    }
} 