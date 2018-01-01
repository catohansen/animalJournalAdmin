<?php
/**
 * Created by PhpStorm.
 * User: zoubair
 * Date: 25/12/2017
 * Time: 10:36
 */

class Auth extends CI_Controller{

    public function login(){

        if(isset($_POST['login'])){
           $username=$_POST['username'];
           $password=$_POST['password'];

           $this->db->select('*');
           $this->db->from('membership');
           $this->db->where(array('user_name'=>$username,'password'=>$password));

           $query=$this->db->get();
           $user =$query->row();
           // print_r($user);
           if($query->num_rows() > 0){
               $this->session->set_flashdata('success','You are logged in now');
               $_SESSION['user_logged']=TRUE;
               $_SESSION['username']=$user->user_name;
                redirect("Auth/register","refresh");
           }else{
               $this->session->set_flashdata('error','No such account exists in system');
                redirect("Auth/login","refresh");
           }


        }
        //load log in page
        $this->load->view('Auths/login');
    }
    public function register(){

        if(isset($_POST['register'])){
            $this->form_validation->set_rules('firstname','Firstname','required');
            if($this->form_validation->run() == TRUE){
                echo 'validated';
                $data=array(
                    'first_name'=>$_POST['firstname'],
                    'last_name'=>$_POST['lastname'],
                    'user_name'=>$_POST['username'],
                    'business_name'=>$_POST['businessname'],
                    'email'=>$_POST['email'],
                    'password'=>$_POST['password'],
                    'phoneNo'=>$_POST['phoneNoInter'],
                    'country'=>$_POST['countrysel']

                );

                $this->db->insert('membership',$data);
                $this->session->set_flashdata('success','your account has been registered. you can login now');
                redirect("Auth/register","refresh");
            }
        }
        //load the register page
        $this->load->view('Auths/register');
    }

}