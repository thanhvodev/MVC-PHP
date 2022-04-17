<?php
    class Blogs extends Controller {

        private $blogModel;

        public function __construct()
        {
            $this->blogModel = $this->loadModel('Blog');
        }

        public function detail($id)
        {
            $this->render('inc/head');
            $this->render('inc/header');

            $res = $this->blogModel->getBlogList();

            // $blog = $res[$id-1];
            
            // print_r($blog);

            $this->render('components/blogdetail', [
                "blogs" => $this->blogModel->getBlogList(),
                "id" => $id,
            ]);

            // echo "detail";
            $this->render('inc/footer');
        }
    }
?>