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

    private function getGajiFromRole($id)
    {
        $sql = "SELECT * FROM gaji WHERE role=" . $id;
        return $this->perform($sql);
    }

    private function createOrUpdateGajiFromRole($id, $pokok)
    {
        $result = $this->getGajiFromRole($id);
        $gaji_row = mysqli_fetch_assoc($result);
        if ($gaji_row == null) {
            $sql = "INSERT INTO gaji (role, pokok)
                    VALUES
                    ({$id},{$pokok})
                    ";
        } else {
            $sql = "UPDATE gaji
                    SET pokok ={$pokok}
                    where role=" . $id;
        }
        $this->perform($sql);
    }

    public function updateRolebyID($id, $data)
    {
        $this->createOrUpdateGajiFromRole($id, $data["gaji"]);

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

        $sql = "SELECT b.nama, g.pokok
                FROM bagian b
                LEFT JOIN gaji g 
                ON b.id=g.`role` 
                where  b.id=" . $id;
        $result = $this->perform($sql);

        $row = $result->fetch_assoc();

        return $row;
    }
}
