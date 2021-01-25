<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($tablename,$where = array()){
        $result = $this->db->where($where)->get($tablename)->row();
        return $result;
    }

    function insert($tableName,$data){
        return $this->db->insert($tableName,$data);
    }

    public function update ($tablo,$veri,$alan,$id)
    {
        $this->db->where($alan, $id);
        $this->db->update($tablo,$veri);
    }


    public function delete ($tablo,$alan,$id)
    {
        $this->db->where($alan, $id);
        $this->db->delete($tablo);
    }


    public function getTable($table,$where = array(),$row = false){
        $this->db->select('*');
        $this->db->from($table);
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        //$this->db->order_by('id', 'desc');
        return ($row) ?  $query->row() :  $query->result();
    }

    public function getRow($table,$where = array()){
        $this->db->select('*');
        $this->db->from($table);
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        return   $query->row();
    }


    //Veri Tabanına Sorgu
    public function query($query){
        $result = $this->db->query($query)->result();
        return $result;
    }

    //Son Eklenen İD Getirme
    public  function insertID(){
        return $this->db->insert_id();
    }

    //Coklu resim upload
    public function multiple_images($image = array()){
        return $this->db->insert_batch('gallery',$image);
    }

    //Tersten sıralama
    function descGetTable($table,$where = array(),$row = false){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'desc');
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        return ($row) ?  $query->row() :  $query->result();
    }

    function insertPage($title,$desc,$h1,$html,$page,$img,$keyw,$time){
         return $this->db->query("INSERT INTO `pages`(`title`, `description`, `h1`, `html_codes`, `page`, `img`, `keywords`, `isActive`, `up_date`) values('$title','$desc','$h1','$html','$page','$img','$keyw',1,$time)");
    }

    function updatePage($id,$title,$desc,$h1,$html,$page,$img,$keyw,$time, $isActive)
    {
        if($img != "empty")
            return $this->db->query("UPDATE `pages` set title = '$title', description = '$desc', h1 = '$h1', html_codes = '$html', page = '$page', img = '$img', keywords = '$keyw', up_date = $time, isActive = $isActive");
        else
            return $this->db->query("UPDATE pages set title = '$title', description = '$desc', h1 = '$h1', html_codes = '$html', page = '$page', keywords = '$keyw', up_date = $time, isActive = $isActive where id = $id ");
    }



}