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

            $blog = $res[$id-1];
            
            // print_r($blog);

            $this->render('components/blogdetail', [
                'id' => $blog->ID,
                "title" => $blog->TITLE,
                "image" => $blog->IMAGE,
                "content" => $blog->CONTENT,
                "timestamp" => $blog->TIMESTAMP,
                "writer" => $blog->WRITER
            ]);

            // echo "detail";
            $this->render('inc/footer');
        }
    }
?>