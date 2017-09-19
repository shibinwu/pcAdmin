<?php
/**
 * 权限结点整合
 * @param  array   $node   结点数组
 * @param  array   $access 权限数组
 * @param  integer $pid    父级ID
 * @return array           组合后的数组
 */
function node_regroup($node,$access=null,$pid=0){
        $arr = array();
   foreach($node as $v){
                if(is_array($access)){
                        $v['access'] = in_array($v['id'],$access) ? 1 : 0;
        }
        if($pid==$v['pid']){
                        $v['child'] = node_regroup($node,$access,$v['id']);
            $arr[] = $v;
        }
    }
    return $arr;
}
