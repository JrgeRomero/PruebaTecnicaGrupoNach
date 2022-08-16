<?php 
class Entradas_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_entradas()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('entradablog')->result_array();
	}

	function get_entradas($id)
    {
        return $this->db->get_where('entradablog',array('id'=>$id))->row_array();
    }
	
	function add_entradas($params){

		$this->db->insert('entradablog',$params);
		return $this->db->insert_id();

	}

	function delete_entradas($id)
    {
        return $this->db->delete('entradablog',array('id'=>$id));
    }

    function update_entradas($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('entradablog',$params);
    }
}
?>