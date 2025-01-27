<?php include "includes/head.php"; ?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="site-wrap">
        <?php include "includes/header.php"; ?>
        <div class="site-blocks-cover" style="background-image: url('images/pexels-anush-gorak-1229356.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h2 class="sub-title">Effective WORKOUT, EFFECTIVE Everyday</h2>
                            <h1>Welcome To <br> Opti Fitness</h1>
                            <p>
                                <a href="login.php">
                                    <button type="button" class="btn btn-light px-5 py-3" style="background-color: #74d12b">ENROLL NOW</button>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h1 style="color:black;">Welcome to Opti Fitness - Your Gateway to a Healthier Lifestyle!</h1>
            <p style="font-family: Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; color:black;">
                At Opti Fitness, we believe that achieving your fitness goals is not just about physical strength, but also about mental resilience and overall well-being. Our mission is to empower individuals like you to embark on a journey towards a healthier, happier life. Whether you're a seasoned athlete or just starting out on your fitness journey, Opti Fitness is here to guide and support you every step of the way. With personalized workout plans, expert nutrition advice, and a supportive community, we're committed to helping you reach your full potential and become the best version of yourself. Join us as we break barriers, challenge limits, and inspire each other to push beyond our comfort zones. Together, let's redefine what it means to be fit and embrace a lifestyle of vitality, strength, and vitality. Get ready to unleash your inner athlete and discover the transformative power of fitness with Opti Fitness. Your journey starts here.
            </p>
        </div>

        <!-- Pricing Section -->
        <div class="pricing-buttons">
            <button onclick="showPersonalTraining()">Personal Training</button>
            <button onclick="showNutritionCoaching()">Nutrition Coaching</button>
            <button onclick="showGroupWorkouts()">Group Workouts</button>
        </div>

        <div id="personalTraining" class="pricing-table">
            <div class="column">
                <div class="card">
                    <h3>1 Month Plan</h3>
                    <p>$200</p>
                    <ul>
                        <li>4 sessions/month</li>
                        <li>Customized workout plans</li>
                        <li>Progress tracking</li>
                    </ul>
                    <a href="purchase.php" class="button">BUY</a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>6 Months Plan</h3>
                    <p>$1000</p>
                    <ul>
                        <li>24 sessions/6 months</li>
                        <li>Personalized coaching</li>
                        <li>Free fitness assessment</li>
                    </ul>
                    <a href="purchase.php" class="button">BUY</a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>1 Year Plan</h3>
                    <p>$1800</p>
                    <ul>
                        <li>52 sessions/year</li>
                        <li>Exclusive access to gym facilities</li>
                        <li>Monthly progress reports</li>
                    </ul>
                    <a href="purchase.php" class="button">BUY</a>
                </div>
            </div>
        </div>

        <div id="nutritionCoaching" class="pricing-table" style="display: none">
            <div class="column">
                <div class="card">
                    <h3>Monthly Subscription</h3>
                    <p>$150/month</p>
                    <ul>
                        <li>Personalized meal plans</li>
                        <li>Weekly consultations</li>
                        <li>Recipe suggestions</li>
                    </ul>
                    <a href="purchase.php" class="button">BUY</a>
                </div>
            </div>
        </div>

        <div id="groupWorkouts" class="pricing-table" style="display: none">
            <div class="column">
                <div class="card">
                    <h3>Drop-in Session</h3>
                    <p>$20/session</p>
                    <ul>
                        <li>Flexible scheduling</li>
                        <li>Access to group classes</li>
                        <li>Expert trainers</li>
                    </ul>
                    <a href="purchase.php" class="button">BUY</a>
                </div>
            </div>
        </div>

        <h1 style="text-align:center" ><b><u>We Offer</u></b></h1>
        <!-- New Image and Text Section -->
        <section class="image-text-section">
            <div class="image-text">
                <img src="images/standing-and-smiling33.png" alt="Image 1" class="image left">
                <div class="text">
                    <h3>Workouts</h3>
                    <p>At OptiFitness, we provide separate exercise routines tailored for both men and women. Our programs are designed to meet your individual fitness goals and help you achieve the best results. Join us to experience personalized training sessions that cater to your specific needs.</p>
                </div>
            </div>
            <div class="image-text">
                <div class="text">
                    <h3>Group Workouts</h3>
                    <p>Experience the energy and motivation of group workouts at OptiFitness. Our group sessions are designed to foster camaraderie and challenge participants to push their limits. Join our community and enjoy a variety of classes led by expert trainers, ensuring a fun and effective workout every time.</p>
                </div>
                <img src="images/18998.jpg" alt="Image 2" class="image right">
            </div>
            <div class="image-text">
                <img src="images/simplistic-healthy-lifestyle-app-on-smartphone-screen.png" alt="Image 3" class="image left">
                <div class="text">
                    <h3>Nutrition</h3>
                    <p>At OptiFitness, we believe that nutrition is a key component of overall health and fitness. Our nutrition plans are tailored to meet individual needs, ensuring you get the right balance of nutrients to fuel your workouts and support your wellness goals. Let our expert nutritionists guide you towards a healthier, more balanced diet.</p>
                </div>
            </div>
        </section>

       
        
    </div>
    <div id="contact-section">
            <h2>Get in Touch</h2>
            <div id="form-container">
                <form action="https://submit-form.com/FCox655hX">
                    <label for="contact-name">Name</label>
                    <input type="text" id="contact-name" name="name" placeholder="Name" required="" />
                    <label for="contact-email">Email</label>
                    <input type="email" id="contact-email" name="email" placeholder="Email" required="" />
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" name="message" placeholder="Message" required=""></textarea>
                    <button type="submit">Send</button>
                    <button type="reset">Refresh</button>
                </form>
            </div>

            <div id="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
<?php include "includes/footer.php";?>
    <script src="js/scripts.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
