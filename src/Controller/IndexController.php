<?php
/**
 * Created by PhpStorm.
 * User: olegkorolenko
 * Date: 11/11/18
 * Time: 4:16 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController {
	public function index(){

		return new Response('Hello');
	}

}