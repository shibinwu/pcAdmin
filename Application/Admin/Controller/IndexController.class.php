<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明并继承父类
class IndexController extends Controller{

	#index方法
	public function index(){
		#展示模版
		$this -> display();
	}

	#home方法
	public function home(){
		#展示模版
		$this -> display();
	}
}