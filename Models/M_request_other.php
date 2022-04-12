<?php
namespace App\Models;
use CodeIgniter\Model;

class M_request_other extends Model {
    protected $table = "cluster1.request_other";
    protected $primaryKey = "id_rq_orther";

    public function insert_rq($idpj,$idrq) {
        $sql = "INSERT INTO `request_other`( `id_pj`, `id_rq`) VALUES ('$idpj','$idrq')";
        $this->db->query($sql);  
    }
}
