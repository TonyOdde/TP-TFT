<?php
$this->layout('template', ['title' => 'TP TFT']);
?>
<h1>TFT - Set <?= $this->e($tftSetName) ?></h1>

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
                "<td>" . $listAll[$i]->getOrigin() . "</td>" .
                "<td> <img src=." . $listAll[$i]->getUrlImg() . "></td>" .
            "</tr>";
        }
        ?>
    </tbody>
</table>

