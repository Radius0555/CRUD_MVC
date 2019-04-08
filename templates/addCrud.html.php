<?php include 'templates/header.html.php'; ?>
<?php
include 'templates/session.html.php';
?>
<ul>
	<li><a href="?task=crud&amp;action=all">Lista pracowników</a>
</ul>
 
<h1>Dodaj dane</h1>
<form action="?task=crud&amp;action=insert" method="post">
    Imię i nazwisko: </br><input type="text" name="name"/><br/>
	Praca wykonywana: </br><input type="text" name="job"/><br/>
    Zarobki: <br/><input type="text" name="wage"><br/></br>
    <input type="submit" value="Dodaj"/></br>
</form>
 
<?php include 'templates/footer.html.php'; ?>