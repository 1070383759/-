<?php
namespace app\index\controller;

use think\Duanxin;
use think\Db;
use think\View;
use app\index\model\User;
use app\index\model\Admin_city;

class Index
{

    public function index()
    {
        $admin_city = new Admin_city;
        $data = $admin_city -> select();

        // $parent_id='0';
        // $level='1';
        // $new_arr=array();
        // foreach($data as $k=>$v){
        //     if($v['parent_id']==$parent_id){
        //         $v['level']=$level;
        //         $new_arr[]=$v;
        //         $parent_id = $v['city_id'];
        //         $level +=1;
        //         foreach($data as $k=>$v)
        //         {
        //             if($v['parent_id']==$parent_id)
        //             {
        //                 $v['level']=$level;
        //                 $new_arr[]=$v;

        //             }
        //         }
        //         // cate_type($data,$v['cat_id'],$level+1);
        //     }
        // }
        // return $new_arr;
        // echo "<pre>";
        // print_r($new_arr);die;

        $list = array();
        foreach($data as $arr)
        {
            $list[$arr['parent_id']][]=$arr;
        }
        // foreach($list as $k => $v)
        // {
        // echo "<pre>";
        // var_dump($v);
        //     foreach($v as $key =>$val)
        //     {
                
        //     }
        

        // }die;
        // echo "<pre>";
        // print_r($list);die;
        return view('index',["data"=>$list]);
    }

    function gentree($data)
    {  
          $tree = array(); //格式化好的树  
          $tmp = array();  //临时扁平数据  
          foreach ($data as $vo) {  
            $tmp[$vo['city_id']] = $vo;  
          }  
          foreach ($data as $vo){  
            if (isset($tmp[$vo['parent_id']])){  
              $tmp[$vo['parent_id']]['son'][] = &$tmp[$vo['city_id']];  
            }  
            else{  
              $tree[] = &$tmp[$vo['city_id']];  
            }  
          }  
          unset($tmp);  
          return $tree;  
    }  
    
    
    public function about()
    {
    	return view();
    }
    
    public function biaoge()
    {
    	return view();
    }
    
    public function contact()
    {
    	return view();
    }
    
    public function help()
    {
    	return view();
    }
    
    public function login()
    {
    	return view();
    }
    
    //登录操作
    public function login_do()
    {
    	$index_name = isset($_POST['index_name'])?$_POST['index_name']:"";
    	$index_pwd = isset($_POST['index_pwd'])?$_POST['index_pwd']:"";
//  	var_dump($index_pwd);
    	if(strlen($index_pwd)!=32)
    	{
    		$index_pwd_md5 = md5($index_pwd);
    	}else
    	{
    		$index_pwd_md5 = $index_pwd;
    	}
//  	var_dump($index_pwd);die;
    	$user = new User;
    	$data1 = $user->where("index_name = '$index_name'")->find();
    	if($data1)
    	{
    		if($data1['index_pwd']== $index_pwd_md5)
	    	{
	    		setcookie('index_name',$index_name);
	    		setcookie('index_pwd',$index_pwd_md5);
	    		echo "<script>alert('登录成功');location.href='vip'</script>";
	    	}else
	    	{
	    		echo "<script>alert('密码不对');location.href='login'</script>";
	    	}
    	}else
    	{
    		echo "<script>alert('没有这个用户');location.href='login'</script>";
    	}
    	
    }
    
    public function message()
    {
    	return view();
    }
    
    public function order()
    {
    	return view();
    }
    
    public function order2()
    {
    	return view();
    }
    
    public function orderDetails()
    {
    	return view();
    }
    
    public function product()
    {
    	return view();
    }
    
    public function proinfo()
    {
    	return view();
    }
    
    public function reg()
    {

    	return view();
    }
    
    //注册用户 添加到表里
    public function reg_add()
    {
    	$index_name = $data['index_name'] = isset($_POST['index_name'])?$_POST['index_name']:"";
    	$index_pwd = $data['index_pwd'] = isset($_POST['index_pwd'])?$_POST['index_pwd']:"";
    	$index_phone = $data['index_phone'] = isset($_POST['index_phone'])?$_POST['index_phone']:"";
    	$user = new User;
    	$data1 = $user->where("index_name = '$index_name'")->find();
    	$data2 = $user->where("index_phone = '$index_phone'")->find();
    	if($data1)
    	{
    		echo "<script>alert('用户名已被注册');location.href='reg'</script>";die;
    	}
    	if($data2)
    	{
    		echo "<script>alert('手机号已被注册');location.href='reg'</script>";die;
    	}
    	$data['index_pwd']=md5($index_pwd);
    	$res = $user->insert($data);
    	if($res)
    	{
    		setcookie("code","");
    		echo "<script>alert('注册成功');location.href='login'</script>";die;	
    	}
    	
    }
    
    //js验证注册操作并返回值
    public function reg_do()
    {
    	$index_name = $data['index_name'] = isset($_POST['index_name'])?$_POST['index_name']:"";

    	$user = new User;
    	$data = $user->where("index_name = '$index_name'")->find();

    	if($index_name=="")
    	{//账号为空
    		echo "2";die;
    	}else if(strlen($index_name)<6)
    		{//账号少于6位
    			echo "3";die;
    		}
    	if($data)
    	{//账号名已被注册
    		echo "1";die;
    	}else{
    		//这个账号名可以用
    		echo "0";die;
    	}   	
    } 
     
    //验证手机短信  
    public function code_do()
    {
    	$code1 = $_POST['code1'];
    	
    	$code = isset($_COOKIE['code'])?$_COOKIE['code']:"";
    	
    	if($code == md5($code1))
    	{
    		echo "1";
    	}else
    	{
    		echo "0";
    	}
    }
    
    //发短信
    public function phone_do()
    {
    	$index_phone = $_POST['tel'];
    	$user = new User;
    	$data1 = $user->where("index_phone = '$index_phone'")->find();
    	if($data1)
    	{ //手机号已被注册
    		echo "1";die;
    	}else
    	{//手机号可以注册
    		$duanxin = new Duanxin();
    		$res = $duanxin->send($index_phone);
    		echo md5($res['code']);die;
    	}
    	    	
    	
    	
    }
    
    //验证手机号
    public function phone_do1()
    {
    	$index_phone = $_POST['tel'];
    	$user = new User;
    	$data1 = $user->where("index_phone = '$index_phone'")->find();
    	if($index_phone==""||strlen($index_phone)!="11")
    	{//手机号为空返回3
    		echo "3";die;
    	}else
    	if($data1)
    	{ //手机号已被注册
    		echo "1";die;
    	}else
    	{//手机号可以注册
    		echo "0";die;
    	}
    	
    	    	
    	
    	
    }
    
    public function success()
    {
    	return view();
    }
    
    public function vip()
    {
    	return view();
    }
    
    public function vipAdress()
    {
    	return view('vipAdress');
    }
    
    public function vipExit()
    {
    	return view('vipExit');
    }
    
    public function vipMy()
    {
    	return view('vipMy');
    }
    
    public function vip_order()
    {
    	return view();
    }
    
    public function vipPwd()
    {
    	return view('vipPwd');
    }
    
    public function vipTuihuo()
    {
    	return view('vipTuihuo');
    }
}
