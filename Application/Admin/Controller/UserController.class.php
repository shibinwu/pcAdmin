<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class UserController extends CommonController{
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
        #添加addtime字段
        // $post['addtime'] = time();
        #写入数据表
        $model = M('User');
        $rst = $model -> add($post);
        #判断返回值
        if($rst){
            #成功
            $this -> success('添加用户成功',U('showList'),3);
        }else{
            #失败
            $this -> error('添加用户失败',U('add'),3);
        }
    }

    #showList方法，获取数据展示数据
    public function showList(){
        #获取数据
        $model = M('User');
        #查询
        $data = $model -> where('statu = 1') -> select();
//		dump($data);die;
        #传递变量给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
    }

#showList方法，展示模版
//    public function showList(){
//        #实例化模型
//        $model = M('User');
//        #1、查询总的记录数
//        $count = $model -> count();
//        #2、实例化分页类,传递总的记录数，每页显示1个记录
//        $page = new \Think\Page($count,10);
//        #可选步骤：定义按钮提示文字
//        //每页显示的页码数，如果需要显示出首页/末页，则要求这个页码数必须要小于分页的总的页码数
//        $page -> rollPage = 5;
//        #让最后一页不显示数字
//        $page -> lastSuffix = false;
//        $page -> setConfig('prev','上一页');
//        $page -> setConfig('next','下一页');
//        $page -> setConfig('first','首页');
//        $page -> setConfig('last','末页');
//        #3、组装页码的地址
//        $show = $page -> show();
//        //dump($show);die;
//        #4、通过limit方法限制输出的记录数
//        #查询数据
//        $data = $model -> limit($page -> firstRow,$page -> listRows) -> select();
////        dump($data);die;
//        #5、数据变量的分配
//        #传递给模版
//        $this -> assign('show',$show);
//        $this -> assign('data',$data);
//        #6、展示模版
//        $this -> display();
//    }

    #del方法，删除用户
    public function del(){
        #接收参数
        $id = I('get.id');
//        dump($id);die;
        #实例化模型
        $model = M('User');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'uid'   =>  $id,
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
        $model = M('User');
        $rst = $model -> save($post);
//	 	dump($rst);die;
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
