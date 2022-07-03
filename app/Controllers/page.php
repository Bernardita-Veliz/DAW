<?php

use App\Controllers\BaseController;

defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends BaseController{


    public function index(){
        $data['title'] = 'main page';

        $this->load->view('cabecera', $data);
        $this->load->view('crear_usuario');
        $this->load->view('piedepagina');

    }
}