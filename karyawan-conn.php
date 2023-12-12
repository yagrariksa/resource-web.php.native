<?php

class KaryawanConn extends Connection
{
    public function getKaryawanWithRole()
    {
        $sql = "SELECT 
                k.id as 'id' , 
                k.nama , k.umur , b.nama 
                as 'role'  
                FROM karyawan k 
                JOIN bagian b ON k.`role` = b.id 
                ORDER BY k.id";

        return $this->perform($sql);
    }

    public function deleteKaryawanWithId($id)
    {
        $sql = "DELETE 
                    FROM karyawan 
                    WHERE id=" . $id;
        $this->perform($sql);
        return true;
    }

    public function createKarwayan($data)
    {
        $sql = "INSERT INTO karyawan
                (nama, umur, role)
                VALUES
                (\"{$data["nama"]}\", {$data["umur"]}, {$data["role"]})
                ";
        $this->perform($sql);
    }
}
?>