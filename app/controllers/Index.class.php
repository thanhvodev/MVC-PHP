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
		}
		
		/**
		 * views/index.php
		 */
		public function index() {
			$data = [
                'page' => 'homepage',
				'fooddeals' => $this->productModel->getDealList(1),
				'equipmentdeals' => $this->productModel->getDealList(2),
			];
			
			$this->render('index', $data);
		}
	}