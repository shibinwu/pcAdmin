<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class NewsController extends CommonController{


	#add方法，展示模版文件
	public function add(){
		#实例化模型
		$model = M('News_type');
		#查询属性信息
		$data = $model -> select();
		#传递给模板
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#addOk方法，接收数据保存数据
	public function addOk(){
		#接收数据
		$post = I('post.');
		#获取文件的数据
		 $file = $_FILES['img'];
//		dump($_FILES);die;
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

//			  dump($info);die;
		 	#判断返回结果
		 	if($info){
		 		#hasfile字段
		 		$post['hasfile'] = 1;
		 		#filename字段
		 		$post['filename'] = $info['savename'];
		 		#filepath字段
		 		$post['icon'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
		 	}
		 }
		// dump($post);die;
		#添加addtime字段
		 $post['ctime'] = time();
		#写入数据表
		$model = M('News');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加新闻成功',U('showList'),3);
		}else{
			#失败
			$this -> error('添加新闻失败',U('add'),3);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('News');
		$models = M('News_type');
		#查询
		$data = $model -> where('statu = 1') -> select();
		$datas = $models -> select();
//		dump($datas);die;
		#传递变量给模版
		$this -> assign('data',$data);
		$this -> assign('datas',$datas);
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

    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
//        dump($id);die;
        #实例化模型
        $model = M('News');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'id'   =>  $id,
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
	 	$model = M('News');
		 $models = M (News_type);

	 	#查询操作
	 	$data = $model -> find($id);
		 $datas = $models -> select();
//		 dump($data);die;
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	$this -> assign('datas',$datas);
	 	#展示模版
	 	$this -> display();
	 }

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');
//	 	dump($post);die;
		 #获取文件的数据
		 $file = $_FILES['img'];
//		dump($file);die;
		 #配置上传信息
		 $cfg = array(
			 //保存根路径
				 'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH,
		 );
//		 dump($cfg);die();
		 #实例化上传类
		 $uplaod = new \Think\Upload($cfg);
		 #上传操作
		 if($file['size'] > 0){
			 $info = $uplaod -> uploadOne($file);//一维数组
//			  dump($info);die;
			 #判断返回结果
			 if($info){
				 #hasfile字段
				 $post['hasfile'] = 1;
				 #filename字段
				 $post['filename'] = $info['savename'];
				 #filepath字段
				 $post['img'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
			 }
		 }
		 $post['mtime'] = time();
	 	#写入到数据表
//		 dump($post);die;
	 	$model = M('News');
		 if($post['id']){
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