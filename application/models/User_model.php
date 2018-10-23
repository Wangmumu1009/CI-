<?php
/**
 * Created by PhpStorm.
 * User: asus-pc
 * Date: 2018/10/20
 * Time: 14:49
 */

class User_model extends CI_Model
{
    public function save($name,$password){
        $data = array(
            'name' => $name,
            'password' => $password,
        );
        $query = $this->db->insert('t_user',$data);
        return $query;
    }
}