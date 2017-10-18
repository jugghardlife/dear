<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {
    public function index(){
	   session(null);
	   $this->success('操作完成','http://localhost/dear/admin');
    }
}