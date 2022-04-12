<?php
namespace App\Models;
use CodeIgniter\Model;

class M_status extends Model {
    protected $table = "cluster1.status";
    protected $primaryKey = "id_status";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_M_status() {
        $sql = "SELECT * FROM $this->table";
        return $this->db->query($sql)->getResult();
    }
}