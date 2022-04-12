<?php

namespace App\Models;

use CodeIgniter\Model;

class M_project extends Model
{
    protected $database = "cluster1";
    protected $table = "project";
    protected $primaryKey = "id_project";

    // ดึงข้อมูโปรเจกต์ทั้งหมด
    public function get_all_project()
    {
        $sql = "SELECT * FROM $this->database.$this->table 
        LEFT JOIN status_master ON status_master.id_status = $this->table.status_id
        ORDER BY $this->table.id_project DESC";


        return $this->db->query($sql)->getResult();
        // echo "<pre>";
        // print_r($data['opt_depart']);
        // echo "</pre>";
    }

    public function get_project_last_id()
    {
        $sql = "SELECT * FROM $this->database.$this->table
                ORDER BY id_project DESC  LIMIT 1";
        return $this->db->query($sql)->getRow();
    }

    public function insert_data_project($id_project, $status_id, $p_name, $date, $id_owner, $details)
    {
        $sql = "INSERT INTO $this->database.$this->table VALUES ('$id_project', '$status_id','$p_name', '$date', '$id_owner','$details')";
        $this->db->query($sql);
    }
}