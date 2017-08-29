<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明类并且继承类
class TeamController extends CommonController{
    #add方法，展示添加战队模板
    public function add(){
        $this -> display();
    }

    #showList方法，展示战队列表
    public function showList(){
        $this -> display();
    }

}