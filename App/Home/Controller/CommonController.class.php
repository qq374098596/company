<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{

	/**
	 *	获取首页公共数据
	 */
	// public function __construct(){

	// 	parent::__construct();
	// 	$data=['code'=>1];
	// 	$aar = json_encode($data);
	// 	echo $aar;
	// 	//读取加盟点评数据
	// 	// $jmdp = $this -> loadJmdp();
	// 	// //$jmdpimg = array();
	// 	// foreach ($jmdp as $k => $v) {
	// 	// 	$jmdp[$k]['imglist'] = current(json_decode($v['imglist']));
	// 	// }
	// 	// $this->assign('_jmdp',$jmdp);

	// 	// //读取导师数据
	// 	// $cyds = $this->loadCyds();
	// 	// $this->assign('_cyds',$cyds);

	// 	// //读取帖子数据
	// 	// $cyq = $this->loadCyq();
	// 	// foreach ($cyq as $k => $v) {
	// 	// 	$cyq[$k]['time'] = date('Y-m-d',$v['time']);
	// 	// }
	// 	// $this->assign('_cyq',$cyq);

	// 	// //读取严选项目数据
	// 	// $yxxm = $this->loadYxxm();
	// 	// //var_dump($yxxm);die;
	// 	// $this->assign('_yxxm',$yxxm);
	// }

	// public function index(){
	// 	//$array = new HomeController();
	// }

	/**
	 * 验证码生成
	 */
	public function captcha(){
		$config = array(
			'fontSize'=>'14',
			'length'=>'3',
			'useNoise'=>false,
			'useCurve'=>false,
			'imageW'=>'86',
			'imageH'=>'38',
			//'useImgBg'=>true,
		);
		$code = new \Think\Verify($config);
		$code->entry();
	}


	/**
	 * 获取初始化数据
	 */
	public function json($data){
		
		return json_encode($data,JSON_UNESCAPED_UNICODE); 
	}

	//读取加盟点评数据
	public function review(){
		return M('dianping')->field('pinpainame,content,pingfen,imglist')->limit(4)->select();	
	}

	//读取导师数据
	public function tutor(){
		return M('daoshi')->field('headimg,name,old,are,zizhi,xiangmu,xiangmuxiangqing,imglist')->select();
	}

	//读取帖子数据
	public function card($limit){
		$getAll = M('tiezi')
		->table('__TIEZI__ as t')->join('__USER__ as u')
		->field('t.title,t.time,u.headimg,u.nickname')->where('t.uid=u.id')->limit($limit)->select();

		return $getAll;
	}

	//读取严选项目数据
	public function strict(){
		return M('yanxuanpinpai')->field('imgsrc')->limit(10)->select();
	}
}
?>