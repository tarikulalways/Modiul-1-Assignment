<?php
function temperature_converter()
{
    // Fahrenheit Formula (C * 9/5) + 32
    // Celsius  Formula (F - 32) * 5/9

    if (isset($_REQUEST['number'])) {
        $number = $_REQUEST['number'];
    }
    if (isset($_REQUEST['temp']) && $_REQUEST['temp'] == 'C') {
        $celsius = ($number * 9 / 5) + 32;
        return "Fahrenheit: {$celsius}";
    } elseif (isset($_REQUEST['temp']) && $_REQUEST['temp'] == 'F') {
        $fahrenheit = ($number - 32) * 5 / 9;
        return "Celsius: {$fahrenheit}";
    }

}
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 2: Temperature Converter</div>
            <div class="card">
                <div class="card-header">Temperature Converter</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <div class="bg-light bordered py-3 text-center fw-bold"><?php echo temperature_converter(); ?></div>
                            </div>
                        <div class="form-group mb-3">
                            <label for="number">Enter Your Number:</label>
                            <input type="number" name="number" class="form-control" placeholder="Enter Your Number">
                        </div>
                        <div class="form-group mb-3">
                            <select name="temp" id="" class="form-control">
                            <option value="">Please select a temperature</option>
                            <option value="C">Celsius to Fahrenheit</option>
                            <option value="F">Fahrenheit to Celsius</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Convert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
