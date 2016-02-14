<!DOCTYPE html>
<html>
<head>

    <title>Mason Tan P2 - xkcd Password Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <?php require 'logic.php' ?>
    
</head>
<body>

    <h1>Fruity xkcd Password Generator</h1>
    
    <?php echo $password ?>
    <br><br>
    
    <form action='index.php' method='GET'>
    
        <label for='word_count'>How many words do you want in your fruity password?</label>
        <input type='text' name='word_count'>
        <br>
        
        <input type='checkbox' name='number_check'>
        <label for='number_check'>Check if you want to add a number</label>
        <br>
        
        <input type='checkbox' name='symbol_check'>
        <label for='symbol_check'>Check if you want to add a symbol</label>
        <br>
        
        <input type='submit' value='Generate Password!'>
        <?php echo $error ?>
        
    </form>
    
</body>
</html>