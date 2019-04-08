<?php
include 'view/view.php';

class CrudView extends View
{
	public function all()
	{
		$job=$this->loadModel('crud');
		$this->set('crud', $job->getAll());
		$this->render('allCrud');
	}
    public function add() 
	{
        $job=$this->loadModel('crud');
        $this->set('crud', $job->getAll());
        $this->render('addCrud');
    }	
}
