<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<h1>Add Unit</h1>

<form action="index.php?action=add-unit" method="post">
    <label for="name">
        Nom :
        <?php if ($this->e($unit) !== ""): ?>
            <input type="text" name="name" value="<?= $this->e($unit) ?>">
        <?php else : ?>
            <input type="text" name="name">
        <?php endif; ?>
    </label>
    <br>
    <br>
    <label for="origin">
        Origine :
        <select name="origin">
            <?php for ($i = 0; $i < count($origins); $i++):  ?>
                <?php if ($this->e($unitOrigin) == $origins[$i]->getId()): ?>
                    <option name="<?= $origins[$i]->getName() ?>" value="<?= $origins[$i]->getId() ?>" selected><?= $origins[$i]->getName() ?></option>
                <?php else : ?>
                    <option name="<?= $origins[$i]->getName() ?>" value="<?= $origins[$i]->getId() ?>"><?= $origins[$i]->getName() ?></option>
                <?php endif; ?>
            <?php endfor; ?>
        </select>
    </label>
    <br>
    <br>
    <label for="cost">
        Cout :
        <input type="text" name="cost">
    </label>
    <br>
    <br>
    <label for="ur_img">
        url :
        <input type="text" name="url_img">
    </label>
    <br>
    <br>
    <button class="submit">Valider</button>
</form>


