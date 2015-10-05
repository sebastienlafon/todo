<?php

Class Todo{

	public function __construct(){
		require_once(dirApp.'app/models/todo/Todo.php');
	}
	
	public function liste(){

		$modelTodo = new Model_Todo();
		$listeTaches = $modelTodo->getList();
		include_once(dirApp.'app/views/todo/Liste.php');
	}
}

?>