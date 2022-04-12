<?php
namespace App\Models;
use CodeIgniter\Model;

class M_typeRequest extends Model {
    protected $table = "cluster1.typeRequest";
    protected $primaryKey = "id_typeRequest";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_status() {
        $sql = "SELECT * FROM $this->table";
        return $this->db->query($sql)->getResult();
    }
}