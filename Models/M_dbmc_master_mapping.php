<?php
namespace App\Models;
use CodeIgniter\Model;

class M_dbmc_master_mapping extends Model {
    protected $database = "cluster1_dbmc";
    protected $table = "master_mapping";
    protected $primaryKey = "No";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_master_mapping() {
        $sql = "SELECT * FROM $this->database.$this->table";
        return $this->db->query($sql)->getResult();
    }

    public function get_company() {
        $sql = "SELECT * FROM $this->database.$this->table GROUP BY Company";
        return $this->db->query($sql)->getResult();
    }
    public function get_department($id) {
        $sql = "SELECT * FROM $this->database.$this->table  WHERE Department_id != '' AND Company_id = '".$id."' GROUP BY Department_id";
        return $this->db->query($sql)->getResult();
    }
    public function get_section($id) {
        $sql = "SELECT * FROM $this->database.$this->table  WHERE	Section_id!= '' AND Department_id= '".$id."' GROUP BY Section_id";
        return $this->db->query($sql)->getResult();
    }
   
}
