<?php
namespace Home\Controller;
use Think\Controller;
class CyqController extends CommonController{
	public function cyq(){
		$this->assign('title','创业圈');
		$this->display();
	}

	public function getCard(){
		//全部帖子
		$card = $this->card();
		foreach ($card as $k => $v) {
			$card[$k]['time'] = date('Y-m-d H:i:s',$v['time']);
		}
		

		//热帖排行
		$old = $this->card(9);
		$oldCard = array();
		foreach ($old as $k => $v) {
			$k++;
			//$oldCard['num'] = ['num'=>$k];
			$oldCard[$k]['num'] = $k;
			$oldCard[$k]['title'] = $v['title'];
		};
		
		//推荐
		$recommend = $this->card(4);
		foreach ($recommend as $k => $v) {
			$recommend[$k]['time'] = date('Y-m-d H:i:s',$v['time']);
		}

		//全部话题
		$topic = M('zhuti')->select();

		//全部用户
		$user = M('user')->field('nickname,headimg')->limit(10)->select();
		$data = ['tiezi'=>$card,'cqzx'=>$user,'hottiezi'=>$oldCard,'cqtj'=>$recommend,'hothuati'=>$topic];
		
		
		//var_dump($card);die;
		$json = $this->json($data);

		echo $json;
	}
}
?>