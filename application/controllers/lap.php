<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('model_app');

      /*  if(!$this->session->userdata('id_user'))
       {
        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
       </div>");
        redirect('login');
        }
        */
        
    }


 function lap_list()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/lap_penjualan";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id = trim($this->session->userdata('id_user'));

            $dataorder = $this->model_app->dataorder();
	    $data['dataorder'] = $dataorder;
        

        $datalap = $this->model_app->lap();
	    $data['datalap'] = $datalap;
        
        $this->load->view('template', $data);

 }

 function lap_print()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/lap_penjualan1";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id = trim($this->session->userdata('id_user'));

            $dataorder = $this->model_app->dataorder();
	    $data['dataorder'] = $dataorder;
        

        $datalap = $this->model_app->lap();
	    $data['datalap'] = $datalap;
        
        $this->load->view('template', $data);

 }
    
}
