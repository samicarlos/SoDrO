<?php

class ListsView extends Lists {

	public function getAllLists($userId){
		return $this->getAll($userId);
	}

	public function getListById($id){
		return $this->getById($id);
	}

	public function getListProductsById($id){
		return $this->getProductsById($id);
	}
	
}