<?php

class postModel extends baseModel {

	protected $table = 'posts';
	protected $metaTable = 'posts_meta';
	protected $primaryKey = 'post_id';
	
	public function getPost($postId){
		
		return $this->first($postId);
	}

}
