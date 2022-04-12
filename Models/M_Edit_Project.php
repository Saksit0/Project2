

    <?php

    namespace App\Controllers;
    
    use App\Models\M_dbmc_master_mapping;
    use App\Models\M_dbmc_employee;
    use LengthException;
    
    class Edit_project extends BaseController
    {
        public function get_Edit_Project()
        {
            $m_dbmc_master_mapping = new M_dbmc_master_mapping();
            $data['arr_project'] = $m_dbmc_master_mapping->get_company();       
            $this->output("v_Edit_Project", $data);
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
    
    
    }