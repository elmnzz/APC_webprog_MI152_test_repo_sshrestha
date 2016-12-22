<?php
 
class Myreadeditdelete_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get myinput by id
     */
    function get_myinput($id)
    {
        return $this->db->get_where('data',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all myinput
     */
    function get_all_myinput()
    {
        return $this->db->get('data')->result_array();
    }
    
    /*
     * function to add new myinput
     */
    function add_myinput($params)
    {
        $this->db->insert('data',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update myinput
     */
    function update_myinput($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('data',$params);
        if($response)
        {
            return "data updated successfully";
        }
        else
        {
            return "Error occuring while updating data";
        }
    }
    
    /*
     * function to delete myinput
     */
    function delete_myinput($id)
    {
        $response = $this->db->delete('data',array('id'=>$id));
        if($response)
        {
            return "data deleted successfully";
        }
        else
        {
            return "Error occuring while deleting data";
        }
    }
}
