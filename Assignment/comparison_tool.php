<?php 
    function comparison(){
        if(isset($_REQUEST['firstNumbers'])){
            $firstNumber = $_REQUEST['firstNumbers'];
            if(isset($_REQUEST['secondNumbers'])){
                $secondNumber = $_REQUEST['secondNumbers'];
            }
            $largNumber = ($firstNumber > $secondNumber)? $firstNumber : $secondNumber;
            return "The larger number is: {$largNumber}";
        }
    }
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 6: Comparison Tool</div>
            <div class="card">
                <div class="card-header">Comparison Tool</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold"><?php echo comparison(); ?></div>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="firstNumbers">Frist Number</label>
                            <input type="number" name="firstNumbers" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="secondNumbers">Second Number</label>
                            <input type="number" name="secondNumbers" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Comparison </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>