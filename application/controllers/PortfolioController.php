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
                'list'=> $portfolio->getAll(),
                'var' => $anyVar,
            ];
            $this->view->render('Главная страница', $vars);
        }else{
	        $max_posts = 10;
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

    public function editAction() {
        $portfolio = new Portfolio();

        if (isset($this->route['id'])){
            $id = $this->route['id'];
            $anyVar = $portfolio->getPost($id);
            $vars = [
                'id' => $id,
                'subject' => $anyVar[0]['subject'],
                'topic' => $anyVar[0]['topic'],
                'semester' => $anyVar[0]['semester'],
                'rating' => $anyVar[0]['rating'],
            ];
            $this->view->render('Меняем данные', $vars);
            if (isset($_POST['update'])){
                $portfolio->postEdit($_POST,$id);
            }
            if (isset($_POST['delete'])){
                $portfolio->postDelete($id);
            }
        }else{
            $this->view->render('Меняем данные');

            if ($_POST){
                $this->postAction($_POST);
                $vars = [
                    'list'=> $portfolio->getAll(),
                    'var' => $this->route,
                ];
                $this->view->render('Меняем данные', $vars);
            }
        }
    }
}