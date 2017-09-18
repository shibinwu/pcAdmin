<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承父类
class RbacController extends Controller{

    //角色列表
    public function role_list() {
        $this->role = M('role')->select();
        $this->display();
    }

    //添加角色
    public function add_role() {
        $this->display();
    }

    //添加角色表单处理
    public function add_role_handle() {
        if(M('role')->add($_POST)) {
            $this->success('添加成功',U('role_list','',''));
        } else {
            $this->error('添加失败');
        }
    }
}
