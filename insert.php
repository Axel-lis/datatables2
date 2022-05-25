<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO users (first_name, last_name, location, adress, image) 
			VALUES (:first_name, :last_name, :location, :adress, :image)
		");
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':location'	    =>	$_POST["location"],
				':adress'	    =>	$_POST["adress"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Se ha insertado un nuevo usuario. ';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE users 
			SET first_name = :first_name, last_name = :last_name, location = :location, adress = :adress, image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':location'	    =>	$_POST["location"],
				':adress'	    =>	$_POST["adress"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Datos Actualizados.';
		}
	}
}

?>