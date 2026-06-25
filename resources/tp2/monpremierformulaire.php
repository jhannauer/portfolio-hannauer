<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<p>Bonjour ".$_POST['prenom']."</p> voici un récapitulatif de vos informations."; ?>    
</body>
</html> 