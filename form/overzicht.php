<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../inlog/inloggen.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ingevulde gegevens/vertuurde mail</title>
    <style>
    @font-face {
    font-family: Gothambold;
    src: url("../vendor/font/GothamNarrow-Bold.otf");
    }

    @font-face {
    font-family: GothamMedium;
    src: url("../vendor/font/GothamNarrow-Medium.otf");
    }

    body {
        background-color: #008C9A;
    }

    table {
        width:auto;
        border-spacing: 15px; 
        color: #fff;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
    }

    th {
        font-family: Gothambold;
    }

    td {
        padding-right: -2em;
    }

    h1 {
        font-family: GothamMedium; 
        text-align: center;
        margin-bottom: 1em;
    }

    .button {
	    text-decoration: none;
	    float: right;
        padding: 12px;
        margin: 15px;
        color: white;
        width: 50px;
        background-color: black;
        transition: width .35s;
        -webkit-transition: width .35s;
        overflow: hidden;
        font-family: GothamMedium;
        color: #F8EF5F;
    }

    a:hover {
        width: 100px;
    }

    a:hover .logout{
        opacity: .9;
    }

    a {
        text-decoration: none;
    }
   
    </style>
<head>

<body>
        <h1>Ingevulde Gegevens / verstuurde Emails</h1>
        <div class="uitloggen">
            <a class="button" href="../inlog/logout.php">Logout</a>
        </div>
        
<table>
    <tr>
        <th class="ths">id</th>
        <td><th class="ths">bedrijf</th></td>
        <td><th class="ths">naam</th></td>
        <td><th class="ths">telefoon</th></td>
        <td><th class="ths">email</th></td>
        <td><th class="ths">bericht</th></td>
    </tr>
    <?php 
    include_once('connection.php');

    $sql = "SELECT * FROM form";
    $result = $conn-> query($sql);
    
    if($result->num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["id"] ."<td><td>". $row["bedrijf"] ."<td><td>". $row["naam"] ."<td><td>". $row["telefoon"] .
        "<td><td>". $row["email"] .    "<td><td>". $row["bericht"] ."<tr><td>";
    }
    echo "</table>";
    } else {
        echo "geen resultaten";
    }

    $conn-> close();
    ?>  
</table>


</body>
</html>