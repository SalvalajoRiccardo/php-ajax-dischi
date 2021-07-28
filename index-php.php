<?php 
include 'db.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php foreach ($albums as $item ){ ?>
        <div>
            <h3><?php echo  $item['author'] . ' : ' . $item['title']; ?></h3>
            <h4>Year: <?php echo  $item['year']; ?></h4>
            <img src="<?php echo  $item['poster']; ?>" alt="<?php echo  $item['author'] . ' : ' . $item['title']; ?>">
        </div>
  
    <?php } ?>
    
</body>
</html>