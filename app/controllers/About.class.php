<?php
class About extends Controller {
    public function __construct()
    {
        
    }

    public function index()
    {
        header("Location: " . URL_ROOT . "/about/about");
    }

    public function about() {
        $data = [
            'page' => 'about'
        ];
        $this->render('index', $data);
    }

}