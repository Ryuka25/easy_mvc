<?php 
require_once('Views/View.php');

class ControllerHome {

    private $_view;
    private $_model;

    public function __construct($url) {
        $this->showHomePage();
    }

    private function showHomePage() {

        $this->_view = new View('Home');
        $this->_view->setPageTitle("Homepage");

        $data = array();

        $this->_view->generate($data);

    }
}