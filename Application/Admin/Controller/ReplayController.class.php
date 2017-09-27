<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class ReplayController extends CommonController{
    #add方法，展示用户添加列表
    public function add(){
        $this -> display();
    }

    #addOk方法，接收添加数据
    public function addOk(){
        #接收数据
        $post = I('post.');
//        dump($post);die;
        #获取文件的数据
        $file = $_FILES['picurl'];
//        dump($file);die;
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
                $post['picurl'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
            }
        }
//		dump($post);die;
        #添加ctime字段
         $post['ctime'] = time();
        #写入数据表
        $model = M('User');
        $rst = $model -> add($post);
        #判断返回值
        if($rst){
            #成功
            $this -> success('添加用户成功',U('showList'),2);
        }else{
            #失败
            $this -> error('添加用户不正确，请重新修改',U('add'),2);
        }
    }

    #showList方法，获取数据展示数据
    public function showList(){
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



    #del方法，删除用户
    public function del(){
        #接收参数
        $id = I('get.id');
//        dump($id);die;
        #实例化模型
        $model = M('User_message');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'mid'   =>  $id,
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
//        dump($id);die;
        #实例化模型
        $model = M('User');
        #查询操作
        $data = $model -> find($id);
        #传递给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
//        $this->display('Test:topheader');
    }


    #editOk方法
    public function editOk(){
        #接收post数据
        $post = I('post.');
//       $file = $_FILES['picurl'];
//	 	dump($file);die;
        #判断是否有附件上传
	 	if($_FILES['picurl']['size'] > 0){
	 		#配置
	 		$cfg = array(
	 			'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
	 			);
	 		#实例化
	 		$upload = new \Think\Upload($cfg);
	 		#上传操作
	 		$info = $upload -> uploadOne($_FILES['picurl']);
//            dump($info);die;
	 		#判断上传结果
	 		if($info){
	 			#上传成功
	 			#filepath字段
	 			$post['picurl'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
	 			#filename字段
	 			$post['filename'] = $info['savename'];
	 			#hasfile字段
	 			$post['hasfile'] = 1;
	 			// $yuanshi = $model -> find($post['id']);
	 			// $path = WORKING_PATH . $yuanshi['filepath'];
	 			// unlink($path);
	 		}
	 	}
//        dump($post);die;
        #添加mtime字段
        $post['mtime'] = time();
//        dump($post);die;
        #写入到数据表
        $model = M('User');
        $rst = $model -> save($post);
//	 	dump($rst);die;
        #判断返回结果
        if($rst){
            #成功
            $this -> success('编辑成功',U('showList'),2);
        }else{
            #失败
            $this -> error('编辑失败',U('edit',array('id' => $post['id'])),2);
        }
    }
}
