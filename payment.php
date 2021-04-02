<?php
require_once './includes/authheader.php';
require_once './controllers/conn.php';
?>
<div class="container">
<div class="row">
        <div class="col-sm-5 m-auto p-3 border mt-2">
            <h3>M-pesa </h3>
            <?php require_once "./controllers/payment.php"; ?>

            <div id="alert">
                <?php require_once "./feedback.php"; ?>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="from-group mb-3">
                    <label for="service_id">service id: </label>
                    <input type="text"  id="service_id" name="service_id" class="form-control">
                </div>
                <div class="from-group mb-3">
                    <label for="service_title">service title: </label>
                    <input type="text"  id="services_title" name="services_title" class="form-control">
                </div>
                <div class="from-group mb-3">
                    <label for="service_name">amount: </label>
                    <input type="text"  id="amount" name="amount" class="form-control">
                </div>
                <div class="from-group mb-3">
                    <label for="service_name">number: </label>
                    <input type="text"  id="number" name="number" class="form-control">
                </div>
                <input type="submit" value="Submit" class="btn btn-primary" name="submit">
            </form>
        </div>
        <div class="col-sm-5 me-1 p-3 border mt-2">
        
        </div>
    </div>
</div>


<?php
 require_once './includes/footer.php';

 ?>
