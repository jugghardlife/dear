<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;

class Add1Controller extends Controller {
    public function index(){
        if(session('uid')){
            $this->display();
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function add(){
        if(session('uid')){
            $find = D('Find');
            $data['title']=I('title');
            $data['varieties']=I('varieties');
            $data['tel']=I('tel');
            $data['province']=I('province1');
            $data['city']=I('city1');
            $data['title']=I('title');
            $data1=I('content');
            $data['content']=htmlspecialchars_decode($data1);
            $data['state']=0;
            $data['uid']=session('uid');
            $data['time'] = date("Y-m-d H:i:s");
            $res=$find->add($data);
            $this->success($res);
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }

    }

    public function delete(){
        if(session('uid')){
            $find = D('Find');
            $map['id']=I('id');
            $find->where($map)->delete();
            $this->success("删除成功");
        }else {
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function edit(){
        if(session('uid')){
            $find = D('Find');
            $map['id']=I('id');
            $data=$find->where($map)->find();
            $this->assign('data',$data);
            $this->display();
        }else {
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function update(){
        if(session('uid')){
            $find = D('Find');
            $map['id']=I('id');
            $data['title']=I('title');
            $data['varieties']=I('varieties');
            $data['tel']=I('tel');
            $data['province']=I('province1');
            $data['city']=I('city1');
            $data['title']=I('title');
            $data1=I('content');
            $data['content']=htmlspecialchars_decode($data1);
            $data['state']=0;
            $data['uid']=session('uid');
            $data['time'] = date("Y-m-d H:i:s");
            file_put_contents('110.php',$map);
            $res=$find->where($map)->save($data);
            $this->success($res);
        }else {
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }
}