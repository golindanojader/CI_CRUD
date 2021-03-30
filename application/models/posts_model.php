<?php 



class posts_model extends CI_Model{

		   public function __construct()
		    {
		        $this->load->database();
		    }


		  public function get_posts(){

		  $query = 	$this->db->get('blogs');

		  return $query->result_array(); 

		  }



		  public function get_posts_single($param){

		  	$this->db->where('slug', $param);
		  	$result = $this->db->get('blogs');

		  	return $result->row_array();


		  }


		  public function get_posts_edit($param){

		  	$this->db->where('id', $param);
		  	$result = $this->db->get('blogs');

		  	return $result->row_array();


		  }


		  public function insert_post(){


		  		$data = array(
		  			
		  			'title' =>$this->input->post('title'),
		  			'slug'  =>url_title($this->input->post('title'),'-', true),
		  			'body'  =>$this->input->post('body'),
		  		);

		  		return $this->db->insert('blogs',$data);


		  	
		  }


		  public function update_post(){

		  		$id = $this->input->post('id');
		  		$data = array(
		  			
		  			'title' =>$this->input->post('title'),
		  			'body'  =>$this->input->post('body'),

		  		);

		  		 $this->db->where('id',$id);

		  		 return $this->db->update('blogs', $data);


		  	
		  }


		  public function delete_post(){

		  	$id = $this->input->post('id');
		  	$this->db->where('id',$id);
		  	$this->db->delete('blogs');


		  	return true;


		 }


		 public function login(){


		 	$this->db->where('email',$this->input->post('username',true));
		 	$this->db->where('password',$this->input->post('password',true));
		 	$result = $this->db->get('user');


		 	if ($result->num_rows()==1) {
		 		

		 		return $result->row_array();
		 	}else{

		 		return false;   
		 	}

		 }

}