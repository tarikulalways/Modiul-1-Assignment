<?php 
    function even_odd_checker(){
        if(isset($_REQUEST['number_check'])){
            $number = $_REQUEST['number_check'];
            if($number % 2 == 0){
                return "<p>$number is even number.</p>";
            }else{
                return "<p>$number is odd number.</p>";
            }
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 4: Even or Odd Checker</div>
            <div class="card">
                <div class="card-header">Even or Odd Checker</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold"><?php echo even_odd_checker(); ?></div>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="number_check">Enter Your Number</label>
                            <input type="number" name="number_check" placeholder="Enter Your Number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Check</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>