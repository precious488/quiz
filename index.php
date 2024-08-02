<?php
include 'array.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
<div class="main">
    

    <form action="score.php"method="post">
        <h1>Quiz application
        </h1>
        <?php foreach($questions as $index =>$questions):?>
            <p>question<?php echo ((int)$index+1);?>:<?php echo ($questions['question'])?></p>
                <?php foreach($questions['options'] as $optionIndex => $option):?>
                    <label>
                        <input type="radio" name="<?php echo $index?>" value="<?php echo $option;?>" required><?php echo $option;?>
                    </label><br>
                <?php endforeach;?>
             <?php endforeach;?>
            <br>
            <br>
            <button type="submit">submit</button>
    </form>
   
            

             
</div>
</body>
</html>