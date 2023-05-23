<?php
class DB
{
    public $db;
    public $connection;
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "musicweb3";

    function DB_Connect()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);
        mysqli_query($this->connection, "SET NAMES 'utf8'");

        if (mysqli_connect_errno()) {
            echo 'Connection false' . mysqli_connect_errno();
        }
    }

    function query($sql)
    {

        return  mysqli_query($this->connection, $sql);
    }
    public function num_rows($sql)
    {
        if ($this->connection) {
            $query = mysqli_query($this->connection, $sql);
            if ($query) {
                $row = mysqli_num_rows($query);
                return $row;
            }
        } else {
            echo 'Connection lost';
        }
    }
    public function fetch_assoc($sql = null, $type)
    {
        if ($this->connection) {
            $query = mysqli_query($this->connection, $sql);
            if ($query) {
                if ($type == 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $data[] = $row;
                    }
                    return $data;
                } else if ($type == 1) {
                    $data = mysqli_fetch_assoc($query);
                    return $data;
                }
            } else {
                'Cannot done the query!!!';
            }
        } else {
            'Connection lost!!!';
        }
    }

    function DB_close()
    {
        mysqli_close($this->connection);
    }
}
