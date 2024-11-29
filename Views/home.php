<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>
<?= $this->e($message) ?>
<h2>Persos</h2>
<table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Cout</th>
            <th scope="col">Origine</th>
            <th scope="col">Image</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < count($listAll); $i++) {
            echo "<tr class='perso'>" .
                "<td>" . $listAll[$i]->getId() . "</td>" .
                "<td>" . $listAll[$i]->getName() . "</td>" .
                "<td>" . $listAll[$i]->getCost() . "</td>" .
                "<td>" . $listAll[$i]->getNameOrigin() . "</td>" .
                "<td> <img src=" . $listAll[$i]->getUrlImg() . "></td>" .
                "<td> <a class='btn-modify' href='index.php?action=edit-unit&id=" . $listAll[$i]->getId() . "'>✏️</a>
                      <a class='btn-modify' href='index.php?action=del-unit&id=" . $listAll[$i]->getId() . "'>🗑️</a></td>" .
            "</tr>";
        }
        ?>
    </tbody>
</table>

