
<?php


include "includes/head.php";
include "includes/header.php";
if (!isset($_SESSION['user_id'])) {
    post_redirect("login.php");
}
?>
<head> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
<div class="container text-center mt-5">
        <h1>Choose Your category</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card choice-card">
                    <a href="men-workout.php">
                        <img src="images/men22.png" class="card-img-top choice-img" alt="Men's Workout" style="height:270px;" style="background-color:black;">
                    </a>
                    <div class="card-body">
                    <h5 class="card-title">Men</h5>
                        <p class="card-text">Explore our tailored workout plans designed specifically for men.</p>
                        <a href="men-workout.php" class="btn btn-primary">View Workouts</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card choice-card">
                    <a href="women-workout.php">
                        <img src="images/3d-casual-life-girl-showing-peace-sign.png" class="card-img-top choice-img" alt="Women's Workout" style="height:250px;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Women</h5>
                        <p class="card-text">Discover our curated workout routines crafted for women to achieve their fitness goals.</p>
                        <a href="women-workout.php" class="btn btn-primary">View Workouts</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card choice-card">
                    <a href="nutrition1.php">
                        <img src="images/simplistic-healthy-lifestyle-app-on-smartphone-screen.png" class="card-img-top choice-img" alt="Third Workout" style="height:200px;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Nutrition</h5>
                        <p class="card-text">Explore essential nutrition tips and meal plans designed to boost your fitness performance and overall health. Learn how to properly fuel your body for optimal results.</p>
                        <a href="nutrition1.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4 offset-md-4">
            <div class="card choice-card">
                <a href="nutrition.php">
                    <img src="images/company-people-working-out-in-a-gym-1.png" class="card-img-top choice-img" alt="Nutrition" style="height:200px;">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Group Workout</h5>
                    <p class="card-text">Group workouts offer a fun and supportive environment to stay motivated on your fitness journey. Join a session today</p>
                    <a href="" class="btn btn-primary">comming soon</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include "includes/footer.php"; ?>
</body>
</html>