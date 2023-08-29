<?php
include 'inc/header.php';

?>
<main>
    <div class="container d-flex flex-column align-items-center">
        <img src="logo.png" class="w-25 mb-3" alt="">
        <h2>Movie Show Ticketing System</h2>
        <p class="lead text-center">Add New Customer</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" class="mt-4 w-75" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="c_name" name="_name">
            </div>
            <div class="mb-3">
                <label for="Date" class="form-label">Date of birth</label>
                <input type="Date" class="form-control" id="c_date" name="c_date">
            </div>
            <div class="mb-3">
                <label for="Date" class="form-label">Address</label>
                <textarea type="Date" class="form-control" id="c_addr" name="c_addr"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="Create Show" value="Create Show" class="btn btn-dark w-100">
            </div>
        </form>
    </div>
</main>

<?php
include 'inc/footer.php';

?>