<?php
include 'controller/controller.php';
 
class UserController extends Controller 
{
	public function index() 
	{
        $view=$this->loadView('user');
        $view->index();
    }
	public function addR()
	{
        $view=$this->loadView('user');
        $view->addR();
    }
	public function insertR() 
	{
		$model=$this->loadModel('user');
        $model->insertR($_POST);
    }
	public function login() 
	{
		$view=$this->loadView('user');
		$view->login();
    }
	public function loginS() 
	{
		$model=$this->loadModel('user');
        $model->loginS($_POST);
    }
	public function unlogin() 
	{
		$model=$this->loadModel('user');
        $model->logout();
    }
}

?>