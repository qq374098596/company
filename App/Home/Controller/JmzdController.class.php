<?php
namespace Home\Controller;

class JmzdController extends CommonController{
	public function jmzd(){
		$this->assign('title','加盟诊断');
		$this->display();
	}
}
?>