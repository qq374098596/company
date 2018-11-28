<?php
namespace Home\Controller;
//use Think\Controller;

class UcenterController extends CommonController{
	public function index(){
		$user = session('user');
		$uid['uid'] = $user['id'];

		//收藏数量
		$collection = M('shoucang')->where($uid)->count();
		//帖子数量
		$cardCount = M('tiezi')->where($uid)->count();
		//积分数
		$integral = M('jifen')->where($uid)->count();

		//诊断记录
		$diagnosis = M('zhenduan')->field('pinpai,jsfs,time')->where($uid)->select();
		foreach ($diagnosis as $k => $v) {
			$diagnosis[$k]['time'] = date('Y-m-d',$v['time']);
		}

		//我的帖子
		$card = $this->card();
		foreach ($card as $k => $v) {
			$card[$k]['time'] = date('Y/m/d H:i:s',$v['time']);
		}
		//var_dump($card);die;
		$this->assign('card',$card);
		$this->assign('diagnosis',$diagnosis);
		$this->assign('integral',$integral);
		$this->assign('cardCount',$cardCount);
		$this->assign('collection',$collection);
		$this->assign('title','个人中心');
		$this->display();
	}
}
?>