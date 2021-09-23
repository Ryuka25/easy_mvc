<?php

    class m_Etudiant {

        public $id;
        public $nom;
        public $numMatricule;

        /**
         * Lister les etudiants
         * @return array
         */
        public function getList() {
            //requete à la table etudiant
           $tabEtudiant = array(
                    0 => array(
                        'id' => 1,
                        'nom' => 'Etudiant 1',
                        'numMatricule' => 1,
                        'groupe' => 1
                    ),
                    1 => array(
                        'id' => 2,
                        'nom' => 'Etudiant 2',
                        'numMatricule' => 2,
                        'groupe' => 2,
                    ),
                    2 => array(
                        'id' => 3 ,
                        'nom' => 'Etudiant 3',
                        'numMatricule' => 3,
                        'groupe' => 1,
                    )
            );

            return $tabEtudiant;
            
        }

        /**
         * Modifier un  etudiant
         * @param integer $_idEtudiant
         */
        public function updateData($_idEtudiant) {
            $query = "UPDATE etudiant SET nom ='xxxxx' WHERE id = '.$_idEtudiant.' ";
        }

         /**
         * Modifier un  etudiant
         * @param integer $_idEtudiant
         */
        public function deleteData($_idEtudiant) {
            $query = "DELETE FROM etudiant WHERE id = ".$_idEtudiant."  ";
        }

        /**
         * Modifier un  etudiant
         */
        public function virer($_idEtudiant) {

        }




    }

?>