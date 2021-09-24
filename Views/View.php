<?php 

class View {

    private $_pageTitle;
    private $_file;

    public function __construct($action) {

        $action = ucfirst($action);
        $actionView = 'view'.$action;
        $actionFile = 'Views/'.$actionView.'.php';

        if (file_exists($actionFile)) {
            $this->_file = $actionFile;
        } else {
            throw new Exception("View for Action not found !");
        }
        
    }

    public function setPageTitle($pageTitle) {

        $this->_pageTitle = $pageTitle;
        
    }

    public function generateFile($file, $data) {

        extract($data);

        ob_start();

        require_once($file);

        return ob_get_clean();
    }

    public function generate($data) {

        $content = $this->generateFile($this->_file, $data);
        $pageTitle = $this->_pageTitle;

        $generalData['content'] = $content;
        $generalData['pageTitle'] = $pageTitle;

        $view = $this->generateFile('Views/template.php', $generalData);

        echo $view;
    }
}