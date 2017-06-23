<?php
namespace app\index\controller;
use think\Controller;

class Lst extends Controller
{
	public function lst(){
		return $this->fetch();
	}
}