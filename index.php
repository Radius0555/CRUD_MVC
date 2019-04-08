<?php
if(($_GET['task']=='crud') && ($_GET['action']=='all'))
{
   include 'controller/crud.php';
   $ob = new CRUDController();
   $ob->all();
}
else if(($_GET['task']=='user') && ($_GET['action']=='addR')) 
{
include 'controller/user.php';
$ob = new UserController();
$ob->addR();
}
else if(($_GET['task']=='user') && ($_GET['action']=='insertR')) 
{
include 'controller/user.php';
$ob = new UserController();
$ob->insertR();
}
else if(($_GET['task']=='user') && ($_GET['action']=='login')) 
{
include 'controller/user.php';
$ob = new UserController();
$ob->login();
}
else if(($_GET['task']=='user') && ($_GET['action']=='login0'))
{
include 'controller/user.php';
$ob = new UserController();
$ob->login();
echo 'Puste pola!';
}
else if(($_GET['task']=='user') && ($_GET['action']=='login1'))
{
include 'controller/user.php';
$ob = new UserController();
$ob->login();
echo 'Złe dane logowania!';
}
else if(($_GET['task']=='user') && ($_GET['action']=='loginS')) 
{
include 'controller/user.php';
$ob = new UserController();
$ob->loginS();
}
else if(($_GET['task']=='user') && ($_GET['action']=='unlogin')) 
{
include 'controller/user.php';
$ob = new UserController();
$ob->unlogin();
}
else if(($_GET['task']=='crud') && ($_GET['action']=='all')) 
{
include 'controller/crud.php';
$ob = new CRUDController();
$ob->all();
}
else if(($_GET['task']=='crud') && ($_GET['action']=='add')) 
{
include 'controller/crud.php';
$ob = new CRUDController();
$ob->add();
}
else if(($_GET['task']=='crud') && ($_GET['action']=='insert')) 
{
include 'controller/crud.php';
$ob = new CRUDController();
$ob->insert();
}
else if(($_GET['task']=='crud') && ($_GET['action']=='delete')) 
{
include 'controller/crud.php';
$ob = new CRUDController();
$ob->delete();
}
else
{
include 'controller/user.php';
$ob = new UserController();
$ob->index();
}