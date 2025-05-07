<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .flex{
        display: flex;
  
    }
    .huruf{
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            text-align: center;
            align-content: center;
    }
</style>
<body>

<div class="container">

<?php 
for ($i = 10; $i >= 1; $i--){
    echo '<div class = "flex">';
    for ($j = 1; $j <= $i; $j++){
        echo "<div class='huruf'> $j </div>";
  
    }
    echo '</div>';
}
?>
</div>

</body>
</html>