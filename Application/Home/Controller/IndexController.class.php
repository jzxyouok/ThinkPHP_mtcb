<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	dump( C('MODULE_ALLOW_LIST'    ));
    }
}