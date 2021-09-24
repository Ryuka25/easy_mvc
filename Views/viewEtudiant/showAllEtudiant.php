<h1>Liste des Etudiants</h1>
<table class="table table-striped">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Matricule</th>
            <th>Groupe</th>
        </tr>

    </thead>
    <tbody>
        <?php 
            foreach($tabListeEtudiant as $key => $value) {
                include('showOneEtudiant.php');
            }
        ?>
    </tbody>
</table>