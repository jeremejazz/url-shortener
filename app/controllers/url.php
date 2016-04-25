<?php

class url extends Controller{


	 

		public function shorten(){
			 
 			if($this->f3->get("POST")){

 				$url_text = $this->f3->get("POST.url");
 			 	$hash = substr(md5(uniqid(rand(1,6))), 0, 8);
 				$url = new \Url_model($this->db);
 				$url->add($hash, $url_text);

 				$this->f3->set('link' , $hash);
 				$this->f3->set('view', 'shortened.htm');


 			}else{
 				$this->f3->reroute('/');
 			}
				 
		}

		 		//link redirect
		public function r(){ 
			
			$hash = $this->f3->get("PARAMS.hash");

			$url = new \Url_model($this->db);

			$result =  $url->getByHash($hash);

			if(empty($result[0]['url'])){

				$this->f3->set("view",'error_404.htm');

			}else{

				$this->f3->reroute($result[0]['url']);
				
			}
			
		}	
	 


	 
		
}