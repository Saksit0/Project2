<?php
namespace App\Models;
use CodeIgniter\Model;

class M_dbmc_employee extends Model {
    protected $database = "cluster1_dbmc"; 
    protected $table = "employee";
    protected $primaryKey = "Emp_ID";

    // ดึงข้อมูลมกุลทั้งหมด
    public function get_all_dbmc_employee() {
        $sql = "SELECT * FROM $this->database.$this->table";
        return $this->db->query($sql)->getResult();
    }
    public function get_owner($id) {       
        $sql = "SELECT * FROM $this->database.employee 
        LEFT JOIN $this->database.master_mapping 
            ON employee.Sectioncode_ID = master_mapping.Section_id 
        WHERE Sectioncode_ID  = '".$id."'
        GROUP BY  Sectioncode_ID";
        return $this->db->query($sql)->getResult();
    }

}
