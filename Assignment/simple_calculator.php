<?php
function myClaculetor()
{
    if (isset($_REQUEST['fristNumber'])) {
        $firstNumber = $_REQUEST['fristNumber'];
        if (isset($_REQUEST['secondNumber'])) {
            $secondNumber = $_REQUEST['secondNumber'];
        }
    }

    if (isset($_REQUEST['options']) && $_REQUEST['options'] == 'Addition') {
        return $firstNumber + $secondNumber;
    } elseif (isset($_REQUEST['options']) && $_REQUEST['options'] == 'Mainaus') {
        return $firstNumber - $secondNumber;
    } elseif (isset($_REQUEST['options']) && $_REQUEST['options'] == 'Divide') {
        return $firstNumber / $secondNumber;
    } elseif (isset($_REQUEST['options']) && $_REQUEST['options'] == 'Modulas') {
        return $firstNumber % $secondNumber;
    } elseif (isset($_REQUEST['options']) && $_REQUEST['options'] == 'stou') {
        return $firstNumber * $secondNumber;
    }
}
?>

<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 7: Simple Calculator</div>
            <div class="card">
                <div class="card-header">Basic Calculator With PHP</div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group mb-3">
                        <div class="bg-light bordered py-3 text-center fw-bold"><?php echo myClaculetor(); ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" name="fristNumber" placeholder="Enter Your Number" class="form-control" require>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" name="secondNumber" placeholder="Enter Your Number" class="form-control" require>
                        </div>
                        <select name="options"  class="form-control mb-3" require>
                            <option value="">Select Options</option>
                            <option value="Addition">(+) Addition</option>
                            <option value="Mainaus">(-) Mainaus</option>
                            <option value="stou">(*) Stou</option>
                            <option value="Divide">(/) Divide</option>
                            <option value="Modulas">(%) Modulas</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-block">ENTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>