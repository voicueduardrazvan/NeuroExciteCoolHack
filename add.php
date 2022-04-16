<?php



function valideazaEmail($email) {
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if (!preg_match($regex, $email)){
			
		return false;
	}
	return true;
}



function valideazaDate($nume, $email, $telefon) {
    
    if (strlen($nume)<1){
			
		return false;
	}
	
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if (!preg_match($regex, $email)){
			
		return false;
	}
	
    $regex = "/^\\s*-?[0-9]{1,10}\\s*$/";
    if (!preg_match($regex,$telefon)){
		return false;
	}	
	
	return true;
}


// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
if(  strlen($nume)>0 && strlen($prenume)>0 && strlen($email)>0
			&& strlen($serviciu)>0 && strlen($parola)>0 && 
				strlen($telefon)>0 && strlen($codpostal)>0 && strlen($tarif)>0    )
{
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$parola = $_POST['parola'];
$telefon = $_POST['telefon'];
$codpostal = $_POST['codpostal'];
$tarif = $_POST['tarif'];
$serviciu = $_POST['serviciu'];



// database insert SQL code
$sql = "INSERT INTO `tbl_utilizatori` (`email`, `parola`, `prenume`, 
										`nume`, `codpostal`, `serviciu`, `tarif`, `telefon`) 
										VALUES ('$email', '$parola', '$prenume', '$nume',
												'$codpostal', '$serviciu', '$tarif', '$telefon')";
												
												
if ( valideazaDate($nume, $email, $telefon)){												
		try {
			 // call the function
			$rs = mysqli_query($con, $sql);
			if($rs)
		{
			include("contCreat.html");
		}
		}

		catch (Exception $e){
			include("eroareCreare.html");
		}

		// insert in database 
		}
else {
	echo '<script>
			alert("Datele introduse sunt inorecte");
			history.go(-1);
			</script>';
}

}

else
{
	echo '<script>
			alert("Toate campurile trebuie sa fie completate");
			history.go(-1);
			</script>';
	
}






?>