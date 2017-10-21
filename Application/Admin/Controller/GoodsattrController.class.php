<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GoodsattrController extends CommonController{
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
		#添加addtime字段
	 	$post['ctime'] = time();
		#写入数据表
		$model = M('Goods_attr');
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加属性成功',U('showList'),1);
		}else{
			#失败
			$this -> error('添加属性失败',U('add'),1);
		}
	}

	#showList方法，获取数据展示数据
	public function showList(){
		#获取数据
		$model = M('Goods_attr');
		#查询
		$data = $model -> where('statu = 1 and pgaid>0') -> select();
		#传递变量给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}
    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Goods_attr');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'ga_id'   =>  $id,
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

    #edit方法
	 public function edit(){
	 	#接收数据
	 	$id = I('get.id');
	 	#实例化模型
	 	$model = M('Goods_attr');
	 	#查询操作
	 	$data = $model -> find($id);
	 	#传递给模版
	 	$this -> assign('data',$data);
	 	#展示模版
	 	$this -> display();
	 }

	 #editOk方法
	 public function editOk(){
	 	#接收post数据
	 	$post = I('post.');
	 	$psot['mtime'] = time();
	 	#写入到数据表
	 	$model = M('Goods_attr');
		 if($post['ga_id']){
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
	 		$this -> error('编辑失败',U('edit',array('id' => $post['id'])),1);
	 	}
	 }
}