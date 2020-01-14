<?php
$bedrijfErr = $nameErr = $telefoonErr = $emailErr = $berichtErr = "";
$bedrijf = $naam = $telefoon = $email = $bericht = $succes = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["bedrijf"])) {
      $bedrijfErr = "";
    } else {
      $bericht = test_input($_POST["bedrijf"]);
    }

    if (empty($_POST["naam"])) {
      $nameErr = "*Naam is Verplicht";
    } else {
      $naam = test_input($_POST["naam"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {
        $nameErr = "*Naam alleen maar letters en witte regels";
      }
    }

    if(empty($_POST["telefoon"])) {
      $telefoonErr = "*Telefoon is Verplicht";
    } else {
      $telefoon = test_input($_POST["telefoon"]);
      if(!preg_match("'^(([\+]([\d]{2,}))([0-9\.\-\/\s]{5,})|([0-9\.\-\/\s]{5,}))*$'",$telefoon)) {
        $telefoonErr = "*Niet geldige Nummer";
      }
    }

    if(empty($_POST["email"])) {
      $emailErr = "*Email is verplicht";
    } else {
      $email = test_input($_POST["email"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*Niet geldige email";
      }
    }

    if(empty($_POST["bericht"])) {
      $berichtErr = "";
    } else {
      $bericht = test_input($_POST["bericht"]);
    }

    if($nameErr == '' and $telefoonErr == '' and $emailErr == '') {
      $bericht_body = '';
      unset($_POST['submit']);
      foreach($_POST as $key => $value) {
        $bericht_body .= "$key: $value\n";
      }

      $to = "batucelik7676@gmail.com,info@qabana.nl,$email";
      $subject = 'Dankjewel voor je email';
      $berichtfrom =  nl2br("Naam: " .$naam. "\n". "E-mail: " .$email. "\n". "Telefoon: " .$telefoon. "\n". "Bericht: ". "\n\n".$bericht);
      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: "' . $naam . '" ' . "\r\n" .
                  'Reply-To: '.  $email . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
      
      if(mail($to, $subject, $berichtfrom, $headers)) {
        $succes =  nl2br ("Het is verzonden! \n We zullen zo snel mogelijk contact opnemen");
        $bedrijf = $naam = $telefoon = $email = $bericht = "";
      } else {
        echo "FAIL";
      }  

        $con = new mysqli("localhost","root","","qabana") or die(mysqli_error());

        $bedrijf = $con->real_escape_string($_POST['bedrijf']);
        $naam = $con->real_escape_string($_POST['naam']);
        $telefoon = $con->real_escape_string($_POST['telefoon']);
        $email = $con->real_escape_string($_POST['email']);
        $bericht = $con->real_escape_string($_POST['bericht']);
         //query to insert the variable data into the database
        $sql="INSERT INTO form (bedrijf, naam, telefoon, email, bericht) VALUES ('".$bedrijf."','".$naam."', '".$telefoon."', '".$email."', '".$bericht."')";
         //Execute the query and returning a message
        if(!$result = $con->query($sql)){
        die('Error occured [' . $conn->error . ']');
        }
}  

      }
      


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}