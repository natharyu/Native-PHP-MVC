<?php namespace App\Controller;

class Home
{
    // Return main view
    public function index() :void
    {
        $view = './App/Views/Home/Homepage/Main.php';
        include_once './App/Views/Home/Layout/Layout.php';
    }

    // Return about view
    public function aboutView() :void
    {
        $view = './App/Views/Home/Homepage/About.php';
        include_once './App/Views/Home/Layout/Layout.php';
    }

    // Return contact view
    public function contactForm() :void
    {
        $view = './App/Views/Home/Homepage/Contact.php';
        include_once './App/Views/Home/Layout/Layout.php';
    }
}