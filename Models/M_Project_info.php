<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Project_info extends Model
{
    protected $database = "cluster1";
    protected $table = "project";
    protected $primaryKey = "id_project";

    // ดึงข้อมูโปรเจกต์ทั้งหมด
    public function get_project_info($id_project)
    {
        $sql = "SELECT * FROM $this->database.$this->table
        INNER JOIN dbmc.employee ON employee.Emp_ID = $this->table.id_owner
        INNER JOIN dbmc.master_mapping ON dbmc.employee.Sectioncode_ID = dbmc.master_mapping.Section_id
        INNER JOIN cluster1.status_master ON $this->table.status_id = cluster1.status_master.id_status
        INNER JOIN cluster1.typeRequest ON $this->table.id_project = cluster1.typeRequest.id_project
        INNER JOIN cluster1.request_master ON cluster1.request_master.id_rq = cluster1.typeRequest.id_rq
        WHERE $this->table.id_project = '$id_project'";
        return $this->db->query($sql)->getResult();
    }
}
