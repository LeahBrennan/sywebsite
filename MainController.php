<?php

namespace Itb;

class MainController
{
    public function indexAction()
    {
        include __DIR__ . '/../views/index.php';
	
    }

    public function error404Action()
    {
        $errorMessage = 'sorry, the action requested cannot be found';
        include __DIR__ . '/../views/error.php';
    }

    public function aboutAction()
    {
        include __DIR__ . '/../views/about.php';
    }
	public function sitemapAction()
	{
      include __DIR__ . '/../views/sitemap.php';
	}
	public function peopleAction()
	{
      include __DIR__ . '/../views/people.php';
	}
	public function shoppingAction()
	{
      include __DIR__ . '/../views/shopping.php';
	}
		
}