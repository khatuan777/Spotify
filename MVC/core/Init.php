<?php

require_once './MVC/core/DB.php';
class Init
{
    protected $db;

    function __construct()
    {

        $this->db = new DB();
        $this->db->DB_Connect();
    }

    function find($query = '*', $option = [])
    {
        $sql =  'SELECT ' . $query . ' FROM ' . get_called_class();
        $count = 0;
        foreach ($option as $key => $value) {
            if ($value != null) {
                $count = $count + 1;
                if ($count == 1) {
                    $sql = $sql . ' WHERE ';
                } else if ($count > 1) {
                    $sql = $sql . ' AND ';
                }
                $sql = $sql . $key . ' = ' . $value;
            }
        }
        if ($this->db->num_rows($sql) > 0) {
            $data = $this->db->fetch_assoc($sql, 0);
            return $data;
        } else {
            return '';
        }
    }

    function findOne($query = '*', $option = [])
    {
        $sql =  'SELECT ' . $query . ' FROM ' . get_called_class();
        $count = 0;
        foreach ($option as $key => $value) {
            if ($value != null) {
                $count = $count + 1;
                if ($count == 1) {
                    $sql = $sql . ' WHERE ';
                } else if ($count > 1) {
                    $sql = $sql . ' AND ';
                }
                $sql = $sql . $key . ' = ' . $value;
            }
        }
        if ($this->db->num_rows($sql) > 0) {
            $data = $this->db->fetch_assoc($sql, 1);
            return $data;
        } else {
            return '';
        }
    }


    function search($key)
    {
        $sql = "SELECT * FROM Song WHERE songName LIKE '%" . $key . "%'";
    }

    function delete($id)
    {
        $sql = "DELETE FROM '" . get_called_class() . "'WHERE '" . get_called_class() . "ID = '" . $id . "';'";
        return $this->db->query($sql);
    }
    function save($info = [])
    {
    }
}
