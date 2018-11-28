<?php
namespace Home\Controller;

class GywmController extends CommonController{
	public function gywm(){
		$this->assign('title','关于我们');
		$this->display();
	}
}
?>