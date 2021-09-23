<?php

    require_once('./Models/m_Etudiant.php');

    class Etudiant {

        public $id;
        public $nom;
        public $numMatricule;

        /**
         * Lister les etudiants
         * @return array
         */
        public function lister() {
            //Appel Model  (m_Etudiant)

            $etudiant =  new m_Etudiant();
            $tabListeEtudiant =  $etudiant->getList();

            //  Renvoi vers views (v_etudiant)

            require_once('./Views/v_etudiant.php');
        }

        /**
         * Modifier un  etudiant
         * @param integer $_idEtudiant
         */
        public function modifier($_idEtudiant) {
        }

         /**
         * Modifier un  etudiant
         * @param integer $_idEtudiant
         */
        public function supprimer($_idEtudiant) {

        }

        /**
         * Modifier un  etudiant
         */
        public function virer($_idEtudiant) {

        }




    }

?>