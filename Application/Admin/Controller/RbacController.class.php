<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class RbacController extends CommonController{

    //角色管理
    #role_list方法，获取数据展示数据
    public function role_list(){
        #获取数据
        $model = M('Role');
        #查询
        $data = $model -> select();
        #传递变量给模版
        $this -> assign('data',$data);
        #展示模版
        $this -> display();
    }
    #add方法，展示角色添加列表
    public function add_role(){
        $this -> display();
    }

    #add_role_handle方法，接收添加数据
    public function add_role_handle(){
        #接收数据
        $post = I('post.');
        #添加ctime字段
//        $post['ctime'] = time();
        #写入数据表
        $model = M('Role');
        $rst = $model -> add($post);
        #判断返回值
        if($rst){
            #成功
            $this -> success('添加成功',U('role_list'),2);
        }else{
            #失败
            $this -> error('添加失败',U('add_role'),2);
        }
    }

    //节点管理
    #role_list方法，获取数据展示数据
    public function node_list(){

        $field = array('id','name','title','pid');
        $node = M('Node')->field($field)->order('sort')->select();
        $this->node = node_regroup($node);
//        layout("base");
        $this->display();

    }

    //添加节点
    public function add_node() {
        $this->pid = I('get.pid', 0, 'int');//如果没有传递的pid参数，则默认为0
        $this->level = I('get.level', 1, 'int');//如果没有传递的level参数，则level是1，代表顶级（模块）
        switch($this->level) {
            case 1:
                $this->type = '模块';
                break;
            case 2:
                $this->type = '控制器';
                break;
            case 3:
                $this->type = '方法';
                break;
        }
        $this->display();
    }

    //添加节点表单处理
    public function add_node_handle() {
        if(M('Node')->add($_POST)) {
            $this->success('添加成功',U('node_list','',''));
        } else {
            $this->error('添加失败');
        }
    }



    //配置权限
    public function access() {
        $rid = I('get.rid', 0, 'int');//角色id
        $field = array('id', 'name', 'title', 'pid');
        $node = M('Node')->field($field)->order('sort asc')->select();
        $access = M('Access')->where('role_id = '.$rid)->getField('node_id', true);//已经拥有的权限
        $node = node_regroup($node,$access,0); //递归节点
        $this->rid = $rid;
        $this->node = $node;
        $this->display();
    }

    //权限配置的表单提交处理
    public function access_handle() {
        $rid = I('rid', 0, 'int');
        $db = M('Access');
        $db->where('role_id = '.$rid)->delete();//删除原有权限
        $data = array();
        if(!empty($_POST['access'])) {
            foreach($_POST['access'] as $v) {
                $tmp = explode('_', $v);
                $data[] = array(
                    'role_id'=>$rid,
                    'node_id'=>$tmp[0],
                    'level'=>$tmp[1]
                );
            }
            if($db->addAll($data)) { //写入新权限
                $this->success('分配权限成功', U('role_list','',''));
            } else {
                $this->error('分配权限失败');
            }
        }
    }


    //添加用户
    function add_user() {
        $this->role = M('Role')->select();
        $this->display();
    }

    //添加用户的表单提交处理
    public function add_user_handle() {
        $post = I('post.');
        $post['password'] = I('post.password','','md5');
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
        #添加ctime字段
        $post['ctime'] = time();
        dump($post);die;
        $uid = M('User')->add($post);
        $rold = array();
        if($uid) {
            foreach($_POST['role_id'] as $v) {
                $role[] = array(
                    'role_id'=>$v,
                    'user_id'=>$uid
                );
            }
            M('role_user')->addAll($role);
            $this->success('添加成功', U('user_list','',''));
        } else {
            $this->error('添加失败');
        }


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

    //用户列表
    public function user_list() {
        $this->user = D('User')->field('password', true)->select();
        //P(D('UserRelation')->getLastSql());
        //p($this->user);
        //die;
        $this->display();
    }


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
