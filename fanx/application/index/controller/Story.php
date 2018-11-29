<?php
namespace App\index\Controller;
use think\Controller;

class Story extends Controller{
	public function index(){
		$this->assign('title','创业故事');
		return $this->fetch();
	}

	public function getStory(){
		$story = M('gushi')->field('title,banner,time,gushi')->select();
		foreach ($story as $k => $v) {
			$story[$k]['time'] = date('Y-m-d',$v['time']);
			$story[$k]['gushi'] = mb_substr($v['gushi'],0,480);
			$story[$k]['gushi'] = $this->img_empty($story[$k]['gushi'])."\"".">";
			//var_dump($story[$k]['gushi']);
		}
   
		$data = ['gushi'=>$story];
		$json = $this->json($data);
		//var_dump($json);die;
		echo $json;
	}

	//截取文章IMG
	public function img_empty($str){
		$pattern='/<img\s+src=[\\\'| \\\"](.*?(?:[\.gif|\.jpg]))[\\\'|\\\"].*?[\/]?>/';
		$str1 = preg_replace($pattern," ",$str);
		return $str1;
	}
}
?>