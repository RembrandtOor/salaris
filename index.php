<?php
    echo 
    '<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Urencalculator</title>
    </head>

    <body>
        <header style="background-color: #00000033;">
            <h1>Salaris calculator</h1>
            <h4>Kies je supermarkt:</h4>
            <img class="headerlogo" id="ah" onclick="ah()" src="ahlogo.png">
            <img class="headerlogo" id="jumbo" onclick="jumbo()" src="jumbologo.png">
            <img class="headerlogo" id="lidl" onclick="lidl()" src="lidllogo.png">
            <img class="headerlogo" id="plus" onclick="plus()" src="pluslogo.png">
        </header>
        
        

        <form id="form" action="index.php" method="POST" style="opacity: 0;">
            <h4>Gebruiksaanwijzing</h4>
            <p>
                Vul bij elke dag in hoeveel uur je hebt gewerkt. Heb je 4:30 uur gewerkt, vul je 4.5 in. Heb je 3:45 gewerkt, vul dan 3.75 in. Vergeet niet je uurloon in te vullen!
            </p>
            <table>
                <tr>
                    <th></th>
                    <th>Maandag</th>
                    <th>Dinsdag</th>
                    <th>Woensdag</th>
                    <th>Donderdag</th>
                    <th>Vrijdag</th>
                    <th>Zaterdag</th>
                    <th>Zondag</th>
                </tr>

                <tr>
                    <td>Week 1</td>
                    <td><input type="text" name="mo1"></td>
                    <td><input type="text" name="tu1"></td>
                    <td><input type="text" name="we1"></td>
                    <td><input type="text" name="th1"></td>
                    <td><input type="text" name="fr1"></td>
                    <td><input type="text" name="sa1"></td>
                    <td><input type="text" name="su1"></td>
                </tr>

                <tr>
                    <td>Week 2</td>
                    <td><input type="text" name="mo2"></td>
                    <td><input type="text" name="tu2"></td>
                    <td><input type="text" name="we2"></td>
                    <td><input type="text" name="th2"></td>
                    <td><input type="text" name="fr2"></td>
                    <td><input type="text" name="sa2"></td>
                    <td><input type="text" name="su2"></td>
                </tr>

                <tr>
                    <td>Week 3</td>
                    <td><input type="text" name="mo3"></td>
                    <td><input type="text" name="tu3"></td>
                    <td><input type="text" name="we3"></td>
                    <td><input type="text" name="th3"></td>
                    <td><input type="text" name="fr3"></td>
                    <td><input type="text" name="sa3"></td>
                    <td><input type="text" name="su3"></td>
                </tr>

                <tr>
                    <td>Week 4</td>
                    <td><input type="text" name="mo4"></td>
                    <td><input type="text" name="tu4"></td>
                    <td><input type="text" name="we4"></td>
                    <td><input type="text" name="th4"></td>
                    <td><input type="text" name="fr4"></td>
                    <td><input type="text" name="sa4"></td>
                    <td><input type="text" name="su4"></td>
                </tr>
            </table>
        
            Uurloon:
            <input type="text" name="salary">

            <input type="submit" value="bereken">
            
        </form>
        
    </body>
    <script src="script.js"></script>
</html>';

if (isset($_POST['mo1'])) {  $mo1 = $_POST['mo1'];} else { $mo1 = 0; }
if (isset($_POST['mo2'])) {  $mo2 = $_POST['mo2'];} else { $mo2 = 0; }
if (isset($_POST['mo3'])) {  $mo3 = $_POST['mo3'];} else { $mo3 = 0; }
if (isset($_POST['mo4'])) {  $mo4 = $_POST['mo4'];} else { $mo4 = 0; }

if (isset($_POST['tu1'])) {  $tu1 = $_POST['tu1'];} else { $tu1 = 0; }
if (isset($_POST['tu2'])) {  $tu2 = $_POST['tu2'];} else { $tu2 = 0; }
if (isset($_POST['tu3'])) {  $tu3 = $_POST['tu3'];} else { $tu3 = 0; }
if (isset($_POST['tu4'])) {  $tu4 = $_POST['tu4'];} else { $tu4 = 0; }

if (isset($_POST['we1'])) {  $we1 = $_POST['we1'];} else { $we1 = 0; }
if (isset($_POST['we2'])) {  $we2 = $_POST['we2'];} else { $we2 = 0; }
if (isset($_POST['we3'])) {  $we3 = $_POST['we3'];} else { $we3 = 0; }
if (isset($_POST['we4'])) {  $we4 = $_POST['we4'];} else { $we4 = 0; }

if (isset($_POST['th1'])) {  $th1 = $_POST['th1'];} else { $th1 = 0; }
if (isset($_POST['th2'])) {  $th2 = $_POST['th2'];} else { $th2 = 0; }
if (isset($_POST['th3'])) {  $th3 = $_POST['th3'];} else { $th3 = 0; }
if (isset($_POST['th4'])) {  $th4 = $_POST['th4'];} else { $th4 = 0; }

if (isset($_POST['fr1'])) {  $fr1 = $_POST['fr1'];} else { $fr1 = 0; }
if (isset($_POST['fr2'])) {  $fr2 = $_POST['fr2'];} else { $fr2 = 0; }
if (isset($_POST['fr3'])) {  $fr3 = $_POST['fr3'];} else { $fr3 = 0; }
if (isset($_POST['fr4'])) {  $fr4 = $_POST['fr4'];} else { $fr4 = 0; }

if (isset($_POST['sa1'])) {  $sa1 = $_POST['sa1'];} else { $sa1 = 0; }
if (isset($_POST['sa2'])) {  $sa2 = $_POST['sa2'];} else { $sa2 = 0; }
if (isset($_POST['sa3'])) {  $sa3 = $_POST['sa3'];} else { $sa3 = 0; }
if (isset($_POST['sa4'])) {  $sa4 = $_POST['sa4'];} else { $sa4 = 0; }

if (isset($_POST['su1'])) {  $su1 = $_POST['su1'];} else { $su1 = 0; }
if (isset($_POST['su2'])) {  $su2 = $_POST['su2'];} else { $su2 = 0; }
if (isset($_POST['su3'])) {  $su3 = $_POST['su3'];} else { $su3 = 0; }
if (isset($_POST['su4'])) {  $su4 = $_POST['su4'];} else { $su4 = 0; }


$mo1 = (int)$mo1;
$mo2 = (int)$mo2;
$mo3 = (int)$mo3;
$mo4 = (int)$mo4;

$tu1 = (int)$tu1;
$tu2 = (int)$tu2;
$tu3 = (int)$tu3;
$tu4 = (int)$tu4;

$we1 = (int)$we1;
$we2 = (int)$we2;
$we3 = (int)$we3;
$we4 = (int)$we4;

$th1 = (int)$th1;
$th2 = (int)$th2;
$th3 = (int)$th3;
$th4 = (int)$th4;

$fr1 = (int)$fr1;
$fr2 = (int)$fr2;
$fr3 = (int)$fr3;
$fr4 = (int)$fr4;

$sa1 = (int)$sa1;
$sa2 = (int)$sa2;
$sa3 = (int)$sa3;
$sa4 = (int)$sa4;

$su1 = (int)$su1;
$su2 = (int)$su2;
$su3 = (int)$su3;
$su4 = (int)$su4;


$su1 = $su1 * 2;
$su2 = $su2 * 2;
$su3 = $su3 * 2;
$su4 = $su4 * 2;

$total = 0;

$total += $mo1;
$total += $mo2;
$total += $mo3;
$total += $mo4;

$total += $tu1;
$total += $tu2;
$total += $tu3;
$total += $tu4;

$total += $we1;
$total += $we2;
$total += $we3;
$total += $we4;

$total += $th1;
$total += $th2;
$total += $th3;
$total += $th4;

$total += $fr1;
$total += $fr2;
$total += $fr3;
$total += $fr4;

$total += $sa1;
$total += $sa2;
$total += $sa3;
$total += $sa4;

$total += $su1;
$total += $su2;
$total += $su3;
$total += $su4;


$sal = $_POST['salary'];

$totalSalary = $total * $sal;


$totalSalary =  round($totalSalary, 2);
echo 'Je hebt ' . $total . ' uur gewerkt deze maand' . '<br>';
echo 'Je totale maandsalaris is €' . $totalSalary;


?>