<?php 


 class pages extends CI_Controller{

 public function __construct(){
	parent::__construct();
 	$this->load->library('session');
 }



 	 public function view($param = null){

 	 	if ($param == null) {
 	 		
		 	 	$page = "home";

		 	 	if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
		 	 		
		 	 		show_404();

		 	 	}
		 	 	$data['title'] = "New Posts";
		 	 	$data['blogs'] = $this->posts_model->get_posts();


		 	 

		 	 	$this->load->view('templates/header');
		 	 	$this->load->view('pages/'.$page,$data);
		 	 	$this->load->view('templates/footer');
 	 	

 	 	}else{

		 	 	$page = "single";

		 	 	if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
		 	 		
		 	 		show_404();

		 	 	}
		 	 	
		 	 	$data['blogs'] = $this->posts_model->get_posts_single($param);
		 	 	$data['title'] = $data['blogs']['title'];
		 	 	$data['body'] = $data['blogs']['body'];
		 	 	$data['date'] = $data['blogs']['date_published'];
		 	 	$data['id'] = $data['blogs']['id'];
		 	 
		 	 
		 	 	if ($data['blogs']) {
		 	 		
		 	 	$this->load->view('templates/header');
		 	 	$this->load->view('pages/'.$page,$data);
		 	 	$this->load->view('templates/modal');
		 	 	$this->load->view('templates/footer');

		 	 	
		 	 	}else{

		 	 		show_404();
				} 	
 	 	
 	 		}	 
		}
 	 


 	 public function login(){

 	 	echo "login"; 
 	 }



 	 public function add(){

 	 	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
 	 	$this->form_validation->set_rules('title','Title', 'required');
 	 	$this->form_validation->set_rules('body','body', 'required');

 	 	if($this->form_validation->run() == FALSE) {
 	 	
 	 		$page = "add";

		 	 	if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
		 	 		
		 	 		show_404();

		 	 	}
		 	 	$data['title'] = "Add New Post";
		 	 

		 	 	$this->load->view('templates/header');
		 	 	$this->load->view('pages/'.$page,$data);
		 	 	$this->load->view('templates/footer');


 	 	}else{

 	 		$this->posts_model->insert_post();
 	 		$this->session->set_flashdata('post_added','Post was added');
 	 		redirect(base_url());


 	 	}
 	 		
 	  }


 	    public function edit($param){


 	    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
 	 	$this->form_validation->set_rules('title','Title', 'required');
 	 	$this->form_validation->set_rules('body','body', 'required');

 	 	if($this->form_validation->run() == FALSE) {
 	 	
 	 		$page = "edit";

		 	 	if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
		 	 		
		 	 		show_404();

		 	 	}
		 	 	$data['title'] = "Edit Post";
		 	 	$data['blogs'] = $this->posts_model->get_posts_edit($param);
		 	 	$data['title'] = $data['blogs']['title'];
		 	 	$data['body']  = $data['blogs']['body'];
		 	 	$data['date']  = $data['blogs']['date_published'];
		 	 	$data['id']    = $data['blogs']['id'];
		 	 
		 	 

		 	 	$this->load->view('templates/header');
		 	 	$this->load->view('pages/'.$page,$data);
		 	 	$this->load->view('templates/footer');


 	 	}else{

 	 		$this->posts_model->update_post();
 	 		$this->session->set_flashdata('post_update','Post was updated');
 	 		redirect(base_url().'edit/'.$param);


 	 		}
 	    }


 	        public function delete(){


 	        	$this->posts_model->delete_post();
 	        	$this->session->set_flashdata('post_delete', 'Pots was deleted successfully!!!');
 	        	redirect(base_url());

 	    	
 	    }
 	
 	}

 
