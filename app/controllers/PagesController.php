<?php

namespace Simple\App\Controllers;

class PagesController extends Controller
{

  public function home()
  {
    $page = 'Homepage';
    return $this->render('pages.home', compact('page'));
  }

  public function about()
  {
    $page = 'About';
    return $this->render('pages.about', compact('page'));
  }

  public function contact()
  {
    $page = 'Contact';
    return $this->render('pages.contact', compact('page'));
  }

  public function error()
  {
    return $this->render('pages.error');
  }
}
