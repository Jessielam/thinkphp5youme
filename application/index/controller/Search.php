<?php
namespace app\index\controller;
use think\Controller;

class search extends Controller
{
	public function index(){
		return $this->fetch('search');
	}
}