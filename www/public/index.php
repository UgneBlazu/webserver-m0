<h1>Webbservern fungerar!</h1>
<p><strong>Denna sida (index.php) skall bytas ut.</strong></p>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Quiz</h1>
<form action="result.php" method="post">
    <label>Om peter har 5 äpplen, och tappar två, hur många har han kvar? test ver<br>    
        <input type="radio" name="qOne" value="sju">7<br>
        <input type="radio" name="qOne" value="tva">2<br>
        <input type="radio" name="qOne" value="tre">3<br><br>
    </label>
    <label>Viket tal är störst: 3, 5 eller 6?<br>  
        <input type="radio" name="qTwo" value="three">3<br>
        <input type="radio" name="qTwo" value="five">5<br>
        <input type="radio" name="qTwo" value="six">6<br><br>
    </label>
    <input type="submit" value="Skicka" />
</form>
</body>
</html>