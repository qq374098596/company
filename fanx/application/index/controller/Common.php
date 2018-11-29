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
	 * 获取JSON数据
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

	/**
	 *	读取帖子数据
	 *	$uid [id]
	 */
	public function card($limit,$uid){
		
		if (!$uid) {
			$m = array('t.uid=u.id');
		}else{
			$m = array('t.uid=u.id',$uid);
		}
		
		$getAll = M('tiezi')
		->table('__TIEZI__ as t')->join('__USER__ as u')
		->field('t.title,t.time,u.headimg,u.nickname')->where($m)->limit($limit)->select();

		return $getAll;
	}

	//读取严选项目数据
	public function strict(){
		return M('yanxuanpinpai')->field('imgsrc')->limit(10)->select();
	}

	/**
	 *
	 *	品牌信息
	 *
	 */
	public function getReview(){
		//单个品牌全部评论数
		$allreview = M('dianping')->table('fanxiang_dianping d')->field('count(1)')->where('d.pinpaiid=p.id')->select(false);
		//单个品牌评分总和
		$allscore = M('dianping')->table('fanxiang_dianping d')->field('sum(d.pingfen)')->where('d.pinpaiid=p.id')->select(false);

		//单个商品评论条数
		$comment = M('dianping')->table('fanxiang_dianping d,fanxiang_pinglun pl')->where('d.id=pl.mid AND p.id=d.pinpaiid AND pl.mkind=1 AND pl.gid=0')->field('count(1)')->select(false);

		// $c = M('dianping')->field("$allscore AND b.pingfen>=5")->select(false);
		// $a = M('pinpai')->table('fanxiang_pinpai as p')->join('fanxiang_dianping as d')->where('d.pinpaiid=p.id')->group('p.id')->field('sum(d.pingfen)')->select();

		//单个品牌信息重组
		$brand = M('pinpai')->table('fanxiang_pinpai p')->field("p.id,p.name,p.imgsrc,p.tel,p.kind,(".$allreview.") allreview,(".$allscore.") allscore,round(((".$allreview." AND d.pingfen>=5)/(".$allreview."))*100) fen,(".$comment.") comment_count")->select();
		
		return $brand;
		//$getAll = "select id,name,imgsrc,tel,kind from fanxiang_pinpai";
	}
}
?>