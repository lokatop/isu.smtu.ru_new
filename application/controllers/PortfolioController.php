<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Portfolio;

class PortfolioController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'portfolio';
    }

	public function indexAction() {
        $portfolio = new Portfolio();
	    if ($_POST){
	        $anyVar= $portfolio->getAll();
	        $this->postAction($_POST);
            $vars = [
                //'list' => $portfolio->postsList($this->route['id'])[0],
                'list'=> $portfolio->getAll(),
                'var' => $anyVar,
            ];
            $this->view->render('Главная страница', $vars);
        }else{
	        $max_posts = 5;

            $pagination = new Pagination($this->route, $portfolio->postsCount(),$max_posts);

            $vars = [
                'pagination' => $pagination->get(),
                'var' => $this->route,
                'list' => $portfolio->postsList($this->route,$max_posts),
                //'list'=> $portfolio->getAll(),
            ];
            $this->view->render('Главная страница', $vars);
        }

	}


	public function postAction($post) {
		$portfolio = new Portfolio;
        return $portfolio->postAdd($post);
	}


}