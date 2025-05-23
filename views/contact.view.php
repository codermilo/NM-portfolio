<!DOCTYPE html>
<html lang="en">

<?php require base_path('views/partials/head.php');
?>

<body>

    <?php require base_path('views/partials/nav.php');
    ?>

    <main>

        <!-- Sticky Navbar -->
        <?php require base_path('views/partials/stickyNav.php');
        ?>

        <div class="breadcrumb-container padding mobile-hidden">
            <ul class="container">
                <li>
                    <a href="/">
                        <strong>Home</strong>
                    </a>
                </li>
                <li class="link">
                    Our Offices
                </li>
            </ul>
        </div>



        <div class="container">

            <div class="section-heading brand-bg negative-m">
                <div class="container">
                    <h1 class="">Our Offices</h1>
                </div>
            </div>

            <div class="office-lists padding">
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://develop.netmatters.co.uk/assets/images/offices/cambridge.jpg" alt="Cambridge Office">
                    </div>
                    <div class="card-body">
                        <div class="office-title">Cambridge Office</div>
                        <div class="office-address">Unit 1.31,<br>
                            St John's Innovation Centre,<br>
                            Cowley Road, Milton,<br>
                            Cambridge,<br>
                            CB4 0WS</div>
                        <div class="office-number">01223 37 57 72</div>
                        <div class="view-btn btn">View more</div>
                    </div>
                </div>
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://develop.netmatters.co.uk/assets/images/offices/wymondham.jpg" alt="Wymondham Office">
                    </div>
                    <div class="card-body">
                        <div class="office-title">Wymondham Office</div>
                        <div class="office-address">Unit 15,<br>
                            Penfold Drive,<br>
                            Gateway 11 Business Park,<br>
                            Wymondham, Norfolk,<br>
                            NR18 0WZ</div>
                        <div class="office-number">01603 70 40 20</div>
                        <div class="view-btn btn">View more</div>
                    </div>
                </div>
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://develop.netmatters.co.uk/assets/images/offices/yarmouth-2.jpg" alt="Great Yarmouth Office">
                    </div>
                    <div class="card-body">
                        <div class="office-title">Great Yarmouth Office</div>
                        <div class="office-address">Suite F23,<br>
                            Beacon Innovation Centre,<br>
                            Beacon Park, Gorleston,<br>
                            Great Yarmouth, Norfolk,<br>
                            NR31 7RA</div>
                        <div class="office-number">01493 60 32 04</div>
                        <div class="view-btn btn">View more</div>
                    </div>
                </div>
            </div>

            <div class="contact-section padding">
                <div class="contact-form">
                    <form method="POST" action="/enquiries">
                        <div class="form-group">
                            <div>
                                <label
                                    for="name"
                                    class="">Your Name</label>

                                <div class="">
                                    <input type="text" id="name" name="name" value="<?= $_POST['name'] ?? '' ?>">

                                    <?php if (isset($errors['name'])) : ?>
                                        <p class=""><?= $errors['name'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div>
                                <label
                                    for="company"
                                    class="">Company Name</label>

                                <div class="">
                                    <input type="text" id="company" name="companyName" value="<?= $_POST['companyName'] ?? '' ?>">

                                    <?php if (isset($errors['companyName'])) : ?>
                                        <p class=""><?= $errors['companyName'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <label
                                    for="email"
                                    class="">Your Email</label>

                                <div class="">
                                    <input type="text" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">

                                    <?php if (isset($errors['email'])) : ?>
                                        <p class=""><?= $errors['email'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div>
                                <label
                                    for="phone"
                                    class="">Your Telephone Number</label>

                                <div class="">
                                    <input type="text" id="phone" name="phone" value="<?= $_POST['phone'] ?? '' ?>">

                                    <?php if (isset($errors['phone'])) : ?>
                                        <p class=""><?= $errors['phone'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">


                            <div>
                                <label
                                    for="message"
                                    class="">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="3"
                                    class=""><?= $_POST['message'] ?? '' ?></textarea>

                                <?php if (isset($errors['message'])) : ?>
                                    <p class=""><?= $errors['message'] ?></p>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="">
                                <input type="checkbox" id="preference" name="preference" value="<?= $_POST['preference'] ?? '' ?>">

                            </div>

                            <label
                                for="preference"
                                class="">
                                <span>
                                    Please tick this box if you wish to receive marketing information from us. <br>
                                    Please see our
                                    <a href="#">Privacy Policy</a>
                                    for more information on how we keep your data safe.
                                </span>
                            </label>
                        </div>

                        <div class="form-group">
                            <span class="policy"><small>This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</small></span>
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn submit-btn">
                                SEND ENQUIRY
                            </button>
                            <p>Fields Required</p>
                        </div>
                    </form>
                </div>
                <div class="contact-details">
                    <h4>Email us on:</h4>
                    <h2>sales@netmatters.com</h2>
                    <h4>Business hours:</h4>
                    <h4>Monday - Friday 07:00 - 18:00</h4>
                    <div class="accordion">
                        <div class="accordion-title">
                            <h4>Out of Hours IT Support</h4>
                        </div>
                        <div class="dropdown">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p>
                                <strong> Monday - Friday 18:00 - 22:00 <br>
                                    Saturday 08:00 - 16:00 <br>
                                    Sunday 10:00 - 18:00
                                </strong>
                            </p>
                            <p>
                                To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php require base_path('views/partials/footer.php');
    ?>

    <!-- Cookie Consent  -->
    <?php require base_path('views/partials/cookieModal.php');
    ?>

    <!-- Consent Tag -->
    <?php require base_path('views/partials/consentTag.php');
    ?>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>