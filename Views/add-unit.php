<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<h1>Add Unit</h1>

<?php
if ($this->e($id) != null){
    echo $this->e($id);
};

