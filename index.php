<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Itb\MainController;

$mainController = new MainController();


$action = filter_input(INPUT_GET, 'action');



switch($action){
    case 'about':
        $mainController->aboutAction();
        break;
    case 'index':
    case 'home':
        $mainController->indexAction();
        break;
	case 'sitemap':
	     $mainController ->sitemapAction();
	     break;
    case 'people':
	     $mainController ->peopleAction();
		 break;
    case 'shopping':
	      $mainController ->shoppingAction();
		  break;
    case 'stafflogin':
	      $mainController ->staffloginAction();
		  break;
    case 'adminlogin':
	      $mainController ->adminloginAction();
		  break;
    case 'signup':
	      $mainController ->signupAction();
		  break;
    default:
            $mainController->error404Action();
}
