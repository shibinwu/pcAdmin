<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GuessdataController extends CommonController{

	#add方法，展示模版文件
	public function add(){
		#实例化模型
		$model1 = M('Guess');
		$model2 = M('Guess_team');
		#查询属性信息
		$data1 = $model1 -> select();
		$data2 = $model2 -> select();
//		var_dump($data);die();
		#传递给模板
		$this -> assign('data1',$data1);
		$this -> assign('data2',$data2);
		#展示模版
		$this -> display();
	}
	#addOk方法，接收数据保存数据
	public function addOk(){
		#接收数据
		$post = I('post.');
		$time1 = strtotime($post['start_time']);
		$post['start_time'] = $time1;
		#添加addtime字段
		$post['ctime'] = time();
		#写入数据表
		$model = M('Guess_data');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加竞猜数据成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加竞猜数据失败',U('add'),1);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Guess_data');
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
        $model = M('Guess_data');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'dgid'   =>  $id,
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
	 	$model = M('Guess_data');
	 	$model1 = M('Gusee_team');
	 	#查询操作
	 	$data = $model -> find($id);
	 	$data1 = $model1 -> select();
//		 dump($data);
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	$this -> assign('data1',$data1);
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
	 	$model = M('Guess_data');
		 if($post['dgid']){
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