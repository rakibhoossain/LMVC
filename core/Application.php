<?php
namespace App\core;
/**
* Class Application
*
* @author Rakib Hossain <rakibhoossain@gmail.com>
* @package App\core
*
*/

class Application
{
	public Router $router;
	public Request $request;
	public function __construct()
	{
		$this->request = new Request();
		$this->router = new Router($this->request);
	}

	public function run()
	{
		$this->router->resolve();
	}
}