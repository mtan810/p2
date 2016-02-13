<!DOCTYPE html>
<html>
<head>
    <title>Mason Tan P2 - xkcd Password Generator</title>
    <?php require 'logic.php' ?>
</head>
<body>

    <h1>xkcd Password Generator</h1>
    
    <form action='index.php' method='GET'>
    
        <label for='word_count'>How many words do you want in your password?</label>
        <input type='text' name='word_count'>
        <br>
        
        <input type='checkbox' name='number_check'>
        <label for='number_check'>Check if you want to add a number</label>
        <br>
        
        <input type='checkbox' name='symbol_check'>
        <label for='symbol_check'>Check if you want to add a symbol</label>
        <br>
        
        <input type='submit' value='Generate Password!'>
        
    </form>
    
</body>
</html>