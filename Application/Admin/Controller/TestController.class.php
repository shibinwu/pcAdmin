<?php
/**
 * 
 * @authors	九炼 ()
 * @wat 传智播客教育集团 PHP学院
 * @date    2016-08-07 11:18:19
 * @url 	http://www.itcast.cn/php
 * @desc	请将此替换为文件描述...
 *
 * ━━━━━━神兽出没━━━━━━
 * 　　   ┏┓　 ┏┓
 * 　┏━━━━┛┻━━━┛┻━━━┓
 * 　┃              ┃
 * 　┃       ━　    ┃
 * 　┃　  ┳┛ 　┗┳   ┃
 * 　┃              ┃
 * 　┃       ┻　    ┃
 * 　┃              ┃
 * 　┗━━━┓      ┏━━━┛ Code is far away from bugs with the animal protecting.
 *       ┃      ┃     神兽保佑,代码无bug。
 *       ┃      ┃
 *       ┃      ┗━━━┓
 *       ┃      　　┣┓
 *       ┃      　　┏┛
 *       ┗━┓┓┏━━┳┓┏━┛
 *     　  ┃┫┫　┃┫┫
 *     　  ┗┻┛　┗┻┛
 *
 * ━━━━━━感觉萌萌哒━━━━━━
 */

#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明并继承
class TestController extends Controller{

	#index方法，模版展示
	public function index(){
		#第一种方法
		$this -> display();
		#第二种方法
		#$this -> display('index2');
		#第三种方法
		#$this -> display('Index/test');
	}

	#test1方法
	public function test1(){
		echo time();
	}

	#test2方法，U方法的测试
	public function test2(){
		#生成当前控制器下index方法的访问地址
		echo U('index');  ///index.php/Admin/Test/index.html
		#生成Index控制器下的index方法的地址
		echo U('Index/index'); ///index.php/Admin/Index/index.html
		#生成当前控制器下index方法的访问地址，并且传递参数id=1
		echo U('index',array('id' => 1)); ///index.php/Admin/Test/index/id/1.html
	}

	#test3方法。成功跳转
	public function test3(){
		#成功跳转
		$this -> success('执行成功',U('test1'),3);
	}

	#test4方法。失败跳转
	public function test4(){
		#失败跳转
		$this -> error('执行失败',U('test1'),3);
	}

	#test5，变量的传递/分配
	public function test5(){
		#定义变量
		$date = date('Y-m-d H:i:s',time());
		#传递变量
		$this -> assign('date',$date);
		#展示模版
		$this -> display();
	}

	#test6，展示模版，模版常量替换机制
	public function test6(){
		#展示模版
		$this -> display();
	}

	#第三方接口调用
	public function test7(){

	}
}



