<?php
namespace App\index\Controller;
use think\Controller;
class Login extends Controller{

	/**
	 * 用户登录
	 */
	public function login(){
		//var_dump(session('user'));die;
		$sessionUser = session('user');
		// if (!empty($sessionUser)) {
		// 	//var_dump(U('/'));die;
		// 	//$this->success('/');
		// };
		// if (IS_AJAX) {
		// 	$input = $_POST;
		// 	//验证码检测
		// 	$verify = new \Think\Verify();
		// 	$code = $verify->check($input['code']);
		// 	if (!$code) {
		// 		$data = [
		// 			'status' => 0,
		// 			'error' => '验证码不正确，请重新输入！'
		// 		];
		// 		$this->ajaxReturn($data);
		// 	}else{
		// 		if ($input['username'] == '' || $input['password'] == '') {
		// 			$data = [
		// 				'status'=>0,
		// 				'error' => '请输入用户名或密码！'
		// 			];
		// 			$this->ajaxReturn($data);
		// 		}else{
		// 			$username['username'] = $input['username'];
		// 			$username['status'] = 1;
					
		// 			$user = M('ucenterMember')->table('fanxiang_ucenter_member as m')
		// 			->join('__USER__ as u')
		// 			->where($username)->find();
		// 			//var_dump($user);die;
		// 			if (!$user || $user['password'] != md5($input['password'])) {
		// 				$this->ajaxReturn(['status'=>0,'error'=>'用户名或密码不正确，请重新输入！']);
		// 			}else if($user && $user['password'] == md5($input['password'])){
		// 				session('user',array('id'=>$user['id'],'name'=>$user['username'],'email'=>$user['email'],'mobile'=>$user['mobile'],'headimg'=>$user['headimg']));
		// 				$this->ajaxReturn(['status'=>1]);
		// 			}
		// 		}
		// 	}
		// };
		
		return $this->fetch();
	}

	/**
	 * 用户注册
	 */
	public function register(){
		if (IS_AJAX) {
			$input = $_POST;

			//验证码检测
			$verify = new \Think\Verify();
			$code = $verify->check($input['code']);
			if (!$code) {
				$this->ajaxReturn(['status'=>0,'error'=>'验证码不正确，请重新输入！']);
			}else{
				if ($input['username'] == '' || $input['phone'] == '' || $input['password'] == '' || $input['repassword'] == '') {
					$this->ajaxReturn(['status'=>0,'error'=>'不能为空！']);
				}else{
					
				}
			}
		}
		
		
		$this->display();
	}

	/**
	 * 用户退出
	 */
	public function quit(){
		session('user',null);
		$this->success('退出中...',U('Index/index'));
	}
	
}
?>