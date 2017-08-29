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
        $file = $_FILES['file'];
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
                $post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
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

}