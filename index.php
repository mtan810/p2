<!DOCTYPE html>
<html>
<head>

    <title>Mason Tan P2 - xkcd Password Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <?php require 'logic.php' ?>
    
</head>
<body>

    <h1>Fruity xkcd Password Generator</h1>
    <br>
    
    <h2> <?php echo $password ?> </h2>
    <br>
    
    <form class='settings' action='/' method='GET'>
    
        <br>
        <div class='word_count_setting'>
            <label for='word_count'>How many words do you want in your fruity password?</label>
            <br>
            <label for='word_count'>(Minimum:2, Maximum:9, Default:4)</label>
            <input type='text' name='word_count' id='word_count' maxlength='1' value='<?php if(isset($_GET['word_count'])) echo $_GET['word_count'] ?>'>
        </div>
        <br>
        
        <input type='checkbox' name='number_check' id='number_check' <?php if(isset($_GET['number_check'])) echo 'checked'; ?>>
        <label for='number_check'>Check if you want to add a number</label>
        <br>
        
        <input type='checkbox' name='symbol_check' id='symbol_check' <?php if(isset($_GET['symbol_check'])) echo 'checked'; ?>>
        <label for='symbol_check'>Check if you want to add a symbol</label>
        <br>
        
        <br>
        <input type='submit' class='btn btn-success' value='Generate Password!'>
        <br>
        
        <br>
        <?php echo $error ?>
        
    </form>

</body>
</html>