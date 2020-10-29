<?php
namespace App\core;
/**
* Class Request
*
* @author Rakib Hossain <rakibhoossain@gmail.com>
* @package App\core
*
*/

class Request
{
	public function getPath()
	{
		$path = $_SERVER['REQUEST_URI']?? '/';

		$position = strpos($path, '?');
		if($position === false){
			return $path;
		}

		return substr($path, 0, $position);
	}

	public function getMethod(){
		return strtolower($_SERVER['REQUEST_METHOD']);
	}

}