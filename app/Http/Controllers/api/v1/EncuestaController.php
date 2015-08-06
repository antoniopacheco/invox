<?php

namespace App\Http\Controllers\api\v1;

class EncuestaController extends BaseController{

	public function hola(){
		return $this->response->error('This is an error.', 404);
	}
}
?>