<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class RaceController extends CommonController{


	#add方法，展示模版文件
	// public function add(){
	// 	#展示模版
	// 	$this -> display();
	// }

	// #addOk方法，接收数据保存数据
	// public function addOk(){
	// 	#接收数据
	// 	$post = I('post.');
	// 	#获取文件的数据
	// 	$file = $_FILES['file'];
	// 	#配置上传信息
	// 	$cfg = array(
	// 			//保存根路径
	// 			'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH, 
	// 		);
	// 	#实例化上传类
	// 	$uplaod = new \Think\Upload($cfg);
	// 	#上传操作
	// 	if($file['size'] > 0){
	// 		$info = $uplaod -> uploadOne($file);//一维数组
	// 		#判断返回结果
	// 		if($info){
	// 			#hasfile字段
	// 			$post['hasfile'] = 1;
	// 			#filename字段
	// 			$post['filename'] = $info['savename'];
	// 			#filepath字段
	// 			$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
	// 		}
	// 	}
	// 	//dump($post);die;
	// 	#添加addtime字段
	// 	$post['addtime'] = time();
	// 	#写入数据表
	// 	$model = M('Doc');
	// 	$rst = $model -> add($post);
	// 	#判断返回值
	// 	if($rst){
	// 		#成功
	// 		$this -> success('添加公文成功',U('showList'),3);
	// 	}else{
	// 		#失败
	// 		$this -> error('添加公文失败',U('add'),3);
	// 	}
	// }

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Race');
		#查询
		$data = $model -> select();
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#download方法，实现附件的下载
	// public function download(){
	// 	#接收id
	// 	$id = I('get.id');
	// 	#实例化
	// 	$model = M('Doc');
	// 	#查询
	// 	$data = $model -> find($id);
	// 	$file = WORKING_PATH . $data['filepath'];
	// 	header("Content-type: application/octet-stream");
	// 	header('Content-Disposition: attachment; filename="' . basename($file) . '"');
	// 	header("Content-Length: ". filesize($file));
	// 	readfile($file);
	// }

	// #getContent方法，输出指定公文的内容
	// public function getContent(){
	// 	#接收id
	// 	$id = I('get.id');
	// 	#实例化
	// 	$model = M('Doc');
	// 	#查询
	// 	$data = $model -> find($id);
	// 	#输出内容
	// 	echo htmlspecialchars_decode($data['content']);
	// }

	// #edit方法
	// public function edit(){
	// 	#接收数据
	// 	$id = I('get.id');
	// 	#实例化模型
	// 	$model = M('Doc');
	// 	#查询操作
	// 	$data = $model -> find($id);
	// 	#传递给模版
	// 	$this -> assign('data',$data);
	// 	#展示模版
	// 	$this -> display();
	// }

	// #editOk方法
	// public function editOk(){
	// 	#接收post数据
	// 	$post = I('post.');
	// 	#判断是否有附件上传
	// 	if($_FILES['file']['size'] > 0){
	// 		#配置
	// 		$cfg = array(
	// 			'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
	// 			);
	// 		#实例化
	// 		$upload = new \Think\Upload($cfg);
	// 		#上传操作
	// 		$info = $upload -> uploadOne($_FILES['file']);
	// 		#判断上传结果
	// 		if($info){
	// 			#上传成功
	// 			#filepath字段
	// 			$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
	// 			#filename字段
	// 			$post['filename'] = $info['savename'];
	// 			#hasfile字段
	// 			$post['hasfile'] = 1;
	// 			// $yuanshi = $model -> find($post['id']);
	// 			// $path = WORKING_PATH . $yuanshi['filepath'];
	// 			// unlink($path);
	// 		}
	// 	}
	// 	#写入到数据表
	// 	$model = M('Doc');
	// 	$rst = $model -> save($post);
	// 	#判断返回结果
	// 	if($rst){
	// 		#成功
	// 		$this -> success('编辑成功',U('showList'),3);
	// 	}else{
	// 		#失败
	// 		$this -> error('编辑失败',U('edit',array('id' => $post['id'])),3);
	// 	}
	// }
}