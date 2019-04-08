<?php
include 'model/model.php';

class UserModel extends Model
{
	public function insertR()
	{
		if(($_POST['name'] == NULL) || ($_POST['email'] == NULL) || ($_POST['password']==NULL))
		{
	        $this->redirect('?task=user&action=addR');
		}
		else
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$rej=$this->pdo->prepare('INSERT INTO user (nameuser, email, password) VALUES (
			:name, :email, :password)');
			$rej->bindValue(':name', $name, PDO::PARAM_STR);
			$rej->bindValue(':email', $email, PDO::PARAM_STR);		
			$rej->bindValue(':password', $pass, PDO::PARAM_STR);
			$this->redirect('?task=user&action=login');
			$rej->execute();
		}
	}
	public function loginS()
	{
		$sesja;
		
		if(($_POST['name']==NULL) || ($_POST['pass']==NULL))
		{
			$this->redirect('?task=user&action=login0');
		}
		else
		{
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			$sel=$this->pdo->query("SELECT nameuser,password FROM user WHERE nameuser=:name AND password=:pass");
			$sel->bindValue(':name', $name, PDO::PARAM_STR);
			$sel->bindValue(':pass', $pass, PDO::PARAM_STR);
			$sel->execute();
			$result = $sel->fetch(PDO::FETCH_ASSOC);
			if($result)
			{
				$_SESSION['sesja'] = $result['nameuser'];
				$this->redirect('?task=crud&action=all');
			}
			else
			{
				$this->redirect('?task=user&action=show2-1');
			}
		}
	}
	public function logout()
	{
		unset($_SESSION['sesja']);
		session_destroy();
		$this->redirect('?task=user&action=index');
	}
}