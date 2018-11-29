<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	protected $_validate = array(
			array('password','require','原密码不能为空！'),
			array('newpwd','require','新密码不能为空！'),
			array('repwd','require','确认密码不能为空！'),
			array('newpwd','repwd','新密码与确认密码不一致！',0,'confirm'),
		);
}
?>