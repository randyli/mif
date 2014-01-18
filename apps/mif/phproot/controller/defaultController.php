<?php
class defaultController extends AdminController
{
    public function actionIndex() {
    	$data = array();
    	$this->module = 'index';
		$this->render("index", $data);
	}
}
?>