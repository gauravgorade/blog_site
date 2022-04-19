<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->model('Contact_model');
		$this->load->model('Blog_model');
		$this->load->model('Email_model');
		$this->load->library('pagination');
        
    }

	public function index($rowno=0)
	{
 


	
		$notzeroblog=$this->Blog_model->get_active_blogdata();
		  
	    if($notzeroblog){
		

		  $data['special_cat'] = $this->Blog_model->get_special_cat();
		  $data['rand'] = $this->Blog_model->get_random_blogs();
		  $data['last_blog'] = $this->Blog_model->last_blog();
		  $data['_5blog'] = $this->Blog_model->get_5_random_blogs();
		  $data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
	
          // Special Catogery for home
     	  $data['cat_result'] = $this->Blog_model->get_special_cat_stable();

		  $data['tag_result'] = $this->Blog_model->get_blogtagdata();
	      $data['result']=$this->Blog_model->get_active_blogdata();


		    $search_text = "";
		    if($this->input->post('submit') != NULL )
		    {
		    	$search_text = $this->input->post('search');
		    	$this->session->set_userdata(array("search"=>$search_text));
		    }else
		    {
		    	if($this->session->userdata('search') != NULL){
		    		$search_text = $this->session->userdata('search');
		    	}
		    }

		     $rowperpage = 10;  
   
             if($rowno != 0){  
             $rowno = ($rowno-1) * $rowperpage;  
             }  
    
      	
            $allcount = $this->Blog_model->getrecordBlogCount($search_text);
	 	    $users_record = $this->Blog_model->getBlogData($rowno,$rowperpage,$search_text);

		    $data['result'] = $users_record;
		    $data['row'] = $rowno;
		    $data['search'] = $search_text;
		    $this->load->view('index',$data);

		
	}else{	
		$this->load->view('maintenance');
	}

	}

	

	public function category()
	{
		$this->load->view('single_category');
	}

	public function single($blog_name)
	{
		$data['_5blog'] = $this->Blog_model->get_5_random_blogs();
        $data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$data['tag_result'] = $this->Blog_model->get_blogtagdata();
		$data['result'] = $this->Blog_model->get_blogslug_data($blog_name);
		$this->load->view('single_blog',$data);
	}

	public function contact()
	{
		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$this->load->view('contact',$data);
	}


	public function about()
	{
		 
		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$this->load->view('about',$data);
	}


	public function privacy_policy()
	{

		$data['_5blog'] = $this->Blog_model->get_5_random_blogs();
        $data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$this->load->view('privacy_policy',$data);
	}
	
	public function terms()
	{
		$data['_5blog'] = $this->Blog_model->get_5_random_blogs();
        $data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$this->load->view('terms_condition',$data);
	}
	public function disclaimer()
	{
		
		$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$this->load->view('disclaimer',$data);
	}
	
	public function error404()
	{
		$this->load->view('404');
	}
	public function error505()
	{
		$this->load->view('505');
	}
	




























	

// 
	public  function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

// 


	public function contact_inquiry()
	{



		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);
			return $data;
		}


		

		$url  = $this->input->post('url');
		$c_name =  test_input($this->input->post('name'));
		$c_mobile=  test_input($this->input->post('phone'));
		$c_email=  test_input($this->input->post('email'));
		$c_subject=  test_input($this->input->post('subject'));
		$c_message=  test_input($this->input->post('message'));
		$c_date = date("Y-m-d");
		$c_time = date("H:i:s");
		$c_status= "1";
		$c_bstatus= "0";
	
		$data = array(
			'c_name' => $c_name,
			'c_mobile' => $c_mobile,
			'c_email' => $c_email,
			'c_subject' => $c_subject,
			'c_message' => $c_message,
			'c_date' => $c_date,
			'c_time' => $c_time,
			'c_status' => $c_status,
			'c_bstatus' => $c_bstatus,
		);
	
		$this->Contact_model->insert_data($data);

		$this->Email_model->contact_inquiry_email_user($c_name,$c_email);

		$this->Email_model->contact_inquiry_email_admin($c_name,$c_email,$c_subject,$c_message);

		$this->session->set_flashdata('success','for Contacting us! Talk to you soon.');
		redirect($url);
	}




	// Blog

	public function blog_comment(){


		if (isset($_POST['name'])  && isset($_POST['email']))
        {
           
           $blog_id =$this->input->post('blog_id');
           $name= $this->input->post('name');
           $emaile= $this->input->post('email');
           $mobilem=  $this->input->post('mobile');
           $message= $this->input->post('message');
           $date =date("Y-n-d"); $time=date('h:i A');
            $data= array( 'blog_id' => $blog_id,
                'name' =>$name,'email' => $emaile,
                'mobile' => $mobilem,'message' => $message,
                'public_ip' =>  $this->input->ip_address(),
                'status' => 0,'entry' => 1,  'date'   => date("Y-n-d"),'time'   =>date('h:i A')
            ); //Transfering data to Model
            
            $url=  $this->input->post('url');
           
            $this->Blog_model->blogcmt($data);
        

			 $this->session->set_flashdata('success','Yours Comment is Under Observation We will Publish it Very Soon');
            redirect($url);
                
        } 
        else 
        {
            redirect(base_url().'blogs');
        }

	}


	public function search_blogs()
    {   
		
		$search_text = "";
		if($this->input->post('submit') != NULL )
		{
			$search_text = $this->input->post('serchname');
			$this->session->set_userdata(array("search"=>$search_text));
		}else
		{
			if($this->session->userdata('search') != NULL)
			{
				$search_text = $this->session->userdata('search');
			}
		}
	 
		$data['search_text'] = $search_text;
		$data['_5blog'] = $this->Blog_model->get_5_random_blogs();
        $data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['cat_result'] = $this->Blog_model->get_blogcatedata();
	    $data['result']=$this->Blog_model->get_search_blogdata($search_text);
        $this->load->view('search',$data);
	
    } 



	public function blog_tag($blog_name)
	{
	 	
		   $data['tresult'] = $this->Blog_model->get_single_tag_by_url($blog_name);
		   $ta_id =array();
 			if (!empty($data['tresult'])) 
			 { 
				 	foreach ($data['tresult'] as $key => $tvalue) 
				{
						$b_tag_url = $tvalue->b_tag_url;     $b_tag_id = $tvalue->b_tag_id;
					 
						$tg_expodes =  explode(" ," , $b_tag_id); $b_tag_name = $tvalue->b_tag_name;
							$data['resultb']=$this->Blog_model->get_active_blogdata();
						foreach ($data['resultb'] as $key => $bvalue) 
						{  	 $skm= $bvalue->tags_id; 	  $tg_expodes =  explode(", " , $skm);
								if (in_array($b_tag_id, $tg_expodes)){ $ta_id[] = $bvalue->blog_id; 
									 
					 	}  

						 
						}
							 
						$ts_id=	implode("','", $ta_id);
			 	$ts_id=	implode(" ,", $ta_id);
			}
		 
			//echo $ts_id;
		 				$data['ts_id']= $ts_id;

						$data['bt_result'] = $this->Blog_model->get_blog_tag_id_in($ts_id);
			  			 $this->db->last_query();
			 
			 	 		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
						 $data['cat_result'] = $this->Blog_model->get_blogcatedata();
						 $data['tag_result'] = $this->Blog_model->get_blogtagdata();
						 $this->load->view('tags', $data);
		
				
			 }else {
				 
				 $this->load->view('error404',);
			 }
			 //	print_r( $data['result']);

	}


	public function blog_categories($dt)
    {      
		$data['bresult'] = $this->Blog_model->get_single_cate_data_by_slug($dt);
			$ta_id =array();
 			if (!empty($data['bresult'])) 
			 {		$b_cat_id="";
					foreach ($data['bresult'] as $key => $tvalue) 
					 {
						$b_cat_id =  $tvalue->b_cat_id;
					 }

					
					$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
					$data['cat_result'] = $this->Blog_model->get_blogcatedata();
					$data['_5blog'] = $this->Blog_model->get_5_random_blogs();
					$data['result']=$this->Blog_model->get_blog_cat_id_wise($b_cat_id);
					$this->load->view('single_category',$data);
			 } else {

			 	 $this->load->view('error404',);
			 }

		
    }


	
     

	

}