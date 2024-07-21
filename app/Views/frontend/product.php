<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to Product Page</h2>
    <h1>Product Name:<?= $name ?></h1>
    <h2>Prod List</h2>
   <ul>
    <?php foreach($prod_list as $item): ?>
    <li><?= $item; ?> </li>
    <?php endforeach;?>
   </ul> 
    
    
</body>
</html>