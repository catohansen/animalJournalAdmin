<?php
/**
 * Created by PhpStorm.
 * User: zoubair
 * Date: 01/01/2018
 * Time: 16:48
 */

class contact_model extends CI_Model
{

    function fetch_contacts(){
        $query = $this->db->get("contact");
        //select * from contact
        return $query;
    }
}