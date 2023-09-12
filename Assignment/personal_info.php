<?php
    $name = "Md. Tariqul Islam";
    $age = "23 Year";
    $country = "Bangladesh";
    $district = "Meherpur";
    $upazila = "Meherpur Sadar";
    $village = "Pirojpur";
    $post = "Pirojpur";
    $union = "Pirojpur";
?>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="alert alert-success">Task 1: Personal Information Page</div>
            <div class="card">
            <div class="card-header">Personal Information</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item fw-bold">Name: <?php echo $name; ?></li>
                        <li class="list-group-item fw-bold">Age: <?php echo $age; ?></li>
                        <li class="list-group-item fw-bold">Country: <?php echo $country; ?></li>
                        <li class="list-group-item fw-bold">District: <?php echo $district; ?></li>
                        <li class="list-group-item fw-bold">Upazila: <?php echo $upazila; ?></li>
                        <li class="list-group-item fw-bold">Village: <?php echo $village; ?></li>
                        <li class="list-group-item fw-bold">Post: <?php echo $post ?></li>
                        <li class="list-group-item fw-bold">Union: <?php echo $union; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
