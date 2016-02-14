<?php
    
    $word_list = Array('apple','banana','blackberry','blueberry','cherry','coconut','cranberry','grape','kiwi','lemon','lime','mango','melon','orange','peach','pear','pineapple','plum','rasberry','strawberry','watermelon');
    $password = "";
    $error = "";
    
    if ($_GET) {
        
        // Check if the word count is between 2 and 9 in order to generate password
        if ($_GET['word_count'] >= 2 AND  $_GET['word_count'] <= 9) {
            
            // Get an array of random keys in the word list based on the word count
            $password_list = array_rand($word_list, $_GET['word_count']);
            
        }
        
        else {
        
            // Check if the word count is not an empty value (random char or number not between 2 and 9)
            if (!($_GET['word_count'] == '')) {
                
                $error = "Please enter a number between 2 and 9! Generating a random 4 word password.";
            
            }
            
            // Get an array of 4 random keys in the word list
            $password_list = array_rand($word_list, 4);
            
        }
        
        // Create password from the array of random keys
        foreach ($password_list as $key => $value) {
            
            $password .= $word_list[$value]." ";
            
        }
        
        if (isset($_GET['number_check'])) {
            
            // Add a number between 0 and 9 to the password
            $password .= rand(0, 9);
            
        }
        
        if (isset($_GET['symbol_check'])) {
            
            // Add an '@' symbol to the password
            $password .= '@';
            
        }
        
    }
    else {
        
        // Get an array of 4 random keys in the word list
        $password_list = array_rand($word_list, 4);
        
        // Create password from the array of random keys
        foreach ($password_list as $key => $value) {
            
            $password .= $word_list[$value]." ";
        
        }
        
    }
    
?>