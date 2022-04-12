<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function Project_List()
    {
        $this->output("v_project_list");
    }
    public function Add_Project()
    {
        $this->output("v_add_project");
    }
    public function v_attachment()
    {
        $this->output("v_attachment");
    }
    public function Project_info()
    {
        $this->output("v_project_info");
    }
    public function Edit_Project()
    {
        $this->output("v_edit_project");
    }
    public function v_Attachment_Project()
    {
        $this->output("v_attachment_project");
       
    }
}
