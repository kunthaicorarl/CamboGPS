<?php
class link_model extends CI_Model
{

	// Slect Link
	public function select(){
		$this->db->order_by('id',"desc");
		$query = $this->db->get('link_download');
		return $query->result_array();
	}

    // Insert Link New
    public function insertRow($table, $data){
        $this->db->insert($table, $data);
        return  $this->db->insert_id();
    }

    // Updage Link
    public function updateRow($table, $col, $colVal, $data) {
        $this->db->where($col,$colVal);
        $this->db->update($table,$data);
        return true;
    }

    // Delete Data by ID
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('link_download');
        return true;
    }

    // Select Single Post by ID
    public function get_single_data($id = FALSE)
    {
        $query = $this->db->get_where('link_download', array('id' => $id));
        return $query->row_array();
    }      

}