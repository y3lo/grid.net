<?php

class Router{
	private $uri_path;
	private $module_path = Core::MODULES_PATH.'/index.php';
	private $view_path = Core::VIEWS_PATH.'/index.php';
	private $pages_data = [];

	public function __construct($data){
		$this->uri_path = $_SERVER['REQUEST_URI'];
		if($this->uri_path != '/'){
			$url_path = parse_url($this->uri_path, PHP_URL_PATH);
			$uri_parts = explode('/', trim($url_path, ' /'));
			foreach($data as $key => $pages){
				echo $uri_parts[0];
				if($key == $uri_parts[0]){
					$this->module_path = Core::MODULES_PATH.'/'.$key.'.php';
					$this->view_path = Core::VIEWS_PATH.'/'.$key.'.php';
				}else{
					$this->module_path = Core::MODULES_PATH.'/index.php';
					$this->view_path = Core::VIEWS_PATH.'/index.php';
					header('Location: /');
				}
			}
		}
		$this->load_module();
		$this->load_view();
	}
	private function load_module(){
		require $this->module_path;
	}
	private function load_view(){
		require $this->view_path;
	}
}