<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class BannerController extends CommonController{
    #add方法，展示用户添加列表
    public function add(){
        $this -> display();
    }

    #addOk方法，接收添加数据
    public function addOk(){
        #接收数据
        $post = I('post.');
        #获取文件的数据
        $file = $_FILES['bn_pic'];
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
                $post['bn_pic'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
            }
        }
        #添加ctime字段
         $post['ctime'] = time();
        #写入数据表
        $model = M('Banner');
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
        $model = M('Banner');
        #查询
        $data = $model -> where('statu = 1') -> select();
        #传递变量给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
    }

    #del方法，删除用户
    public function del(){
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Banner');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'bnid'   =>  $id,
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
        $model = M('Banner');
        #查询操作
        $data = $model -> find($id);
        //上线时打开
        $data['bn_pic'] = 'http://t.codechm.com/'. $data['bn_pic'];
        #传递给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
    }

    #editOk方法
    public function editOk(){
        #接收post数据
        $post = I('post.');
        #判断是否有附件上传
	 	if($_FILES['bn_pic']['size'] > 0){
	 		#配置
	 		$cfg = array(
	 			'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
	 			);
	 		#实例化
	 		$upload = new \Think\Upload($cfg);
	 		#上传操作
	 		$info = $upload -> uploadOne($_FILES['bn_pic']);
	 		#判断上传结果
	 		if($info){
	 			#上传成功
	 			#filepath字段
	 			$post['bn_pic'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
	 			#filename字段
	 			$post['filename'] = $info['savename'];
	 			#hasfile字段
	 			$post['hasfile'] = 1;
	 		}
	 	}
        #添加mtime字段
        $post['mtime'] = time();
        #写入到数据表
        $model = M('Banner');
        $rst = $model -> save($post);
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
