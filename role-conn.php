<?php

include("conn.php");

class RoleConn extends Connection
{

    public function getRole()
    {
        $sql = "SELECT b.id, b.nama, g.pokok 
                FROM bagian b
                LEFT JOIN gaji g 
                ON b.id=g.`role`;";
        return $this->perform($sql);
    }

    public function updateRolebyID($id, $data)
    {
        $sql = "UPDATE bagian
                SET nama = \"{$data["nama"]}\"
                where id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function deleteRoleWithId($id)
    {
        $sql = "DELETE 
                    FROM bagian
                    WHERE id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function createRole($data)
    {
        $sql = "INSERT INTO bagian
                (nama)
                VALUES
                (\"{$data["nama"]}\")
                ";
        // echo $sql;
        // die();
        $this->perform($sql);
    }

    public function getOne($id)
    {

        $sql = "SELECT nama FROM bagian where  id=" . $id;
        $result = $this->perform($sql);

        $row = $result->fetch_assoc();

        return $row;
    }
}
?>