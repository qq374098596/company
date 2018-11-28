<?php
namespace Home\Controller;

class YxxmController extends CommonController{
	public function yxxm(){
		$this->assign('title','严选项目');
		$this->display();
	}

	public function getStrictly(){

		//严选项目
		$strictly = M('pinpai')
		->table('__PINPAI__ as p')->join('__HANGYE__ as h')
		->field('p.name,p.imgsrc,p.tel,p.hangyeid,p.company,p.jiamengfei,p.jiamengshop,p.zhiyingshop,h.hyname')
		->where('p.kind=2 AND p.hangyeid=h.id')
		->select();
		
		//行业
		$trade = M('hangye')->field('id,hyname')->limit(10)->select();
		$resule = array();
		foreach ($trade as $k => $v) {
			$resule[$v['id']] = $v['hyname'];
		};
		$data = ['yxitems'=>$strictly,'allprofession'=>$resule];
		$json = $this->json($data);
		//var_dump($json);die;
		//$this->ajaxReturn($json);
		echo $json;
	}
}
?>