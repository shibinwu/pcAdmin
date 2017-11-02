<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GuessuserController extends CommonController{


	#add方法，展示模版文件
	public function add(){
		#展示模版
		$this -> display();
	}

	#addOk方法，接收数据保存数据
	public function addOk(){
		#接收数据
		$post = I('post.');
//		dump($post);die;
		#获取文件的数据
		 $file = $_FILES['file'];
		#配置上传信息
		 $cfg = array(
		 		//保存根路径
		 		'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH,
		 	);
		#实例化上传类
		 $uplaod = new \Think\Upload($cfg);
		#上传操作
		 if($file['size'] > 0){
		 	$info = $uplaod -> uploadOne($file);//一维数组
		 	#判断返回结果
		 	if($info){
		 		#hasfile字段
		 		$post['hasfile'] = 1;
		 		#filename字段
		 		$post['filename'] = $info['savename'];
		 		#filepath字段
		 		$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
		 	}
		 }
//		dump($post);die;
		#添加addtime字段
		// $post['addtime'] = time();
		#写入数据表
		$model = M('Guess_user_data');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加赛事成功',U('showList'),3);
		}else{
			#失败
			$this -> error('添加赛事失败',U('add'),3);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Guess_user_data');
		$model1 = M('Users');
		#查询
		$data1 = $model1 -> field('id,name')->select();
		$data = $model -> where('statu = 1') -> select();
		foreach($data1 as $index=>$item){
			$temp[$item['id']] = $item;
		}

		foreach($data as $index=>$value){
			$data[$index]['userid'] = $temp[$value['userid']];
		}

//		dump($data);die;
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}
	//评论列表
	public function messageList(){
		#获取数据
		$model = M('User_message');
		$model1 = M('Guess');
		$model2 = M('Users');
		#查询
		$data = $model -> where('statu = 1') -> select();
		$guess_data = $model1 -> field('g_id,g_name') -> select();
		$users_data = $model2 -> field('id,name') -> select();
		$temp = array();
		foreach($guess_data as $index=>$item){
			$temp[$item['g_id']] = $item;
		}
		foreach($users_data as $index=>$item){
			$temps[$item['id']] = $item;
		}
		foreach($data as $index=>$value){
			$data[$index]['g_id'] = $temp[$value['g_id']];
			$data[$index]['uid'] = $temps[$value['uid']];
		}
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}
	//评论回复
	public function replayList(){
		#获取数据
		$model = M('User_replay_message');
		#查询
		$data = $model -> where('statu = 1') -> select();
//		dump($data);die;
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
//        dump($id);die;
        #实例化模型
        $model = M('Guess_user_data');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'duid'   =>  $id,
            'statu'  => '0'
        );
        $rst =$model -> save($data);
//        dump($rst);die;
        #判断返回值
        if($rst){
            #删除成功
            $this -> success('删除成功',U('showList'),3);
        }else{
            #删除失败
            $this -> error('删除失败',U('showList'),3);
        }
    }


    #edit方法
	 public function edit(){
	 	#接收数据
	 	$id = I('get.id');

	 	#实例化模型
	 	$model = M('Guess_user_data');
	 	#查询操作
	 	$data = $model -> find($id);
//		 dump($data);
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	#展示模版
	 	$this -> display();
	 }

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');
//	 	dump($post);die;
	 	#判断是否有附件上传
//	 	if($_FILES['file']['size'] > 0){
//	 		#配置
//	 		$cfg = array(
//	 			'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
//	 			);
//	 		#实例化
//	 		$upload = new \Think\Upload($cfg);
//	 		#上传操作
//	 		$info = $upload -> uploadOne($_FILES['file']);
//	 		#判断上传结果
//	 		if($info){
//	 			#上传成功
//	 			#filepath字段
//	 			$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
//	 			#filename字段
//	 			$post['filename'] = $info['savename'];
//	 			#hasfile字段
//	 			$post['hasfile'] = 1;
//	 			// $yuanshi = $model -> find($post['id']);
//	 			// $path = WORKING_PATH . $yuanshi['filepath'];
//	 			// unlink($path);
//	 		}
//	 	}
	 	#写入到数据表
	 	$model = M('Guess_user_data');
		 if($post['duid']){
			 $rst = $model -> save($post);
		 }else{
			 echo '123';
			 die();
		 }
	 	#判断返回结果
	 	if($rst){
	 		#成功
	 		$this -> success('编辑成功',U('showList'),3);
	 	}else{
	 		#失败
	 		$this -> error('编辑失败',U('edit',array('id' => $post['id'])),3);
	 	}
	 }
}