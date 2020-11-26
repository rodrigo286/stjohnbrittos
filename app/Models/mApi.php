<?php namespace App\Models;

use CodeIgniter\Model;

class mApi extends Model
{
	var $productDb = 'product';
	var $categoryDb = 'category';

	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}

	public function getAllCategorys()
	{
		if($categorys = $this->db->table($this->categoryDb)->get()->getResultArray())
		{
			return json_encode($categorys);
		}

		return false;
	}

	public function getAllProducts()
	{
		if($products = $this->db->table($this->productDb)->get()->getResultArray())
		{
			return json_encode($products);
		}

		return false;
	}
}