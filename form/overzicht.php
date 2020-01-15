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
   
    </style>
<head>

<body>
        <h1>Ingevulde Gegevens / verstuurde Emails</h1>
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