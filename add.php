<?php 
include('database.php');
//get the total of questions
$query = "SELECT * FROM `questions`";
$result = $mysqli->query($query);
$total = $result->num_rows;
if(isset($_POST['submit'])){
    $choices = array();
    $number = $_POST['qnumber'];
    $question = $_POST['question'];
    $choices['1'] = $_POST['choice1'];
    $choices['2'] = $_POST['choice2'];
    $choices['3'] = $_POST['choice3'];
    $choices['4'] = $_POST['choice4'];
    $choices['5'] = $_POST['choice5'];
    $correct = $_POST['correct'];
    //run query
    $query = "INSERT INTO `questions` (question_number,text) VALUES('$number','$question')";
    $inserted = $mysqli->query($query);
    if($inserted){
        foreach($choices as $choice => $value){
            if($value != ''){
                if($correct == $choice){
                    $is_correct = 1;
                }else{
                    $is_correct = 0;
                }
                $query = "INSERT INTO `choices` (question_number,is_correct,text) VALUES('$number','$is_correct','$value')";
                $inserted = $mysqli->query($query);   
                if($inserted){
                    continue;
                } else{
                    die('Error !'.$mysqli->error);
                }
            }
        }
        $msg = "<div class='alert alert-success'>Question added successfully!</div>";
    }else{
        die('Error !'.$mysqli->error);
    }
}
?>
<?php
include('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <h1 class="text-center text-primary">Take The Quiz</h1>
                <hr>
                <h3 class="text-danger text-center">Add New Question</h3>
                <hr>
                <div class="text-center">
                    <a href="index.php" class="text-secondary">Go Home</a>
                </div>
                <hr>
                <?php if(isset($msg)){ echo $msg;}?>
                <section class="questions-box row">
                    <div class="col-md-8 col-md-offset-2">
                       <form action="add.php" method="post">
                            <div class="form-group">
                                <label for="qnumber">Question Number</label>
                                <input type="number" name="qnumber" value="<?php echo $total+1;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="choice1">Choice 1</label>
                                <input type="text" name="choice1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="choice2">Choice 2</label>
                                <input type="text" name="choice2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="choice3">Choice 3</label>
                                <input type="text" name="choice3" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="choice4">Choice 4</label>
                                <input type="text" name="choice4" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="choice5">Choice 5</label>
                                <input type="text" name="choice5" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="correct"> Correct Answer</label>
                                <input type="text" name="correct" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                       </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>