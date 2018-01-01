<?php
/**
 * Created by PhpStorm.
 * User: zoubair
 * Date: 28/12/2017
 * Time: 14:28
 */

class Contact extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function contacts()
    {
        $this->load->model("contact_model");
        $cnt_data["contacts_data"]=$this->contact_model->fetch_contacts();
        //load contact page
        //$this->load->view('Contacts/app-contact');
        $this->load->view('Contacts/app-contact',$cnt_data);
    }

    public function addContacts()
    {
        if (isset($_POST['contactFrmSubmit']) && !empty($_POST['fullname']) && !empty($_POST['businessname']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['phoneNo']) && !empty($_POST['role']) && $_FILES["avatar"]["name"] != '' ) {


            //echo 'ok';
           // if($_FILES["avatar"]["error"] == 0){
                //image task
            $fileName = explode('.', $_FILES["avatar"]["name"]);
            $ext = end($fileName);

                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
                //   if(isset($_POST["submit"])) {


// Check if file already exists
                if (file_exists($target_file)) {
                    //echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
// Check file size
                if ($_FILES["avatar"]["size"] > 500000) {
                    //echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
// Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
// Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo 'no';
                    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                } else {
                    $fullname = $_POST['fullname'];
                    $businessname = $_POST['businessname'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $country = $_POST['country'];
                    $phoneNo = $_POST['phoneNo'];
                    $role = $_POST['role'];
                    $imgName = $fullname . '.' . $ext;
                    $imgFinalName = str_replace(' ', '', $imgName);
                    $target_file = $target_dir . $imgFinalName;
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        // Submitted form data





                        $data=array(
                            'full_name'=>$fullname,
                            'business_name'=>$businessname,
                            'email'=>$email,
                            'address'=>$address,
                            'city'=>$city,
                            'country'=>$country,
                            'phone_no'=>$phoneNo,
                            'role'=>$role,
                            'avatar'=>$imgFinalName

                        );

                        $this->db->insert('contact',$data);
                        echo "ok";

                    }

                }

           // }

            //end//
           // $this->session->set_flashdata('success','your account has been registered. you can login now');
           // redirect("Auth/register","refresh");

        }else{
            echo 'no';

        }


    }
}