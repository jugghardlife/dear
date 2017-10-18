<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

	   $this->display();

    }
    public function verify(){
        $config =    array(
            'fontSize'    =>   80,    // 验证码字体大小
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    public function login(){
        $code=I('post.code');//获得用户输入的验证码
        if($this->check_verify($code)==false){
            $data['state']=3;
            $data['msg']="验证码错误";
            $this->ajaxReturn($data);
        }else{
             //实例化Login对象
            $user = D('User');
             // 组合查询条件
            $where = array();
            $map['username'] = I('username');
            $map['password'] = I('password');
            $time['date'] = date('Y-m-d H:i:s');
            $result = $user->where($map)->find();
            $ip = get_client_ip();

            $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
            $IPinfo = json_decode(file_get_contents($taobaoIP));
            $city = $IPinfo->data->city;
            $region = $province.$city;
            if($map['password']==$result['password']){
                session('username', $result['username']);
                session('uid', $result['id']);
                session('date', $result['date']);
                session('city',$city);

            // 更新用户登录信息
                $where['id'] = session('uid');
                $user->where($where)->save($time);   // 更新登录时间和登录ip
                $data['state']=1;
                $data['msg']="登录成功";
                $this->ajaxReturn($data);
            }else{
                $data['state']=2;
                $data['msg']="用户不存或密码错误";
                $this->ajaxReturn($data);
            }
        }   
    }

    public  function check_verify($code,$id="")
    {
        $verify=new \Think\Verify();
        return $verify->check($code,$id);
    }
}