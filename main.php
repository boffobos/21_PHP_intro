<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo $style;?>>
    <title>Bussines card page</title>
</head>
<body>
    <div class="container">
        <?php include 'header.inc.php'?>
        <main>
            <div class="image">
               <?php echo '<img src="assets/images.jpg" alt="avatar_airbender">'; ?> 
            </div>
            <div class="about">
                <p> Моё имя <?php 
                echo $name, ' ', $surname; 
                ?>
                </p> 
                <p> Я из города 
                <?php 
                echo $city;
                 ?></p>
                 <p>Мне <?php echo $age;?> лет</p>
                 <p>В PHP мы изучили переменные, операции с ними, типы данных</p>
                 <p>Типы данных в PHP: 
                    <?php 
                        include 'knowledge.inc.php';
                        echo $integer, ', ', $double, ', ', $string, ', ', $array, ', ', $object, ', ', $boolean, ', ', $resourse, ', ', $null, '.', '<br>';
                        echo "Эти данные загружены из файла <br> $path";
                    ?> 
                 </p>
                 <div class="knowledge">
                     <?php 
                        include 'knowledge.inc.php'; 
                        echo "Сумма $a и $b равна $c", '<br>';
                        echo $result;
                     ?>
                 </div>
                 <div class="bio">
                    <?php
                        include 'text.inc.php';
                        echo $p;
                    ?>
                 </div>
            </div>
        </main>    
        <?php include 'footer.inc.php'; ?>
    </div>
</body>
</html>