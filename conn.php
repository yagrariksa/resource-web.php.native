<?php

class Connection
{

    private $servername = "localhost:3306";
    private $username = "root";
    private $password = "rootr00t";
    private $db = "superprof_web";

    protected $conn;

    protected function connect()
    {
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->db
        );

        if ($this->conn->connect_error) {
            die("connection failed" . $this->conn->connect_error);
        }
    }

    protected function disconnect()
    {
        $this->conn->close();
    }

    protected function perform($sql)
    {
        $this->connect();
        $result = $this->conn->query($sql);
        $this->disconnect();
        return $result;
    }
}


class MenuConn extends Connection
{

    public function getMenu()
    {
        $sql = "SELECT

                * FROM menu";
        return $this->perform($sql);
    }

    public function updateMenubyID($id, $data)
    {
        $sql = "UPDATE menu
                SET nama = \"{$data["nama"]}\", harga = {$data["harga"]}
                where id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function deleteMenuWithId($id)
    {
        $sql = "DELETE 
                    FROM menu
                    WHERE id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function createMenu($data)
    {
        $sql = "INSERT INTO menu
                (nama, harga)
                VALUES
                (\"{$data["nama"]}\", {$data["harga"]})
                ";
        $this->perform($sql);
    }

    public function getOneMenu($id){

        $sql = "SELECT * FROM menu where  id=". $id;
        $result = $this->perform($sql);
        
        $row = $result->fetch_assoc();
        
        return $row;
    }
}


class PelangganConn extends Connection
{

    public function getPelanggan()
    {
        $sql = "SELECT

                * FROM pelanggan";
        return $this->perform($sql);
    }

    public function updatePelangganbyID($id, $data)
    {
        $sql = "UPDATE pelanggan
                SET nama = \"{$data["nama"]}\"
                where id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function deletePelangganWithId($id)
    {
        $sql = "DELETE 
                    FROM pelanggan
                    WHERE id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function createPelanggan($data)
    {
        $sql = "INSERT INTO pelanggan
                (nama)
                VALUES
                (\"{$data["nama"]}\")
                ";
        $this->perform($sql);
    }

    public function getOnePelanggan($id){

        $sql = "SELECT nama FROM pelanggan where  id=". $id;
        $result = $this->perform($sql);
        
        $row = $result->fetch_assoc();
        
        return $row;
    }
}

?>