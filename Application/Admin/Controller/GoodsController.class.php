<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GoodsController extends CommonController{


	#add方法，展示模版文件
	public function add(){
		//获取DOTA属性id和名称
		$dota_data = M('Dota_attr')->select();
		foreach($dota_data as $index=>$item){
			$dota_attr[$item['id']] = $item;
		}
		//获取DOTA英雄id和名称
		$hero_model = M('Dota_hero');
		$hero_data = $hero_model -> select();
		foreach($hero_data as $index=>$item){
			$hero_attr[$item['id']] = $item;
		}
		$this -> assign('dota_attr',$dota_attr);
		$this -> assign('hero_attr',$hero_attr);
		//获取CSGO属性id和名称
		$csgo_data = M('Csgo_attr')->select();
		foreach($csgo_data as $index=>$item){
			$csgo_attr[$item['id']] = $item;
		}
		//获取CSGO武器id和名称
		$gun_model = M('Csgo_gun');
		$gun_data = $gun_model -> select();
		foreach($gun_data as $index=>$item){
			$gun_attr[$item['id']] = $item;
		}
		$this -> assign('csgo_attr',$csgo_attr);
		$this -> assign('gun_attr',$gun_attr);
		#展示模版
		$this -> display();
	}

	#addOk方法，接收数据保存数据
	public function dotaAdd(){
		#接收数据
		$post = I('post.');
		#获取文件的数据
		 $file = $_FILES['icon'];
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
		$model = M('Goods_new');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加商品成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加商品失败',U('add'),1);
		}
	}


	#addOk方法，接收数据保存数据
	public function csgoAdd(){
		#接收数据
		$post = I('post.');
		#获取文件的数据
		$file = $_FILES['icon'];
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
		$model = M('Goods_new');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加商品成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加商品失败',U('add'),1);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Goods_new');

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
        $model = M('Goods_new');
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
            $this -> success('删除成功',U('showList'),1);
        }else{
            #删除失败
            $this -> error('删除失败',U('showList'),1);
        }
    }

	#edit方法(dota)
	public function dotaEdit()
	{
		#接收数据
		$id = I('get.id');
		#实例化模型
		$model = M('Goods_new');
		#查询操作
		$data = $model->find($id);
		#传递给模版
		$this->assign('data', $data);

		//获取DOTA属性id和名称
		$dota_data = M('Dota_attr')->select();
		foreach($dota_data as $index=>$item){
			$dota_attr[$item['id']] = $item;
		}
		//获取DOTA英雄id和名称
		$hero_model = M('Dota_hero');
		$hero_data = $hero_model -> select();
		foreach($hero_data as $index=>$item){
			$hero_attr[$item['id']] = $item;
		}
		$this -> assign('dota_attr',$dota_attr);
		$this -> assign('hero_attr',$hero_attr);
		#展示模版
		$this->display();
	}

	#edit方法(csgo)
	public function csgoEdit()
	{
		#接收数据
		$id = I('get.id');
		#实例化模型
		$model = M('Goods_new');
		#查询操作
		$data = $model->find($id);
//		dump($data);die();
		#传递给模版
		$this -> assign('data', $data);
		//获取CSGO属性id和名称
		$csgo_data = M('Csgo_attr')->select();
		foreach($csgo_data as $index=>$item){
			$csgo_attr[$item['id']] = $item;
		}
		//获取CSGO武器id和名称
		$gun_model = M('Csgo_gun');
		$gun_data = $gun_model -> select();
		foreach($gun_data as $index=>$item){
			$gun_attr[$item['id']] = $item;
		}
		$this -> assign('csgo_attr',$csgo_attr);
		$this -> assign('gun_attr',$gun_attr);
		#展示模版
		#展示模版
		$this->display();
	}

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');

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
		 dump($post);die;
	 	$model = M('Goods_new');
		 if($post['id']){
			 $rst = $model -> save($post);
		 }else{
			 echo '123';
			 die();
		 }
	 	#判断返回结果
	 	if($rst){
	 		#成功
	 		$this -> success('编辑成功',U('showList'),1);
	 	}else{
	 		#失败
	 		$this -> error('编辑失败',U('showList'),1);
	 	}
	 }
}