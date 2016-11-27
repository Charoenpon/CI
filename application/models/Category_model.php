<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 27/11/2559
 * Time: 10:41
 */
class Category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('categories');
        //SELECT * FROM category
    }
    public function insertCategory($name)
    {
        //
        $data = array(
            'name' => $name
        );
        $this->db->insert('categories', $data);
    }
}