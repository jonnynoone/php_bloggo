<?php

class Database
{
    public $host = DB_HOST;
    public $username = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        // Call connect function
        $this->connect();
    }

    // CONNECT
    private function connect()
    {
        $this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        if(!$this->link) {
            $this->error = "Connection failed: " . $this->link->connect_error;
            return false;
        }
    }

    // SELECT
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->error.__LINE__);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    // INSERT
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or die($this->error.__LINE__);

        // Validate 
        if($insert_row) {
            header('Location: index.php?msg=' . urlencode('Record Added'));
            exit();
        } else {
            die('Error: (' . $this->link->errno . ') ' . $this->link_error);
        }
    }

    // UPDATE
    public function update($query)
    {
        $update_row = $this->link->query($query) or die($this->error.__LINE__);

        // Validate 
        if($update_row) {
            header('Location: index.php?msg=' . urlencode('Record Updated'));
            exit();
        } else {
            die('Error: (' . $this->link->errno . ') ' . $this->link_error);
        }
    }

    // DELETE
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or die($this->error.__LINE__);

        // Validate 
        if($delete_row) {
            header('Location: index.php?msg=' . urlencode('Record Deleted'));
            exit();
        } else {
            die('Error: (' . $this->link->errno . ') ' . $this->link_error);
        }
    }
}