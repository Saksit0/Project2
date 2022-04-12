<?php

namespace App\Controllers;

use App\Models\M_Project_info;
use CodeIgniter\CLI\Console;
use LengthException;

class Project_info extends BaseController
{
    public function show_project_info($id)
    {

        $m_info_project = new M_Project_info();

        $data['arr_project_info'] = $m_info_project->get_project_info($id);

        $this->output("v_project_info", $data);

        // echo "<pre>";
        // print_r($data['arr_project_info']);
        // echo "</pre>";
    }

    
}
