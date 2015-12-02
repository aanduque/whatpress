<?php

class WhatPress {
  
  public $name = "WhatPress";
  public $desc = "Discover the perfect plugin for your needs!";
  public $version = "0.0.1";
  public $questions = array();
  
  /**
   * Runs when instanciated
   */
  function __construct() {} // end construct;
  
  /**
   * Adds questions to the queue
   * @param  array   $options Options of each field to be added
   * @return boolean Always return true
   */
  public function addQuestion($options) {
    
    // Add this new question to our database
    $this->questions[] = $options;
    
    // return true
    return true;
    
  } // end addQuestion;
  
  /**
   * Print all the questions added to the code
   */
  public function printQuestions() {
    
    // Loop questions
    foreach($this->questions as $question) {
      
      // Check for type
      if ($question['type'] == 'radio') include "views/radio.php";
      
      // if it is a textareas
      else if ($question['type'] == 'textarea') include "views/textarea.php";
      
      // For every other normal input, get the input template
      else include "views/input.php";
      
    } // end foreach;
    
  } // end printQuestions;
  
} // end WhatPress;