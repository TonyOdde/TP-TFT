<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<h1>Add Unit</h1>

<form action="index.php" method="post">
    <label for="nom">
        Nom :
        <input type="text" name="nom">
    </label>

    <button class="submit">Valider</button>
</form>


<?php if (null !== $this->e($unit)): ?>
<h2>Unite : </h2>
<p><?= $this->e($unit) ?></p>
<?php endif; ?>
