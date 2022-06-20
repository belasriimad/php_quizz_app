<?php 
include('header.php');
include('database.php');
//get the total of questions
$query = 'SELECT * FROM `questions`';
$result = $mysqli->query($query);
$total = $result->num_rows;
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <h1 class="text-center text-primary">Take The Quiz</h1>
                <hr>
                <h3 class="text-danger text-center">Test Your Knowledge</h3>
                <hr>
                <section class="questions-box row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="lead"><span class="label label-primary">Qestions : <?php echo $total;?></span></h4>
                        <h4 class="lead"><span class="label label-success">Type : With Choices</h4>
                        <h4 class="lead"><span class="label label-warning">Time : <?php echo $total * .5;?> Minutes</h4>
                    </div>
                </section>
                <hr>
                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-3"> 
                         <a href="takeAgain.php" class="btn btn-default form-control">Start</a>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-3"> 
                         <a href="add.php" class="btn btn-default form-control">Add New Question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>