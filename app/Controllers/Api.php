<?php namespace App\Controllers;

use App\Models\mApi;

class Api extends BaseController
{
	public function categorys()
	{
		if(!$modelApi = new mApi())
			return false;

		if($categorys = $modelApi->getAllCategorys())
		{
			echo $categorys;
		}
	}

	public function debugCategorys()
	{
		if(!$modelApi = new mApi())
			return false;

		if($categorys = $modelApi->getAllCategorys())
		{
			echo '<pre>';
			print_r($categorys);
			echo '</pre>';
		}
	}

	public function products()
	{
		if(!$modelApi = new mApi())
			return false;

		if($products = $modelApi->getAllProducts())
		{
			echo $products;
		}
	}

	public function debugProducts()
	{
		if(!$modelApi = new mApi())
			return false;

		if($products = $modelApi->getAllProducts())
		{
			echo '<pre>';
			print_r($products);
			echo '</pre>';
		}
	}

	public function ola()
	{
		echo 'O jogo...<br/><br/>';
		echo 'Você perdeu !';
	}
}
