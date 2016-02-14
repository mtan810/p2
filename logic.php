<?php
    
    $word_list = Array('apple','banana','blackberry','blueberry','cherry','coconut','cranberry','grape','kiwi','lemon','lime','mango','melon','orange','peach','pear','pineapple','plum','rasberry','strawberry','watermelon');
    
    $password = "";
    $error = "";
    
    // Check if the word count is between 2 and 9 in order to generate password
    if ($_GET['word_count'] >= 2 AND  $_GET['word_count'] <= 9) {
        
        // Get an array of random keys in the word list
        $password_list = array_rand($word_list, $_GET['word_count']);
        
        // Create password from the array of random keys
        foreach ($password_list as $key => $value) {
            $password .= $word_list[$value]." ";
        }
        
    }
    else {
        $error = "Please enter a number between 2 and 9!";
    }
    
?>