<?php
    class Blog extends Controller {
        public function __construct()
        {

        }
        public function detail()
        {
            $this->render('inc/head');
            $this->render('inc/header');
            $this->render('components/blogdetail');
            $this->render('inc/footer');
        }
    }
?>