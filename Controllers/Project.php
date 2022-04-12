<?php

namespace App\Controllers;

use App\Models\M_project;
use LengthException;

class Project extends BaseController
{
    public function project_list()
    {
        $m_project = new M_project();
        $data['arr_project'] = $m_project->get_all_project();

       // $this->output("v_project_List", $data);
        $this->output("v_project_list", $data);

    }
}