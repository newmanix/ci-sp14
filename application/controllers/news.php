<?php
//news.php is a codeigniter controller

class News extends CI_Controller
{
	function __construct(){
		parent::__construct();	
		$this->load->helper('url');
	}


	public function index($provider)
	{//here we're making data available to our header and footer
	
		switch($provider)
		{
			case 'yahoo';
			$request= 'http://rss.news.yahoo.com/rss/software';
			break;
			
			default:	
			$request= 'https://news.google.com/news/feeds?pz=1&cf=all&ned=us&hl=en&output=rss';
			
		}

		$this->load->model('News_model');
		$data['xml'] = $this->News_model->get_news($request);
	
		$data['title'] = "Here is our title tag!";
		$data['style'] = "cerulean.css";
		$data['banner'] = "Here is our Web Site!";
		$data['copyright'] = "copyright goes here!";
		$data['base_url'] = base_url();
		$this->load->view('header',$data);
		
		//var_dump($data['query']);
		$this->load->view('news_view',$data);
		
		$this->load->view('footer',$data);

	}
}


?>