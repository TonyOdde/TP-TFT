<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<h1>Add Origin</h1>

<form action="index.php?action=add-unit-origin" method="post">
    <label for="name">
        Nom :
        <input type="text" name="name">
    </label>
    <button class="submit">Valider</button>
    <br>
    <h3><?= $this->e($message) ?></h3>
</form>