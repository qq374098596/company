<?php
namespace app\index\model;
use think\Model;
use think\Validate;

class Index extends Model
{
	protected $pk = "id";
	protected $table = "fanxiang_zhenduan";

	public function diagnosis($data)
	{
		var_dump(session());
		var_dump($data);die;
		$resule = $this->Validate([

			'brand' => 'require',
			'contact' => 'require|email',
		],[
			'brand.require' => '品牌不能为空！',
			'contact.require' => '联系方式不能为空！',
			'contact.email' => '邮箱格式不正确！',
		])->allowField('token')->save($data);

		if (!$resule) {
			return ['valid'=>0,'msg'=>$this->getError()];
		}
	}
}
?>