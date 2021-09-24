<?php

// Controllers/Etudiant.php 

// Controllers/ControllerEtudiant.php

    class ControllerEtudiant {

        private $_view;
        private $_model;

        public function __construct($url) {
            
            $this->_view = new View('Etudiant');
            $this->_view->setPageTitle('Liste Etudiants');
            $this->_model = new EtudiantManager;

            $innerData['tabListeEtudiant'] = $this->_model->getList();

            $generalData['pageContent'] = $this->_view->generateFile('Views/viewEtudiant/showAllEtudiant.php',$innerData);

            $this->_view->generate($generalData);

        }
    }

?>