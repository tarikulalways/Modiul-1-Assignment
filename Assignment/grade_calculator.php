<?php 
    function grade_calculator(){
        if(isset($_REQUEST['score1'])){
            $score1 = $_REQUEST['score1'];
            if(isset($_REQUEST['score2'])){
                $score2 = $_REQUEST['score2'];
            }
            if(isset($_REQUEST['score3'])){
                $score3 = $_REQUEST['score3'];

                $sum = $score1 + $score2 + $score3;
                $average = $sum / 3;
            }
            if($average >= 90){
                return "A";
            }elseif($average >= 80){
                return "B";
            }elseif($average >= 70){
                return "C";
            }elseif($average >= 60){
                return "D";
            }elseif($average >= 50){
                return "F";
            }
        } 
    }
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 3: Grade Calculator</div>
            <div class="card">
                <div class="card-header">Grade Calculator</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold">Result: <?php echo grade_calculator();?></div>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="score1">Test Score 1:</label>
                            <input type="number" name="score1" class="form-control" min="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="score2">Test Score 2:</label></label>
                            <input type="number" name="score2" class="form-control" min="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="score3">Test Score 3:</label></label>
                            <input type="number" name="score3" class="form-control" min="0">
                        </div>
                        <button type="submit" class="btn btn-success">Calculate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>