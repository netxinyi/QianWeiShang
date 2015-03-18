<?php 
abstract class baseModel {
	
	protected $table;
	protected $primaryKey = '';
	protected $query = null;
	protected $where = array();
	protected $field = '*';
	
	public function __construct(){
		$this->query = DB::table($this->table);
	}
	
	public function table($table){
		$this->query->table($table);
		return $this;
	}
	
	/*
	 * 设置where条件
	 * @param mixed $field where数组或字段名
	 * @param string $value where的值
	 * @return this
	 */
	public function where($field, $value = null){
		switch(gettype($field)){
			case 'string' :
				$this->query->where($field, $value);
				break;
			default :
				foreach($field as $key=>$val){
					$this->query->where($key, $val);
				}
				break;
		}
		return $this;
	}
	
	public function field($fields = '*'){
		switch(gettype($fields)){
			case 'string ' :
				$fields= func_get_vars();
			default :
				$this->query->select($fields);
				break;
		}
		return $this;
	}
	
	public function first($primaryKey = null){
		if($primaryKey && $this->primaryKey){
			return $this->query->where($this->primaryKey,$primaryKey)->first();
		}
		return $this->query->first();
	}

}