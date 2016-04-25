<?php


class Url_model extends DB\SQL\Mapper{

    public function __construct(DB\SQL $db) {
        parent::__construct($db,'links');
 
    }
    
    public function all() {
        $this->load();
        return $this->query;
    }

    public function getById($id) {
        $this->load(array('id=?',$id));
        return $this->query;
    }

    public function getByHash($hash) {
        $this->load(array('hash=?', $hash));
        return $this->query;
    }

    public function add($hash, $url) {
        
        $this->hash = $hash;
        $this->url = $url;
        $this->save();
        
    }
    
    public function edit($id) {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST', function($val){


        	
return array_intersect_key($val, array_flip(array('hash','url')));
        });
        $this->update();
    }
    
    public function delete($id) {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}