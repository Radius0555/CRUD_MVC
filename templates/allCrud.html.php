<?php
include 'templates/header.html.php';
?>
<?php
include 'templates/session.html.php';
?>
<ul>
	<li><a href="?task=crud&amp;action=add">Dodaj dane pracownika</a></li>
</ul>

<h1>Pracownicy</h1>
</br>
<table>
    <tr>
        <td>Imię i nazwisko</td>
		<td>Praca wykonywana</td>
        <td>Zarobki</td>
    </tr>
    <?php foreach($this->get('crud') as $crud) { ?>
    <tr>
        <td><?= $crud['name']; ?></td>
		<td><?= $crud['job']; ?></td>
        <td><?= $crud['wage']; ?></td>
<td><a href="?task=crud&amp;action=delete&amp;id=<?= $crud['id']; ?>">usuń</a></td>
</tr>
    <?php } ?>
</table>
 
<?php include 'templates/footer.html.php'; ?>