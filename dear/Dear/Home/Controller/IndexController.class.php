<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$data['username']=session('username');
    	$data['id']=session('uid');
    	$data['city']=session('city');
    	$this->assign('data',$data);
	   	$this->display();
    }
}