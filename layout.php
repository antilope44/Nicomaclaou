<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>zazoutatoo</title>

</head>

<body>
    <header class="header">
        <h1>Nicomaclaou</h1>
    </header>
    <nav class="navbar">
        
        <button><a href="index.php?route=home">Home</a></button>
       
        <button><a href="index.php?route=carrousel">carrousel</a></button>
        
        <button><a href="index.php?route=form">form</a></button>
       
        <button><a href="index.php?route=mozaike">mosaike</a></button>
      
        <button><a href="index.php?route=bio">bio</a></button>
      
        <a href="index.php?route=notfound">notfound</a>
       
    </nav> 

    <?php require 'router.php'?> 

    <footer class="footer">

    </footer>
    <script src="JS/work.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>