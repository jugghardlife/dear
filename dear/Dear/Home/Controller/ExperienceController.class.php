<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class ExperienceController extends Controller {
    public function index(){
        $data['username']=session('username');
        $data['id']=session('uid');
        $data['city']=session('city');
        $experience=D('Experience');
        $info=$experience->select();
        $this->assign('info',$info);
        $this->assign('data',$data);
        $this->display();
    }
    public function details(){
        $map['id']=I('id');
        $experience=D('Experience');
        $info=$experience->relation(true)->where($map)->find();
        $this->assign('info',$info);
        $this->display();
    }
}