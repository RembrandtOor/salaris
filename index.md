<html lang="nl">
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
</html>
