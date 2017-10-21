<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GoodsController extends CommonController{


	#add方法，展示模版文件
	public function add(){
		#实例化模型
		$model = M('Goods_attr');
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
//		dump($post);die;
		#获取文件的数据
		 $file = $_FILES['icon'];
//		dump($file);die;
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
//		 dump($post);die;
		#添加addtime字段
	 	$post['ctime'] = time();
		#写入数据表
		$model = M('Goods');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加商品成功',U('showList'),3);
		}else{
			#失败
			$this -> error('添加商品失败',U('add'),3);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Goods');
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
        $model = M('Goods');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'gid'   =>  $id,
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
	 	$model = M('Goods');
//		 $data = $model -> field('t1.*,t2.ga_name as name') -> table('goods as t1,goods_attr as t2') -> where('t1.g_class = t2.ga_id') -> select();

		 //todo 商品分类
		 $gtmodel = M('goods_attr');
		 $class = $gtmodel->where('ga_id','>','0')->where('ga_type = 2')->select();
		 $grand = $gtmodel->where('ga_id','>','0')->where('ga_type = 3')->select();
		 $position = $gtmodel->where('ga_id','>','0')->where('ga_type = 4')->select();

	 	#查询操作
	 	$data = $model -> find($id);
//		 dump($data);die;
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	$this -> assign('class',$class);
	 	$this -> assign('grand',$grand);
	 	$this -> assign('position',$position);
	 	#展示模版
	 	$this -> display();
	 }

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');
//	 	dump($post);die;
	 	#判断是否有附件上传
	 	if($_FILES['icon']['size'] > 0){
	 		#配置
	 		$cfg = array(
	 			'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
	 			);
	 		#实例化
	 		$upload = new \Think\Upload($cfg);
	 		#上传操作
	 		$info = $upload -> uploadOne($_FILES['icon']);
//			dump($info);die;
	 		#判断上传结果
	 		if($info){
	 			#上传成功
	 			#filepath字段
	 			$post['icon'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
	 			#filename字段
	 			$post['filename'] = $info['savename'];
	 			#hasfile字段
	 			$post['hasfile'] = 1;
	 		}
	 	}
	 	$post['mtime'] = time();
	 	#写入到数据表
//		 dump($post);die;
	 	$model = M('Goods');
		 if($post['gid']){
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