<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Avantika University - Top School of Law | MIT School of Law Avantika University Ujjain</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link href="<?=LINK;?>images/logo/favicon.ico" loading="lazy" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======================================================================================================= -->
    <div class="container-fluid h_nav sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light position-relative">
                <a href="" class="navbar-brand">
                    <img src="images-01/logos/1.png" class="hero_logo_01" loading="lazy" alt="">
                </a>
                <button type="button" class="navbar-toggler fs_13 me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarCollapse">
                    <div class="navbar-nav">
                        <div class="">
                            <button type="submit" class="btn c_btn">
                                <span class="icon-box-01 p-2">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                                <span class="btn-text px-4">Register Now</span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="overflow-hidden">
        <!-- ======================================================================================================= -->
        <!-- Topbar End -->


        <section class="bg-grad02 hero-01">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-lg-4">
                        <div class="event-info-box text-white">
                            <h2 class="event-title">
                                Discover Gurugram’s <br>
                                <span>Top 30+ Schools</span>
                            </h2>

                            <p class="event-subtitle">ALL IN ONE PLACE</p>

                            <div class="event-card d-flex justify-content-between align-items-center">

                                <div class="event-location">
                                    <strong>Apparel House,</strong>
                                    <p class="mb-0 text-lg-center">Sec 44, Gurugram</p>
                                </div>

                                <div class="divider"></div>

                                <div class="event-date text-end">
                                    <strong>2–3 August 2025</strong>
                                    <p class="mb-0  text-lg-center">Sat–Sun | 10AM – 6PM</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="vertical-owl owl-carousel  py-5">
                                    <div class="v-item"><img src="images-01/hero/1.png"></div>
                                    <div class="v-item"><img src="images-01/hero/2.png"></div>
                                    <div class="v-item"><img src="images-01/hero/3.png"></div>
                                    <div class="v-item"><img src="images-01/hero/4.png"></div>
                                    <div class="v-item"><img src="images-01/hero/5.png"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="enquiry-card p-3">
                            <h4 class="mb-4 text-white">Enquire Now</h4>
                            <?php include "form_01.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5 bg-white" id="gallery">
            <div class="container">
                <div class="row gy-4">
                    <?php
                    $a = array('1','2','3','4');
                        for ($i=0; $i < count($a); $i++) { 
                    ?>
                    <div class="col-lg-3 col-6">
                        <div class="px-3">
                            <img src="images-01/stats/0<?= $a[$i]; ?>.png" class="w-100">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
        </section>




        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-5  bg-white" id="placement">
            <div class="container rounded">
                <div class="row justify-content-center company">
                    <div class="col-md-12  rounded-3  ">
                        <div class="row ">
                            <div class="col-lg-12 text-center">
                                <h5 class="mb-4 fw-bold font-02">Participating Schools</h5>
                            </div>
                        </div>
                        <div class="row placement_01 py-3 rounded-3  owl-carousel justify-content-center text-center">
                            <?php
                            
                            for ($i=0; $i < 6; $i++) {
                            ?>
                            <div class="company_01">
                                <img src="images-01/school/<?= $i+1;?>.png" loading="lazy" class="py-2" alt="">
                            </div>
                            <?php
                            } 
                            ?>
                        </div>
                        <div class="row placement_01 owl-carousel justify-content-center text-center  pt-3 rounded-3  ">
                            <?php
                            
                            for ($i=0; $i < 6; $i++) {
                            ?>
                            <div class="company_01">
                                <img src="images-01/school/<?= $i+1;?>.png" loading="lazy" class="py-2" alt="">
                            </div>
                            <?php
                            } 
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="school-category-section py-5 bg-white">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <h3 class="mb-4 fw-bold">Choose the School That Fits You Best</h3>
                    </div>
                </div>
                <div class="row  schoolCategories owl-carousel g-4">

                    <?php
                        $schoolCategories = [
                            [
                                "title" => "Pre-Schools & Early Learning Centres",
                                "description" => "Nurturing foundational skills for toddlers and pre-primary children.",
                                "bg_class" => "bg-img-1"
                            ],
                            [
                                "title" => "K–12 CBSE Day Schools",
                                "description" => "Reputed schools offering complete schooling from Kindergarten to Grade 12.",
                                "bg_class" => "bg-img-2"
                            ],
                            [
                                "title" => "Heritage to New-Age Schools",
                                "description" => "Time-tested schools to innovative pedagogy, tech enabled, future-ready schools.",
                                "bg_class" => "bg-img-3"
                            ],
                            [
                                "title" => "International Curriculum Schools",
                                "description" => "Offering IB, Cambridge, Finnish and other global curricula.",
                                "bg_class" => "bg-img-4"
                            ]
                        ]; foreach ($schoolCategories as $category) { ?>
                    <div class="">
                        <div class="school-card <?= $category['bg_class']; ?>">
                            <div class="overlay"></div>
                            <div class="card-content">
                                <h6><?= $category['title']; ?></h6>
                                <p><?= $category['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </section>



        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section>
            <div class="container-fluid bg-grad01  px-0">
                <div class="container-fluid  px-0">
                    <div class="row align-items-center px-0">
                        <div class="col-lg-5  py-5 ps-4">
                            <div class="">
                                <p class="text-purple mb-0">Exciting Opportunities for Parents!</p>
                                <h3 class="fw-normal">Pre-schedule Your School Appointments</h3>
                                <p class="text-purple">To Avoid Rush</p>
                            </div>
                            <div class="">
                                <button type="submit" class="btn c_btn">
                                    <span class="icon-box-01 p-2">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </span>
                                    <span class="btn-text px-4">PRE-SCHEDULE NOW</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-7 px-0">
                            <img src="images-01/background/1.png" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="bg-exhibition" id="testimonals">
            <div class="container pt-5 ">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-12 text-center">
                        <h2 class=" fw-normal mb-4 text-white">What Makes This Exhibition a Must-Visit</h2>
                    </div>
                </div>
                <?php
                    $testimonials = [
                        [
                            "name" => "Interact Directly with School Heads ",
                            "message" => "Get answers straight from the experts",
                            "image" => "1"
                        ],
                        [
                            "name" => "Compare Curriculum & Pedagogy",
                            "message" => "Understand the differences between CBSE, ICSE, IB, Cambridge, Finnish & more",
                            "image" => "2"
                        ],
                        [
                            "name" => "Get Exclusive Fee Structures & Offers",
                            "message" => "Access transparent information and avail offers",
                            "image" => "3"
                        ],
                        [
                            "name" => "Explore Schools Offerings",
                            "message" => "Preview infrastructure, co-curricular, teaching methodology and culture",
                            "image" => "4"
                        ],
                        [
                            "name" => "Explore Schools Offerings",
                            "message" => "Preview infrastructure, co-curricular, teaching methodology and culture",
                            "image" => "4"
                        ]
                    ];
                    ?>

                <div class="row testimonals_01 owl-carousel">
                    <?php foreach ($testimonials as $item) { ?>
                    <div class="col-lg-12 item testimonial-items mb-4 p-3">
                        <div class="row px-lg-2 pb-2">
                            <div
                                class="shadow d-flex flex-column justify-content-between align-items-start test_002 rounded-3 px-4 py-5 bg-pink">
                                <img class="studentImg" src="images-01/exhibition/<?= $item['image']; ?>.png" alt="">
                                <h6 class="studentName_01 mb-0 fw-bold"><?= $item['name']; ?></h6>
                                <p class="mb-0">"<?= $item['message']; ?>"</p>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
        <div class="">
            <img src="images-01/exhibition/bg-01.png" class="w-100" alt="">
        </div>

        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <?php include 'footer.php';?>
            <div class="register-btn-wrap d-flex d-md-none">
                <a href="#Program" class="left_button">
                    REGISTER NOW
                </a>
                <button type="button"
                    class="right_button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    7635+ PARENTS REGISTERED
                </button>
            </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <div class="modalLogo d-flex flex-column justify-content-center align-items-center">
                            <img src="images-01/logos/1.png" loading="lazy" alt="">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <?php include 'form_01.php';?>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $('[data-bgimg]').each(function () {
                $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
            })
        </script>
        <script>
            // Select all navigation links
            const navLinks = document.querySelectorAll('.nav-item.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent the default anchor behavior

                    // Get the target section's ID
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        // Get the target element's position and apply the 80px offset
                        const targetPosition = targetElement.getBoundingClientRect().top + window
                            .scrollY - 80;

                        // Smoothly scroll to the target position
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('.vertical-owl').owlCarousel({
                    items: 2,
                    loop: true,
                    margin: 20,
                    autoplay: true,
                    autoplayTimeout: 0,
                    autoplaySpeed: 2500,
                    smartSpeed: 2500,
                    slideTransition: 'linear',
                    dots: false,
                    nav: false,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false,
                    freeDrag: false
                });
            });
        </script>



</body>

</html>