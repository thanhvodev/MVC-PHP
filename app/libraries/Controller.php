<?php
	class Controller
	{
		public function loadModel($model)
		{
			require_once '../app/models/' . $model . '.php';
			return new $model();
		}
		
		public function render($view, $data = [])
		{
			if (file_exists('../app/views/' . $view . '.php'))
			{
				require_once '../app/views/' . $view . '.php';
			} else {
				$this->renderError(424);
			}
		}

        public function renderError($codeError = 520, $titleError = "Something has gone wrong")
        {
            $data = [
                'headTitle' => $titleError,
                'cssFile' => 'errors',
                "errorCode" => $codeError
            ];
            die($this->render('errors', $data));
        }
	}