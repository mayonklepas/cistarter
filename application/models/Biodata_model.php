<?php

/**
 *
 */
class Biodata_model extends CI_Model{


    function readall(){
      $query="SELECT id,nama,alamat FROM biodata";
      return $this->db->query($query);
    }

    function readbyid($id){
      $query="SELECT id,nama,alamat FROM biodata WHERE id=?";
      $data=array($id);
      return $this->db->query($query,$data);
    }

    function insert($nama,$alamat){
      $data=array($this->db->escape_str($nama),$this->db->escape_str($alamat));
      $query="INSERT INTO biodata(nama,alamat) VALUES(?,?)";
      return $this->db->query($query,$data);
    }

    function update($nama,$alamat,$id)
    {
      $data=array($this->db->escape_str($nama),$this->db->escape_str($alamat),$id);
      $query="UPDATE biodata SET nama=?,alamat=? WHERE id=?";
      return $this->db->query($query,$data);
    }

  function delete($id)
    {
      $query="DELETE FROM biodata WHERE id=?";
      $data=array($id);
      return $this->db->query($query,$data);
    }



}




?>
