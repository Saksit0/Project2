<?php
namespace App\Models;
use CodeIgniter\Model;

class M_request_master extends Model {
    protected $table = "cluster1.request_master";
    protected $primaryKey = "id_rq";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_request_master() {
        $sql = "SELECT * FROM $this->table";
        return $this->db->query($sql)->getResult();
    }
}
