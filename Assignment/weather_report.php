<?php 
    function temperature(){
        if(isset($_REQUEST['temperature'])){
            $number = $_REQUEST['temperature'];
            if($number <= 0){
                return "It's freezing!";
            }elseif($number > 0 && $number <= 20){
                return "It's cool.";
            }else{
                return "It's warm.";
            }
        }
    }
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 5: Weather Report</div>
            <div class="card">
                <div class="card-header">Weather Report</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold"><?php echo temperature(); ?></div>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="temperature">Temperature</label>
                            <input type="number" name="temperature" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Check</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>