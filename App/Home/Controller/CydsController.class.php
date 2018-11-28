<?php
namespace Home\Controller;

class CydsController extends CommonController{
	public function cyds(){
		$this->assign('title','创业导师');
		$this->display();
	}

	public function getTutor(){
		$tutor = M('daoshi')
		->table('__DAOSHI__ as d')->join('__HANGYE__ as h')
		->field('d.headimg,d.name,d.old,d.zizhi,d.are,d.xiangmu,d.jieshao,h.hyname')
		->where('d.hangyeid=h.id')
		->select();
		//var_dump($data);die;
		$trade = M('hangye')->field('id,hyname')->limit(8)->select();
		$resule = array();
		foreach ($trade as $k => $v) {
			$resule[$v['id']] = $v['hyname'];
		}

		$data = ['daoshis'=>$tutor,'profession'=>$resule];
		$json = $this->json($data);
		//var_dump($json);die;
		echo $json;
	}
}
?>