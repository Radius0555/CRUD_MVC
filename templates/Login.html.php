<?php include 'templates/header.html.php'; ?>
 
<ul>
	<li><a href="?task=user&amp;action=all">Lista pracowników</a>
</ul>
 
<h1>Zaloguj się</h1>
<form action="?task=user&amp;action=loginS" method="post">
    Login: </br><input type="text" name="name"/><br/>
	Hasło: </br><input type="text" name="pass"/><br/>
    <input type="submit" value="Zaloguj"/></br>
</form>
 
<?php include 'templates/footer.html.php'; ?>