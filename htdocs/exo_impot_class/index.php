<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'impôt sur le revenu</title>
</head>
<style>
    fieldset
    {width:30%;
    border-radius:12px;
    background-color:#ccc;
    margin-left:auto;
    margin-right:auto;
    }
    input
    {
        margin-bottom:12px;
    }
</style>

<body>
    <?php
    require("./models/comptable.php");
    if(isset($_POST["validation"]))
    {
     $monObj = new ComptablePublic($_POST["lenom"],$_POST["revenu"]);

     $test= $monObj->calculImpot();
     echo "<p>".$test."</p>";
    }

    ?>

    <form action="index.php" method="post" >
    <fieldset><legend>coordonnées fiscale</legend>
    <input type="text" name="lenom" maxlength="30" id="lenom" placeholder="votre nom" size="20" /><br>
    <input type="number" name="revenu" id="revenu" step="0.01"  placeholder="votre revenu annuelle"><br>
    <input type="submit" value="calculer" name="validation" id="validation">
    
</fieldset>
</form>
    
</body>
</html>