<?php
class module extends BaseDb
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    
	public function getModules(){
		$sql = "select * from module";
		return $this->fetch_all($sql);
	}
    
}
?>