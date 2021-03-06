<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
use Think\Model\UserModel;
use Org\Util\Rbac;

#声明类并且继承父类
class PublicController extends Controller{

	#login方法
	public function login(){
		#展示模版
		$this -> display();
	}
	#manageblog方法
	public function manageblog(){
		#展示模板
		$this -> display();
	}
	#messages方法
	public function messages(){
		#展示模板
		$this -> display();
	}
	#reports方法
	public function reports(){
		$this -> display();
	}

	#登录验证
	public function check(){
		#接收数据
		$post = I('post.');
			#判断用户名和密码
			$model = M('User');
			#查询
			$post['password']= md5($post['password']);
			$data = $model -> where($post)->find();
			#判断用户是否存在
			if($data){
				#会话控制记录用户登录信息
				session('uid',$data['uid']);//记录用户id
				session('username',$data['username']);//记录用户名
				session('role_id',$data['role_id']);//记录用户角色id
				session('picurl',$data['picurl']);//记录用户头像
				session('email',$data['email']);//记录用户邮箱
				session('nickname',$data['nickname']);//记录用户昵称
				//判断是否是超级管理员
				#提示
				$this -> success('登录成功！',U('Index/index'),1);
				if($_SESSION['username'] == C('RBAC_SUPERADMIN')) {
					session(c('ADMIN_AUTH_KEY'),true);
				}
				//读取用户权限
				Rbac::saveAccessList();
				// 加入登录日志
				$data['ip'] = $clientIP = '211.70.23.4';
				//todo 上线时候打开注释
//				$clientIP = UserModel::getIP();
				$taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $clientIP;
				$IPinfo = json_decode(file_get_contents($taobaoIP));
				$data['city'] = $city = $IPinfo->data->city;
				$data['last_login_time'] = time();
//				dump($date);die;
				//TODO 把日志加入到数据表中
				$model = M('Admin_user_loginlog');
				$model -> add($data);
			}else{
				#用户名或密码错误
				$this -> error('用户名或密码错误',U('login'),1);
			}
	}

	#用户退出
	public function logout(){
		#清空session
		session(null);
		if(!session('?uid')){
			#清空成功
			$this -> success('退出成功',U('login'),1);
		}
	}


}