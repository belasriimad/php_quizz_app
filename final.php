<?php 
include('header.php');
session_start();
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <h1 class="text-center text-primary">Fast & Easy Quiz</h1>
                <hr>
                <h3 class="text-danger text-center">The End</h3>
                <hr>
                <section class="questions-box row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="lead">You Have Finished The Quiz</p>
                        <p class="lead">Your Score  : 
                            <?php 
                                echo $_SESSION['score'];
                            ?>
                        </p>
                    </div>
                </section>
                <hr>
                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-3"> 
                         <a href="takeAgain.php" class="btn btn-default form-control">Take The Quiz Again</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>