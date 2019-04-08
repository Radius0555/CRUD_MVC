<?php
include 'view/view.php';

class UserView extends View
{
	public function index()
	{
        $job=$this->loadModel('user');
        $this->render('index');
    }
	public function addR() 
	{
        $job=$this->loadModel('user');
        $this->render('Rej');
    }
	public function login()
	{
        $job=$this->loadModel('user');
        $this->render('Login');
    }
	public function userL()
	{
        $job=$this->loadModel('user');
        $this->render('UserLogin');
    }	
}