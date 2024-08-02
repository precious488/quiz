<?php
include 'array.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="score.css">
    <style>
    .result{
    background-color:whitesmoke;
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    width:70%;
    margin:50px;
    padding:10px
    
    

}

        button{
    
    background-color: blue;
    align-items: center;
    width: 100px;
    height:30px;
    
    
    
}
    button a{
        text-decoration: none;
        font-weight:bold;
        color:black;
     
    }
    .btn{
        display:flex;
        justify-content:center;
        align-items: center;
    }
    .par{
        font-weight:bold;
    }
        
    </style
</head>

<body>
    <div class="main4">
        <h1>quiz results</h1>
        <?php foreach($questions as $index => $questions):?>
        <div class="result">
            <p class="par">qestion:<?php echo $index +1?>:<?php echo $questions['question']?></p>
            <p>your answer: <?php echo $answers[$index]?></p>
            <p>correct answer: <?php echo $questions['correctanswer']?></p>
            
        </div>
        <?php endforeach ?>
        <?php
      
      $total = 5;//count($questions);
      $correct = $score;
      $percent = (int)$correct/$total;
      $percen =$percent*100;
      ?>
      <div class="result">
      <p>total questions:<?php echo $total;?><br> </p> 
      <p>correct answers:<?php echo $correct;?><br></p>
      <p>score:<?php echo $percen;?>%<br></p>
 
      </div>
      
    
<div class="btn"> <button> <a href="index.php"">Try again</a></button></div>
   
    </div>

</body>

</html>