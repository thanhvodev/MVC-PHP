<?php
	/**
	 * Class Index
	 */
	class Search extends Controller {
		/**
		 * Index constructor.
		 */
		private $productModel;
        private $blogModel;

		public function __construct() {
		    // Import SQL commands
			$this->productModel = $this->loadmodel('Product');
			$this->blogModel = $this->loadModel('Blog');
		}
		
		/**
		 * views/index.php
		 */
		public function index() {
			
		}
	}