<?php

	// session_start();
	// $_SESSION['cart'] = [];

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
		}
		
		/**
		 * views/index.php
		 */
		public function index() {
			$data = [
                'page' => 'homepage',
				// 'cart' => $_SESSION['cart'],
				'fooddeals' => $this->productModel->getDealList(1),
				'equipmentdeals' => $this->productModel->getDealList(2),
				'blogs' => $this->blogModel->getBlogList(),
			];
			
			$this->render('index', $data);
		}
	}