<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class MemoryController extends Controller {
    public function index(){
        $data['username']=session('username');
        $data['id']=session('uid');
        $data['city']=session('city');
        $memory=D('Memory');
        $info=$memory->select();
        $this->assign('info',$info);
        $this->assign('data',$data);
        $this->display();
    }
    public function details(){
        $map['id']=I('id');
        $find=D('Find');
        $info=$find->relation(true)->where($map)->find();
        $this->assign('info',$info);
        $this->display();
    }
}