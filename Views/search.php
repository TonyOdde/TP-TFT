<!doctype html>
<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<h1>Search</h1>


<form action="index.php?action=search" method="post">
    <label for="nom">
        Nom :
        <input type="text" name="nom">
    </label>
    <br>
    <br>
    <label for="origine">
        Origine :
        <input type="text" name="origine">
    </label>
    <br>
    <br>
    <label for="cout">
        Cout :
        <input type="text" name="cout">
    </label>
    <br>
    <br>
    <button class="submit">Valider</button>
</form>
