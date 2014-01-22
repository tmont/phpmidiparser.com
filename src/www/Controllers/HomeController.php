<?php

namespace Tmont\PHPMP\Controllers;

use Tmont\Facilius\Controller;

class HomeController extends Controller {

	public function index() {
		return $this->view('index');
	}

}
