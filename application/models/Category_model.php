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

    public function getCategoryByID($category_id)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->get('categories');
        //SELECT * FROM categories WHERE category_id = 1
    }
}