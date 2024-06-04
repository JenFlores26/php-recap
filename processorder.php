<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Order Result</title>
</head>
<body>
    <h2>Order Result</h2>
    <?php echo '<p>Order processes</p>'; 
        $tireqty = $_POST['tireqty'];
        echo htmlspecialchars($tireqty).' tires<br />';
   
    
    ?>
</body>
</html>