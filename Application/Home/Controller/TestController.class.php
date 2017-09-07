<?php
#声明命名空间
namespace Home\Controller;

#引入父类元素
use Think\Controller;

#定义类并且继承父类
class TestController extends Controller{

	#test1方法
	public function test1(){
		echo 'hello kitty.';
	}
}