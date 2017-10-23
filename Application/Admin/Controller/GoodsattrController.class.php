<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GoodsattrController extends CommonController{
	#add方法，展示模版文件
	public function add(){
		#展示模版
		$this -> display();
	}

	#addOk方法，接收数据保存数据
	public function dotaAdd(){
		#接收数据
		$post = I('post.');
		#添加addtime字段
		$post['ctime'] = time();
		#写入数据表
		$model = M('Dota_attr');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加失败',U('add'),1);
		}
	}

	#addOk方法，接收数据保存数据
	public function csgoAdd(){
		#接收数据
		$post = I('post.');
		#添加addtime字段
		$post['ctime'] = time();
		#写入数据表
		$model = M('Csgo_attr');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加失败',U('add'),1);
		}
	}

	#showList方法，获取数据展示数据
	public function dotaList(){
		#获取数据
		$model = M('Dota_attr');
		#查询
		$data = $model -> where('statu = 1 and id>0') -> select();
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#showList方法，获取数据展示数据
	public function csgoList(){
		#获取数据
		$model = M('Csgo_attr');
		#查询
		$data = $model -> where('statu = 1 and id>0') -> select();
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}
    #dotaDel方法，实现dota属性删除
    public function dotaDel(){
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Dota_attr');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'id'   =>  $id,
            'statu'  => '0'
        );
        $rst =$model -> save($data);
        #判断返回值
        if($rst){
            #删除成功
            $this -> success('删除成功',U('showList'),1);
        }else{
            #删除失败
            $this -> error('删除失败',U('showList'),1);
        }
    }

	#dotaDel方法，实现dota属性删除
	public function csgoDel(){
		#接收参数
		$id = I('get.id');
		#实例化模型
		$model = M('Csgo_attr');
		#删除操作
//        $rst = $model -> delete($id);
		#软删除
		$data = array(
				'id'   =>  $id,
				'statu'  => '0'
		);
		$rst =$model -> save($data);
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
	 public function dotaEdit(){
	 	#接收数据
	 	$id = I('get.id');
	 	#实例化模型
	 	$model = M('Dota_attr');
	 	#查询操作
	 	$data = $model -> find($id);
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	#展示模版
	 	$this -> display();
	 }

	#edit方法(dota)
	public function csgoEdit(){
		#接收数据
		$id = I('get.id');
		#实例化模型
		$model = M('Csgo_attr');
		#查询操作
		$data = $model -> find($id);
		#传递给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	 #editOk方法
	 public function doeditOk(){
	 	#接收post数据
	 	$post = I('post.');
	 	$psot['mtime'] = time();
	 	#写入到数据表
	 	$model = M('Dota_attr');
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
	 		$this -> error('编辑失败',U('doeditOk',array('id' => $post['id'])),1);
	 	}
	 }

	#editOk方法
	public function cseditOk(){
		#接收post数据
		$post = I('post.');
		$psot['mtime'] = time();
		#写入到数据表
		$model = M('Csgo_attr');
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
			$this -> error('编辑失败',U('cseditOk',array('id' => $post['id'])),1);
		}
	}
}