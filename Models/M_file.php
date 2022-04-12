<?php
namespace App\Models;
use CodeIgniter\Model;

class M_file extends Model {
    protected $table = "cluster1.file";
    protected $primaryKey = "id_file";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_file() {
        $sql = "SELECT * FROM $this->table";
        return $this->db->query($sql)->getResult();
    }

    public function insert_file($date,$file_name,$file_com,$id_pj) {
        $sql = "INSERT INTO `file`(`file_date`, `file_name`, `file_comment`, `id_project`)
                VALUES ('$date','$file_name','$file_com','$id_pj')";
        $this->db->query($sql);
    }
}
