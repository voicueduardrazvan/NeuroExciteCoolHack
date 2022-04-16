<?php
$conn = mysqli_connect("localhost", "root", "", "db_contact");

if (!$conn) {

    echo "Connection failed!";

}




if (isset($_POST['email']) && isset($_POST['parola'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $parola = validate($_POST['parola']);



        $sql = "SELECT * FROM tbl_utilizatori WHERE email='$email' AND parola='$parola'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['parola'] === $parola) {
					setcookie("username", "George", time() + (20 * 365 * 24 * 60 * 60), "/", NULL);

					
				  

				
				
                include("paginaUtilizator.html");
				

               

               

            }else{
						echo '<script>
			

			
			</script>';
					
            }

        }else{

           	echo '<script>
			alert("User/Parola incorecta");
			history.go(-1);
			</script>';

           

        }

    

}else{

    

    exit();
	
}