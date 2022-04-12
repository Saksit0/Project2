<?php
namespace App\Models;
use CodeIgniter\Model;

class M_status_master extends Model {
    protected $table = "cluster1.status_master";
    protected $primaryKey = "id_status";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_status_master() {
        $sql = "SELECT * FROM $this->table";
        return $this->db->query($sql)->getResult();
    }
}