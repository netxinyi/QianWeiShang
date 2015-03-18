<?php

class termModel extends baseModel {

	protected $table = 'terms';
	protected $primaryKey = 'term_id';
	
	public function getTerm($termId){
		
		return $this->first($termId);
	}
	
	
}
