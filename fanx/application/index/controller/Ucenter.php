<?php
namespace Home\Controller;
//use Think\Controller;
use Think\Model;

class UcenterController extends CommonController{
	public function index(){
		$user = session('user');
		$uid = $user['id'];

		//收藏数量
		$collection = M('shoucang')->where("uid=".$uid)->count();
		//帖子数量
		$cardCount = M('tiezi')->where("uid=".$uid)->count();
		//积分数
		$integral = M('jifen')->where("uid=".$uid)->count();
		//点评数量
		$review = M('pinglun')->where("mkind=1 AND mkind=4 AND id=".$uid)->count();
		//var_dump($review);die;

		//诊断记录
		$diagnosis = M('zhenduan')->field('pinpai,jsfs,time')->where($uid)->select();
		//var_dump($diagnosis);die;
		foreach ($diagnosis as $k => $v) {
			$diagnosis[$k]['time'] = date('Y-m-d',$v['time']);
		}

		//我的帖子
		$card = $this->card("",$uid);
		foreach ($card as $k => $v) {
			$card[$k]['time'] = date('Y/m/d H:i:s',$v['time']);
		}

		
		//var_dump($card);die;
		$this->assign('review',$review);
		$this->assign('card',$card);
		$this->assign('diagnosis',$diagnosis);
		$this->assign('integral',$integral);
		$this->assign('cardCount',$cardCount);
		$this->assign('collection',$collection);
		$this->assign('title','个人中心');
		$this->display();
	}

	public function changePwd(){
		//var_dump($_POST);die;
		$id = I('id');
		$pwd = md5(I('password'));

		$user = D('User');
		$valid = $user->create();
		if (!$valid) {
			$this->ajaxReturn(['status'=>0,'error'=>$user->getError()]);
		}else{
			$user1 = M('ucenterMember')->field('password')->where($id)->select();
			//var_dump($aa);die;
			if ($pwd != $user1[0]['password']) {
				$this->ajaxReturn(['status'=>0,'error'=>'原密码不正确，请重新输入！']);
			}else{
				$uid['id'] = $id;
				$password['password'] = md5(I('newpwd'));
				$userup = M('ucenterMember')->where($uid)->save($password);
				//var_dump($userup);die;
				if (!$userup) {
					$this->ajaxReturn(['status'=>0,'error'=>'密码修改失败，请稍后重试！']);
				}else{
					$this->ajaxReturn(['status'=>1]);
				}
			}
			
		}
		
	}
}
?>