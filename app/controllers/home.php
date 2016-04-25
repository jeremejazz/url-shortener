<?php

class home extends Controller{


		public function index(){
			$this->f3->set('title',"Welcome");
 
 			$this->f3->set('view','home.htm');
			/* $user = new User($this->db);
			$this->f3->set('users', $user->all());
			$this->f3->set('page_head','User List');
			$this->f3->set('view','user/list.htm');
			*/
		}

 
	 
		
}