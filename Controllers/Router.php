<?php 
require_once('Views/View.php');

class Router {

    private $_view;
    private $_ctrl;

    public function routeRequest() {

        try {

            spl_autoload_register(function($class)  {
                $classFile = $class.'.php';
                $classURL = 'Models/'.$classFile;

                require_once($classURL);
            });

            if (isset($_GET['url'])) {

                $url = filter_var(strtolower($_GET['url']), FILTER_SANITIZE_URL);
                $url = explode('/', $url);
    
                $controller = ucfirst($url[0]);
                $controllerClass = 'Controller'.$controller;
                $controllerFile = 'Controllers/'.$controllerClass.'.php';

                if (file_exists($controllerFile)){

                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                    
                } else {
                    throw new Exception("Ohh nooo ... Error 404 ! Page is not found");
                }

            } else {

                $controllerClass = 'ControllerHome';
                $controllerFile = 'Controllers/ControllerHome.php';
                $url = "Home/";

                $url = explode('/', $url);

                require_once($controllerFile);

                $this->_ctrl = new ControllerHome($url);

            }
        } catch (Exception $e) {
            $this->_view = new View('Error');
            $errorMessage = $e->getMessage();
            $data['errorMessage'] = $errorMessage;
            $this->_view->setPageTitle("Error Page");
            
            $this->_view->generate($data);
        }
    }
}