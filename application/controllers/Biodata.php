<?php

/**
 *
 */
class Biodata extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Biodata_model");
  }


  function readall(){
    $data=$this->Biodata_model->readall()->result();
    echo json_encode($data);
  }

  function readbyid($id){
    $data=$this->Biodata_model->readbyid($id)->result();
    echo json_encode($data);
  }

  function insert(){
    $post_data = file_get_contents("php://input");
    $jdata = json_decode($post_data);
    $nama=$jdata->nama;
    $alamat=$jdata->alamat;
    $this->Biodata_model->insert($nama,$alamat);
    $data=$this->Biodata_model->readall()->result();
    echo json_encode($data);
  }

  function update($id){
    $post_data = file_get_contents("php://input");
    $jdata = json_decode($post_data);
    $nama=$jdata->nama;
    $alamat=$jdata->alamat;
    $this->Biodata_model->update($nama,$alamat,$id);
    $data=$this->Biodata_model->readall()->result();
    echo json_encode($data);
  }


  function delete($id){
    $this->Biodata_model->delete($id);
    $data=$this->Biodata_model->readall()->result();
    echo json_encode($data);
  }




}



 ?>
