<?php
	/**
	 * Class Index
	 */
	class Index extends Controller {
		/**
		 * Index constructor.
		 */
		private $productModel;
		public function __construct() {
		    // Import SQL commands

			$this->productModel = $this->loadmodel('Product');
			$this->blogModel = $this->loadModel('Blog');
			$this->eventModel = $this->loadModel('Event');
		}
		
		/**
		 * views/index.php
		 */
		public function index() {
			$data = [
                'page' => 'homepage',
				'fooddeals' => $this->productModel->getDealList(1),
				'equipmentdeals' => $this->productModel->getDealList(2),
				'blogs' => $this->blogModel->getBlogList(),
				'events' => $this->eventModel->getEventList()
			];
			
			$this->render('index', $data);
		}
	}