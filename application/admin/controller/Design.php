<?php
namespace app\admin\controller;
use think\Controller;

class Design extends Controller
{
	public function index(){
		return $this->fetch("design");
	}
}