<?php
include 'controller/controller.php';
 
class CRUDController extends Controller 
{
	public function all() 
	{
        $view=$this->loadView('crud');
        $view->all();
    }
	public function add() 
	{
        $view=$this->loadView('crud');
        $view->add();
    }
	public function insert() 
	{
		$model=$this->loadModel('crud');
        $model->insert($_POST);
        $this->redirect('?task=crud&action=all');
    }
    public function delete() 
	{
        $model=$this->loadModel('crud');
        $model->delete($_GET['id']);
        $this->redirect('?task=crud&action=all');
    }
}
 
 
