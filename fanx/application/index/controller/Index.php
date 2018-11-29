<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{

	//	初始化
	protected $db;
	protected function _initialize()
	{
		parent::_initialize();
		$this->db = new \app\index\model\Index();
	}

    public function index()
    {

    	$this->assign('title','返乡创业网');
        return $this->fetch();
    }

    /**
	 * 诊断提交
	 *
	 */
	public function diagnosis(){
		if (request()->isAjax()) {
			$data = $this->db->diagnosis($_POST);
			var_dump($data);die;
		}else{
			
		}
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
