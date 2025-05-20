<!DOCTYPE html>
<html lang="en">

<?php require base_path('views/partials/head.php');
?>

<body>

    <!-- Side Menu -->
    <?php require base_path('views/partials/sidebar.php');
    ?>

    <!-- Wrapper to contain main content (So I can move it on side menu reveal)-->
    <div id="main-content">


        <?php require base_path('views/partials/nav.php');
        ?>

        <main class="">

            <!-- Sticky Navbar -->
            <?php require base_path('views/partials/stickyNav.php');
            ?>


            <!-- Banner Section -->
            <?php require base_path('views/home/banner.php');
            ?>

            <!-- Service Section -->
            <?php require base_path('views/home/services.php');
            ?>

            <!-- Partners Slideshow Section -->
            <?php require base_path('views/home/partners.php');
            ?>

            <!-- Welcome Section -->
            <?php require base_path('views/home/welcome.php');
            ?>

            <!-- Latest Articles Section -->
            <?php require base_path('views/home/articles.php');
            ?>

            <!-- Clients Slideshow Section -->
            <?php require base_path('views/home/clients.php');
            ?>

        </main>

        <!-- Footer -->
        <?php require base_path('views/partials/footer.php');
        ?>

    </div>

    <!-- Cookie Consent  -->
    <?php require base_path('views/partials/cookieModal.php');
    ?>

    <!-- Fixed Widgets -->
    <?php require base_path('views/partials/chatWidget.php');
    ?>

    <?php require base_path('views/partials/consentTag.php');
    ?>


    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>