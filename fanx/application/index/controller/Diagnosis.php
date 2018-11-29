<?php
namespace app\index\controller;
use think\Controller;

class Diagnosis extends Controller{

	public function index(){
		$this->assign('title','加盟诊断');
		return $this->fetch();
	}
}
?>