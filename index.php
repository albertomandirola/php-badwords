<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
            <form action="response.php" method="GET">
                <div>
                    <label for="paragraph"> Paragrafo: </label>
                    <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="bad_word">Parola da censurare:</label>
                    <input type="text" name="bad_word" id="bad_word">
                </div>
                <div>
                    <button type="submit">Censura</button>
                </div>
            </form>
        
    
</body>
</html>