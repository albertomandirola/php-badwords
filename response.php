<?php
// Create variable whose value is the paragraph insert by the user
$paragraph = $_GET['paragraph'];
// Create variable whose value is the bad word insert by the user
$bad_word = $_GET['bad_word'];

// Create variable whose value is the length of the paragraph, take with strlen() function
$lenght_paragraph = strlen($paragraph);

// Create variable whose value is the paragraph with '***' that replace the bad word, thanks by str_replace() function
$censured_paragraph = str_replace($bad_word, '***', $paragraph);

// Create variable whose value is the length of the paragraph, take with strlen() function
$lenght_censured_paragraph = strlen($censured_paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <div>
        <p class="text-white">Paragrafo senza censura: <?php echo $paragraph ?></p>
        <p class="text-white">Lungezza del paragrafo: <?php echo $lenght_paragraph ?></p>
    </div>
    <div>
        <p class="text-white">Paragrafo censurato: <?php echo $censured_paragraph ?></p>
        <p class="text-white">Lungezza del paragrafo censurato: <?php echo $lenght_censured_paragraph ?></p>
    </div>
</body>
</html>