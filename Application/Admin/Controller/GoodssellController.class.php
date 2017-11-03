<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class GoodssellController extends CommonController{

	#add方法，展示模版文件
	public function add(){
		$model = M('Goods_new');
		$data = $model -> field('id,name') ->  where('statu = 1')-> select();
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#addOk方法，接收数据保存数据
	public function addOk(){
		#接收数据
		$post = I('post.');
		$model = M('Goods_new');
		$data = $model -> find($post['gid']);
		$post['gtype'] = $data['game_owner'];
		#添加addtime字段
	 	$post['ctime'] = time();
		#写入数据表
		$model = M('Goods_sell_want');
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
	public function showList(){
		#获取数据
		$model = M('Goods_sell_want');
		$model1 = M('Goods_new');
		$model2 = M('Users');
		#查询
		$data = $model -> where('statu = 1') -> select();
		$goods_data = $model1 -> field('id,name,icon') -> select();
		$users_data = $model2 -> field('id,name') -> select();
        $temp = array();
        $temps = array();
		foreach($goods_data as $index=>$item){
			$temp[$item['id']] = $item;
		}
		foreach($users_data as $index=>$item){
			$temps[$item['id']] = $item;
		}
//        dump($temp[1]);die();
		foreach($data as $index=>$value){
			$data[$index]['gid'] = $temp[$value['gid']];
			$data[$index]['uid'] = $temps[$value['uid']];
		}
		#传递变量给模版
		$this -> assign('data',$data);
		$this -> assign('temp',$temp);
		$this -> assign('temps',$temps);
		#展示模版
		$this -> display();
	}

    #del方法，实现删除
    public function del(){
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Goods_sell_want');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'swid'   =>  $id,
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
	 	$model = M('Goods_sell_want');
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
	 	#写入到数据表
	 	$model = M('Goods_sell_want');
		 if($post['gsid']){
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