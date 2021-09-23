<?php

    echo "<h1>Liste des Etudiants</h1>";

?>

<table border=1>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Matricule</th>
        <th>Groupe</th>
    </tr>
    <?php foreach($tabListeEtudiant as $key => $value) : ?>
        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['nom']?></td>
            <td><?php echo $value['numMatricule']?></td>
            <td><?php echo $value['groupe']?></td>
        </tr>
    <?php endforeach;?>
</table>