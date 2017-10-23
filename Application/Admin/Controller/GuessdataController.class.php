<?php
#声明命名空间
namespace Admin\Controller;

#引入父类元素
use Think\Controller;

#声明类并且继承父类
class GuessdataController extends CommonController
{
    #add方法，展示模版文件
    public function add()
    {
        #实例化模型
        $model1 = M('Guess');
        $model2 = M('Guess_team');
        #查询属性信息
        $data1 = $model1->where('statu = 1')->select();
        $data2 = $model2->where('statu = 1')->select();
//		var_dump($data1);die();
        #传递给模板
        $this->assign('data1', $data1);
        $this->assign('data2', $data2);
        #展示模版
        $this->display();
    }
    #addOk方法，接收数据保存数据
    public function addOk()
    {
        #接收数据
        $post = I('post.');
        $time1 = strtotime($post['stime']);
        $post['stime'] = $time1;
        #添加addtime字段
        $post['ctime'] = time();
        $gid = $post['gid'];
        $guessMolde = M("Guess");
        $guess = $guessMolde->find($gid);
        $post['ltid'] = $guess['g_leftid'];
        $post['rtid'] = $guess['g_rightid'];
//        dump($post);die();
        #写入数据表
        $model = M('Guess_data');
        $rst = $model->add($post);
        #判断返回值
        if ($rst) {
            #成功
            $this->success('添加竞猜数据成功', U('showList'), 1);
        } else {
            #失败
            $this->error('添加竞猜数据失败', U('add'), 1);
        }
    }
    #showList方法，获取数据展示数据
    public function showList()
    {
        #获取数据
        $model = M('Guess_data');
        $model1 = M('Guess');
        #查询
        $data = $model->where('statu = 1')->select();
        $data1 = $model1->select();

        foreach($data1 as $index=>$item){
            $tmp[$item['g_id']] = $item;
        }
        foreach($data as $index=>$value){
            $data[$index]['gname'] = $tmp[$value['gid']]['g_name'];
        }
//        dump($data);die();
        #传递变量给模版
        $this->assign('data', $data);
//        $this->assign('data1', $data1);
        #展示模版
        $this->display();
    }
    #del方法，实现删除
    public function del()
    {
        #接收参数
        $id = I('get.id');
        #实例化模型
        $model = M('Guess_data');
        #删除操作
//        $rst = $model -> delete($id);
        #软删除
        $data = array(
            'dgid' => $id,
            'statu' => '0'
        );
        $rst = $model->save($data);
        #判断返回值
        if ($rst) {
            #删除成功
            $this->success('删除成功', U('showList'), 3);
        } else {
            #删除失败
            $this->error('删除失败', U('showList'), 3);
        }
    }

    #edit方法
    public function edit()
    {
        #接收数据
        $id = I('get.id');
        #实例化模型
        $model = M('Guess_data');
        $model1 = M('Guess_team');
        $model2 = M('Guess');
        #查询操作
        $data = $model->find($id);
        $data1 = $model1->select();
        $data2 = $model2->where('statu = 1')->select();

        //取出比赛的双方队伍
        $tmp = [];
        foreach ($data1 as $index => $item) {
            $tmp[$item['gtid']] = $item;
        }
        $names[$data['ltid']] = $tmp[$data['ltid']]['gtname'];
        $names[$data['rtid']] = $tmp[$data['rtid']]['gtname'];
        #传递给模版
        $this->assign('data', $data);
        $this->assign('data1', $data1);
        $this->assign('data2', $data2);
        $this->assign('names', $names);
        #展示模版
        $this->display();
    }

    #editOk方法
    public function editOk()
    {
        #接收post数据
        $post = I('post.');
        $post['stime'] = strtotime($post['stime']);
        #添加mtime字段
        $post['mtime'] = time();
        $gid = $post['gid'];
        $guessMolde = M("Guess");
        $guess = $guessMolde->find($gid);
        $post['ltid'] = $guess['g_leftid'];
        $post['rtid'] = $guess['g_rightid'];


        //判断是否是添加比赛结束的状态
        //todo 以后需要系统接入接口判断
        if ($post['status'] == 3) {
            $userGuessDataModel = M('Guess_user_data');
            //todo 需要前端传入胜利的队伍id
            $condition = [
                'dgid' => $post['dgid'],
                'type' => 3
            ];
            //todo 测试用，上线的时候需要去除
            $tmp = [];
            $userguesslists = $userGuessDataModel->where($condition)->select();
            foreach ($userguesslists as $index => $userguesslist) {
                if ($userguesslist['gtid'] == $post['wtid']) {
                    $wincondition = ['duid' => $userguesslist['duid'], 'result' => 1];
                } else {
                    $wincondition = ['duid' => $userguesslist['duid'], 'result' => 2];
                }
                $userGuessDataModel->save($wincondition);
                $tmp[$userguesslist['userid']][] = $userguesslist;
            }
            $userProModel = M('User_property');
            foreach ($tmp as $index => $value) {
                foreach ($value as $k => $v) {
                    if ($v['result'] == 1) {
                        $tmp[$index]['win'] += $v['num'];
                    } elseif ($v['result'] == 2) {
                        $tmp[$index]['lose'] += $v['num'];
                    }
                }

                //TODO 需要确定利率
                if (isset($tmp[$index]['win'])) {
                    $procondition = ['status' => 1, 'property_p' => $tmp[$index]['win'], 'type' => 3, 'ptype' => 1, 'ctime' => time()];
                } elseif (isset($tmp[$index]['lose'])) {
                    $procondition = ['status' => 2, 'property_p' => $tmp[$index]['lose'], 'type' => 3, 'ptype' => 1, 'ctime' => time()];
                }
                $procondition['uid'] = $index;
                $userProModel->add($procondition);
            }
        }
        #写入到数据表
        $model = M('Guess_data');
        if ($post['dgid']) {
            $rst = $model->save($post);
            #判断返回结果
            if ($rst) {
                #成功
                $this->success('编辑成功', U('showList'), 3);
            } else {
                #失败
                $this->error('编辑失败', U('edit', array('id' => $post['id'])), 3);
            }
        }
    }

    #根据赛事名称，显示相应的队伍
    public function relate()
    {
        $id = $_GET['id'];
        #获取数据
        $model1 = M('Guess_data');
        $model2 = M('Guess_team');
        #根据赛事获取对应队伍id
        $data1 = $model1->find($id);
        $data2 = $model2->select();
        //取出比赛的双方队伍
        $tmp = [];
        foreach ($data2 as $index => $item) {
            $tmp[$item['gtid']] = $item;
        }
        $names[$data1['ltid']] = $tmp[$data1['ltid']]['gtname'];
        $names[$data1['rtid']] = $tmp[$data1['rtid']]['gtname'];
        $this->ajaxReturn ($names);
    }
}