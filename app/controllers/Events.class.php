<?php
    class Events extends Controller {

        private $eventModel;

        public function __construct()
        {
            $this->eventModel = $this->loadModel('Event');
        }

        public function index() 
        {
            $this->render('inc/head');
            $this->render('inc/header');

            $res = $this->eventModel->getEventList();

            $this->render('components/eventpage', [
                "events" => $this->eventModel->getEventList(),
            ]);

            $this->render('inc/footer');
        }

        public function detail($id)
        {
            $this->render('inc/head');
            $this->render('inc/header');

            $res = $this->eventModel->getEventList();

            // $blog = $res[$id-1];
            
            // print_r($blog);

            $this->render('components/eventdetail', [
                "events" => $this->eventModel->getEventList(),
                "id" => $id,
            ]);

            // echo "detail";
            $this->render('inc/footer');
        }
    }
?>