<?php
include('database.php');

// get seletced questions
$number = (int)$_GET['n'];
$query = 'SELECT * FROM `questions` WHERE  question_number ='.$number;
$result = $mysqli->query($query);
$question = $result->fetch_assoc();
//get question seletced choices
$query = 'SELECT * FROM `choices` WHERE  question_number ='.$number;
$choices = $mysqli->query($query);
//get the total of questions
$query = 'SELECT * FROM `questions`';
$result = $mysqli->query($query);
$total = $result->num_rows;
?>
<?php 
session_start();
include('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <h1 class="text-center text-primary">Fast & Easy Quiz</h1>
                <hr>
                <h3 class="text-danger questionsNumber">Question <?php echo $question['question_number'];?> From <?php echo $total;?></h3>
                <hr>
                <form action="process.php" method="post">
                    <section class="questions-box row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="text-default"><?php echo $question['text'];?></h4>
                          <?php while($row = $choices->fetch_assoc()):?>
                             <input type="radio" value="<?php echo $row['id'];?>" name="choice"> <?php echo $row['text'];?><br>
                          <?php endwhile;?>
                          <input type="hidden" name="number" value="<?php echo $number;?>">
                        </div>
                    </section>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-3"> 
                            <button type="submit"  class="btn btn-success form-control">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>