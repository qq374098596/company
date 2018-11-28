<?php
namespace Home\Controller;

class JmdpController extends CommonController{
	public function jmdp(){
		$this->assign('title','加盟点评');
		$this->display();
	}

	public function getReview(){
		$industry = M('hangye')->field('id,hyname,bgcolor')->select();
		
		$data = ['nav'=>$industry];
		$json = $this->json($data);

		echo $json;
	}
}
?>