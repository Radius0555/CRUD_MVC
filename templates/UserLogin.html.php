<?php include 'templates/header.html.php'; ?>

<?php
session_start();
echo "<p>Zalogowałeś się jako: ".$_SESSION['sesja']."</p>";
echo '<ul>';
echo '<li><a href="?task=user&amp;action=unlogin">Wyloguj się</a></li>';
echo '</ul>';
?>
 
<?php include 'templates/footer.html.php'; ?>