<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $adLists = D('ad')->getList($where,$offset,$limit,$order);
    $this->assign('adLists',$adLists);
    $GoodsLists = D('Goods')->getList($where,$offset,$limit,$order);
    $this->assign('GoodsLists',$GoodsLists);
    $Ucomments = D('ucomment')->getList($where,$offset,$limit,$order);
    $this->assign('Ucomments',$Ucomments);
    $this->display('index');


    }
    public function dologin(){
    	$model  =  D('home');
    	$email = I('post.email');
    	$password = md5(I('post.password'));
    	
		$result = $model->where(array('email' => $email, 'password' => $password))->find();
    	if ($result) {
    		$_SESSION['home']['me'] = $result;
    		$this->redirect('index');
    	}else{
            $this->error('登陆失败');
        }
    	 
    }
    public function logout(){
    	$_SESSION['home']['me'] = "";
    	$this->redirect('index');
    }
}