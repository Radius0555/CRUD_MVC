<?php include 'templates/header.html.php'; ?>
 
<ul>
	<li><a href="?task=user&amp;action=all">Lista pracowników</a>
</ul>
 
<h1>Zarejestruj się</h1>
<form action="?task=user&amp;action=insertR" method="post">
    Nazwa użytkownika: </br><input type="text" name="name"/><br/>
	Email: </br><input type="text" name="email"/><br/>
    Hasło: <br/><input type="text" name="password"><br/></br>
    <input type="submit" value="Zarejestruj"/></br>
</form>

<?php include 'templates/footer.html.php'; ?>