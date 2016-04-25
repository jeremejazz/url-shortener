<?php

class home extends Controller{


		public function index(){
			$this->f3->set('title',"Welcome");
 
 			$this->f3->set('view','home.htm');
 
		}


		
}