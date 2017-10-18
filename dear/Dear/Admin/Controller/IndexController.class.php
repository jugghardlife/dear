<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $map['id']=session('uid');
        if($map['id']){
            header('Access-Control-Allow-Origin:*');
            header('Access-Control-Allow-Method:POST,GET');
            $user=D('User');
            $data=$user->relation(true)->where($map)->find();
            $data['FL']=count($data['Find']);
            $data['EnL']=count($data['Encounter']);
            $data['ExL']=count($data['Experience']);
            $data['AdL']=count($data['Adopt']);
            $data['MeL']=count($data['Memory']);
            $this->assign('data',$data);
            $this->display();
        }else{
            redirect('/dear/Home/login', 2, '请登录...');
        }
    }
}