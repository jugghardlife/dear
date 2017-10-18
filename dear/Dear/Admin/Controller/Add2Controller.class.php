<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;

class Add2Controller extends Controller {
    public function index(){
        if(session('uid')){
            $this->display();
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function add(){
        if(session('uid')) {
            $encounter = D('Encounter');
            $data['title'] = I('title');
            $data['varieties'] = I('varieties');
            $data['tel'] = I('tel');
            $data['province'] = I('province1');
            $data['city'] = I('city1');
            $data['title'] = I('title');
            $data1 = I('content');
            $data['content'] = htmlspecialchars_decode($data1);
            $data['state'] = 0;
            $data['uid'] = session('uid');
            $data['time'] = date("Y-m-d H:i:s", time());
            $res = $encounter->add($data);
            file_put_contents("110.php", D("Encounter")->getLastSql());
            $this->success($res);
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function delete(){
        if(session('uid')) {
            $encounter = D('Encounter');
            $map['id'] = I('id');
            $encounter->where($map)->delete();
            $this->success("hello");
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function edit(){
        if(session('uid')) {
            $encounter = D('Encounter');
            $map['id'] = I('id');
            $data = $encounter->where($map)->find();
            $this->assign('data', $data);
            $this->display();
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }

    public function update(){
        if(session('uid')) {
            $encounter = D('Encounter');
            $map['id'] = I('id');
            $data['title'] = I('title');
            $data['varieties'] = I('varieties');
            $data['tel'] = I('tel');
            $data['province'] = I('province1');
            $data['city'] = I('city1');
            $data['title'] = I('title');
            $data1 = I('content');
            $data['content'] = htmlspecialchars_decode($data1);
            $data['state'] = 0;
            $data['uid'] = session('uid');
            $data['time'] = date("Y-m-d H:i:s");
            $res = $encounter->where($map)->save($data);
            $this->success($res);
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }
}