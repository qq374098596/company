<?php
namespace App\index\controller;
use think\Controller;

class Review extends Controller{
	public function index(){
		$this->assign('title','加盟点评');
		return $this->fetch();
	}

	public function getReview(){
		$industry = M('hangye')->field('id,hyname,bgcolor')->select();
		
		$data = ['nav'=>$industry];
		$json = $this->json($data);

		echo $json;
	}
}
?>