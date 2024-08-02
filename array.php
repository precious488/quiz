<?php
$questions= array(
    array(
        'question' => 'what is the capital of france',
        'options'=> array('london', 'Berlin', 'paris', 'mardrid'),
        'correctanswer'=> 'paris',
    ),
    array(
        'question' => 'what is the capital of cameroon',
        'options'=> array('Bamenda', 'Yaounde', 'Douala', 'Baffousam'),
         'correctanswer'=> 'Yaounde',
    ),
    array(
        'question' => 'which of the following is a fruit',
        'options'=> array('man', 'apple', 'paris', 'mardrid'),
        'correctanswer'=> 'appple',
    ),
    array(
        'question' => 'which of the following is not a planet',
        'options'=> array('Earth', 'mars', 'jupiter', 'mardrid'),
          'correctanswer'=> 'mardrid',
    ),
    array(
        'question' => 'which of the following is not a pragraming language',
        'options'=> array('CSS', 'PHP', 'C', 'java'),
        'correctanswer'=> 'CSS',
      ),

);
   $score=1;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   
   //var_dump($_POST);


   $answers = array_values($_POST);
  foreach($questions as $key =>$question){
    if(in_array($question['correctanswer'], $answers)){
        $score++;

  }    
}  

  //echo $score;
  $total = count($questions);
  $correct = $score;
  $percent = (int)$correct/$total;
  $percen =$percent*100;
}

//your answer:<?php echo $answers[$index] ?>


