<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        if ( $this->session->userdata('id')){
            redirect(base_url("dashboard"));
        }
    }

    public function index()
    {

    }

    public function login(){

        $this->form_validation->set_rules("username","Kullanıcı adı","required|trim|min_length[3]|max_length[25]|alpha_numeric");
        $this->form_validation->set_rules("password","Parola","required|trim|min_length[6]");
        $error_messages = array(
            "required"   => "<strong>{field}</strong> alanını boş bırakamazsınız.",
            "min_length" => "<strong>{field}</strong> alanı en az {param} karakter olmalı.",
            "max_length" => "<strong>{field}</strong> alanı en fazla {param} karakter alabilir.",
            "alpha_numeric" => "<strong>{field}</strong> alanına sadece harf ve sayı girebilirsiniz.."
        );
        $this->form_validation->set_message($error_messages);
        if($this->form_validation->run() === false)
        {
            $this->session->set_flashdata("error",validation_errors());
            $this->login_form();
        }
        else
        {
            $row = $this->basic_model->get("users",array(
                "u_id"   => $_POST["username"]
            ));
            $user = false;
            if($row) {
                //$this->session->set_userdata("photo",($row->photo == "") ? "avatar.jpg" : $row->photo);
                if (md5($this->input->post("password")) == $row->u_pw) {
                    $user = $this->basic_model->get("users",array(
                        "u_id"  => $this->input->post("username")
                    ));
                }
            }
            if($user)
            {
                $this->session->set_userdata("id",$row->id);
                redirect(base_url("dashboard"));
            }
            else
            {
                $this->session->set_flashdata("error","Kullanıcı adı veya parola hatalı.");
                $this->login_form();
            }
        }
    }

    public function login_form(){
        $data['title'] = "Giriş Ekranı";
        $this->load->view("panel/login/loginPage",$data);
    }
}
