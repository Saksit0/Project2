<?php

namespace App\Controllers;

use App\Models\M_dbmc_master_mapping;
use App\Models\M_dbmc_employee;
use App\Models\M_project;
use App\Models\M_request_other;
use App\Models\M_status_master;
use LengthException;

class Add_project extends BaseController
{
  public function get_Add_Project()
  {
    $m_dbmc_master_mapping = new M_dbmc_master_mapping();
    $m_status_master = new M_status_master();

    $data['arr_project'] = $m_dbmc_master_mapping->get_company();
    $data['arr_status'] = $m_status_master->get_all_status_master();
    $this->output("v_add_project", $data);
  }
  public function get_Department()
  {
    $m_dbmc_master_mapping = new M_dbmc_master_mapping();
    $data = $m_dbmc_master_mapping->get_department($_POST["company"]);
    echo json_encode($data);
  }
  public function get_Section()
  {
    $m_dbmc_master_mapping = new M_dbmc_master_mapping();
    $data = $m_dbmc_master_mapping->get_Section($_POST["department"]);
    echo json_encode($data);
  }
  public function get_owner()
  {
    // $id =  'SDM-SC0002';
    // echo $id;
    $m_dbmc_employee = new M_dbmc_employee();
    $data = $m_dbmc_employee->get_owner($_POST["section"]);
    echo json_encode($data);
  }

  public function insert_project()
  {

    $m_project = new M_project();
    $m_request_other = new M_request_other();

    $data['last_id'] = $m_project->get_project_last_id();
    $temp = $data['last_id'];
    $year = date("Y");
    if($temp != null){
      $temp_id = intval(substr($temp->id_project,7));
      $check_year = substr($temp->id_project,2,4);
      if($year == $check_year){
        if($temp_id <= 9){
          $id_project  = "PJ". $year ."-00" . ($temp_id+1) ;
         }
         // if 
         else if($temp_id <= 99){
          $id_project  = "PJ". $year ."-0" . ($temp_id+1) ;
         }
         // else if 
         else{
          $id_project  = "PJ". $year ."-" . ($temp_id+1) ;
         }
         // else
      }
      // if 
      else{
        $id_project  = "PJ".$year."-001";
      }
      // else
    }
    // if 
    else{
      $id_project  = "PJ".$year."-001";
    }
    //else 

    $status_id = $this->request->getPost('status_id');
    $p_name = $this->request->getPost('p_name');
    $date = $this->request->getPost('date');
    $id_owner = $this->request->getPost('owner');
    $details = $this->request->getPost('details');
    
    $m_project->insert_data_project($id_project, $status_id, $p_name, $date, $id_owner, $details);
    for($i=1; $i<=4; $i++){
      if($this->request->getPost('rq'.$i) != ""){
        $m_request_other->insert_rq($id_project, $this->request->getPost('rq'.$i));
      }
      // if 
      
    } 
    // foreach
        
    return redirect()->to('Project/project_list'); 

  }
}
