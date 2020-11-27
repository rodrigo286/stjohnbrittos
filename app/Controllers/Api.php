<?php namespace App\Controllers;

header("Access-Control-Allow-Origin: *");

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

	public function categoryById($id)
	{
		if(!$modelApi = new mApi())
			return false;

		if($category = $modelApi->getCatById($id))
		{
			echo $category;
		}
	}

	public function debugCategory($id)
	{
		if(!$modelApi = new mApi())
			return false;

		if($category = $modelApi->getCatById($id))
		{
			echo '<pre>';
			print_r($category);
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

	public function productsByCat($id)
	{
		if(!$modelApi = new mApi())
			return false;

		if($products = $modelApi->getProductsByCat($id))
		{
			echo $products;
		}
	}

	public function debugProductsByCat($id)
	{
		if(!$modelApi = new mApi())
			return false;

		if($products = $modelApi->getProductsByCat($id))
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
