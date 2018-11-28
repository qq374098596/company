<?php
namespace Home\Controller;
//use Think\Controller;
class IndexController extends HomeController {
    public function index(){
    	//var_dump(session('user'));die;
    	// if (su) {
    	// 	# code...
    	// }
    	$this->assign('title','返乡创业网');
        $this->display();
    }

    /**
	 * 诊断提交
	 *
	 */
	public function diagnosis(){
		//var_dump($_POST);die;
		$pinpai = I('pinpai');
		$contact = I('contact');
		$address = I('address');
		$uid = I('uid');
		if ($pinpai != "" && $contact != "" && $address != "") {
			$data['pinpai'] = $pinpai;
			$data['addr'] = $contact;
			$data['jsfs'] = $address;
			$data['uid'] = $uid;
			$data['time'] = time();
			$addDiagnosis = M('zhenduan')->data($data)->add();
			//var_dump($addDiagnosis);die;
			if (!$addDiagnosis) {
				$this->ajaxReturn(['status'=>0,'error'=>'诊断失败，请重新填写诊断']);
			}else{
				$this->ajaxReturn(['status'=>1,'error'=>'诊断成功']);
			}
			
		}else{
			$this->ajaxReturn(['status'=>0,'error'=>'表单不能为空！']);
		}
	}
}