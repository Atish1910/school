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
        <div class="container px-lg-2 px-0">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
                <a href="" class="navbar-brand">
                    <img src="images-01/logos/1.png" class="hero_logo_01" loading="lazy" alt="">
                </a>
                <a href="" class="btn c_btn  fw-normal d-lg-none" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Enquire Now</a>
                <button type="button" class="navbar-toggler fs_13 me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarCollapse">
                    <div class="navbar-nav">
                        <div class="">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="overflow-hidden">
        <!-- ======================================================================================================= -->
        <!-- Topbar End -->


        <section class="bg-blue-l py-5">
            <div class="container">
                <div class="row border align-items-center py-5">
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
                                    <p class="mb-0">Sec 44, Gurugram</p>
                                </div>

                                <div class="divider"></div>

                                <div class="event-date text-end">
                                    <strong>2–3 August 2025</strong>
                                    <p class="mb-0">Sat–Sun | 10AM – 6PM</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="enquiry-card">
                            <h4 class="mb-4 text-white">Enquire Now</h4>
                            <?php include "form_01.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!---Stats start--->
        <section class="px-lg-5 pt-2 pb-4">
            <div class="container px-lg-0">
                <div class="row justify-content-center pt-3">
                    <?php
                    $b = array("Universities",  "Institutions",  "Students",  "Alumni",  "Courses");
                    $c = array(  "05" , "80" , "70K+" , "5L+" , "5K+" );

                    for ($i=0; $i < count($b); $i++) {
                    ?>
                    <div class="col-lg col-6-custom mb-3 mb-lg-0">
                        <div class=" usp_01 bg-pinkGradient">
                            <div class=" text-center stat_01">
                                <!-- <img src="images/stats/1.png" class="filter" alt=""> -->
                                <h6 class=" rank text-white mb-0  pt-3 h3"><?= $c[$i]; ?></h6>
                                <p class="text-white"><?= $b[$i]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                 ?>
                </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------------------------------- -->

        <!-- About Us -->
        <section class="aboutUs" id="about-us">
            <div class="container py-5 bg-white rounded-3">
                <div class="row">
                    <div class="col-lg-4 pb-3  pb-lg-0">
                        <h2 class=" fw-normal display-5 title_01  text-center text-lg-start"> About School of Law &
                            Public Policy </h2>
                    </div>
                    <div class="col-lg-8 pe-3 text-justify">
                        <img src="images/about/1.png" class="img-fluid d-md-none rounded-3 border mb-4" alt="">
                        <p>The School of Law & Public Policy is approved by the Bar Council of India. Avantika offers a
                            5-year, full-time Bachelor of Arts - Bachelor of Law (BA LLB Hons.), Bachelor of Business
                            Administration, Bachelor of Law (BBA LLB Hons.) in the discipline - Constitutional Law,
                            Corporate Law, Criminal Law, and International Law.</p>
                        <div class=" text-center text-lg-start">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-5" id="placement">
            <div class="container py-5 bg-white rounded">
                <div class="row justify-content-center company">
                    <div class="col-md-12  rounded-3  ">
                        <div class="row ">
                            <div class="col-lg-12 text-center">
                                <h2 class=" fw-normal mb-4 display-5 title">Our Collaborations</h2>
                                <p>Avantika University offers unparalleled career prospects through
                                    placement opportunities with elite companies, top corporations, Fortune
                                    500 organizations, and unicorn start-ups of national and global repute.
                                    We bridge talent with opportunity, with job placements at the forefront of
                                    innovation and excellence.</p>
                            </div>
                        </div>
                        <div class="row placement_01 py-3 rounded-3  owl-carousel justify-content-center text-center">
                            <?php
                            
                            for ($i=0; $i < 3; $i++) {
                            ?>
                            <div class=" company_01 ">
                                <img src="images/placement/<?= $i+1;?>.png" loading="lazy" class=""
                                    alt="Placement Companies">
                            </div>
                            <?php
                            } 
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="" id="testimonals">
            <div class="container bg-white rounded-3 px-lg-5 px-0 py-5 ">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-12 text-center">
                        <h2 class=" fw-normal mb-4 display-5 text-blue-l title">Testimonials</h2>
                    </div>
                </div>
                <div class="row testimonals_01 owl-carousel ">
                    <?php 
                                    $a = array(  "Aarzoo Vishwakarma",  "Aneesh Sikarwar",  "Khushi Lodhwal",  "Kasturi Pathak");
                                    $aCourse = array( "BA LL.B, (1st Year)",  "BA LL.B, (1st Year)", "BA LL.B (1st Year)",  "BBA LL.B, (1st Year)");
                                    $b = array( "Avantika University stands out as a beacon of excellence, providing a nurturing environment where students embark on a journey of self-discovery and growth. With a curriculum designed to foster exploration, students are encouraged to delve deep within themselves, uncovering their passions and potentials." , 
                                    "My experience of studying at Avantika University has been extremely amazing. Even if you are a newbie, the knowledge provided here evolves you into your best version.",
                                    "The university's innovative approach to education, centeblue-l on practical learning, has reshaped my understanding. The faculty members at Avantika are exceptionally knowledgeable, experienced, and dedicated to their fields. The diverse range of activities provided further enriched our learning journey.",
                                    "I am thrilled to be a part of Avantika University. Since enrollment, I have discoveblue-l the true essence of education here. It offers a comprehensive range of knowledge, with excellent facilities that contribute to the shaping of our future.");
                                    $c = array( "1", "2", "3", "4");
                                    for ($i=0; $i < count($a) ; $i++) { 
                                ?>
                    <div class="col-lg-12  item testimonial-items  mb-4 item px-lg-3 px-5 py-3">
                        <div class="row px-lg-2 pb-2 pb-lg-0">
                            <div
                                class="shadow d-flex flex-column justify-content-between align-items-start test_002 rounded-3 px-4 py-5">
                                <img src="images/testimonal/comma.png" class="comma mb-lg-2" alt="">
                                <p class="mb-0">"<?= $b[$i] ;?>"</p>
                                <div class="d-flex border-top pt-3 flex-row gapStudentName w-full pe-2">
                                    <img class="studentImg" src="images/testimonal/<?= $c[$i] ;?>.png" alt="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="studentName_01 mb-0"><?= $a[$i] ;?></p>
                                        <p class="small_01"> <?= $aCourse[$i] ;?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <!-- USP - About Avantika University -->
        <section class="uspSection mt-5" id="usp">
            <div class="container pt-5 bg-white rounded-3">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10  text-center mb-3 pb-2">
                        <h2 class=" fw-normal display-5 title_01">Why Choose Avantika School of Law & Public Policy?
                        </h2>
                        <p class="text-center">At Avantika University, our ethos is embodied in three powerful words,
                            <span class="text-blue-l"> Create, Change,
                                Transform.</span> Nestled in a 60-acre green campus that believes in the motto of
                            Avantika, the
                            21st-century pedagogy focuses on <span class="text-blue-l">"How to Learn"</span> and not
                            <span class="text-blue-l">"What to Learn".</span></p>
                    </div>
                </div>
                <?php
                        $a_usp1=array("Mentor-Mentee Engagement", "Regional and Cultural Diversity", "24/7 Smart Campus","Cross Disciplinary Approach","Professional Skill Development Activities (PSDA)");
                        $a_usp2=array("Top-notch Infrastructure", "Innovation and Incubation Center","Best in class Moot Court","Continuous and Comprehensive Evaluation (CCE)","Collaboration over Competition ");
                        $b_usp1 = array("1","2","3","4","5");
                        $b_usp2 = array("6","7","8","9","10");
                    ?>
                <div class="row justify-content-center flex-wrap-reverse">
                    <div class="col-lg-3 mb-lg-5">
                        <div class="d-flex flex-column">
                            <?php
                            for ($i=0; $i < count($a_usp1) ; $i++) { 
                            ?>
                            <div class="d-flex border uspContainer p-2 mb-3 justify-content-end align-items-center">
                                <h6 class="uspHeading pe-4 mb-0 text-end"><?= $a_usp1[$i] ;?></h6>
                                <div
                                    class="uspImgBox position-relative d-flex justify-content-center align-items-center">
                                    <img class="uspIcon" src="images/usp/<?= $b_usp1[$i] ;?>.png" alt="img not found" />
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="studentBgImg" data-bgimg="images/usp/student.webp">
                        </div>
                    </div>
                    <div class="col-lg-3  mb-lg-5">
                        <div class="d-flex flex-column">
                            <?php
                                for ($i=0; $i < count($a_usp2) ; $i++) { 
                                ?>
                            <div class="d-flex border uspContainer p-2 mb-3 justify-content-start align-items-center">
                                <div
                                    class="uspImgBox position-relative d-flex justify-content-center align-items-center">
                                    <img class="uspIcon" src="images/usp/<?= $b_usp2[$i] ;?>.png" alt="img not found" />
                                </div>
                                <h6 class="uspHeading ps-4 mb-0"><?= $a_usp2[$i] ;?></h6>
                            </div>
                            <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="pt-5" id="admission-process">
            <div class="container bg-white rounded-3">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12  text-center">
                        <h2 class=" fw-normal  display-5 title_01">Admission Process</h2>
                    </div>
                    <img src="images/steps/1.webp" class="img-fluid d-lg-block d-none" alt="">
                    <img src="images/steps/2.webp" class="img-fluid d-block d-lg-none" alt="">
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5" id="gallery">
            <div class="container bg-white rounded-3 px-lg-5 px-3 py-5">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-blue-l fw-normal mb-4 display-5 title">Life@Avantika</h2>
                    </div>
                </div>
                <div class="row gy-4 galleryimages">
                    <?php
                        $a = array('1','2','3','4','5','6','7','8','9');
                            for ($i=0; $i < count($a); $i++) { 
                        ?>
                    <div class="col-lg-4">
                        <img src="images/gallary/<?= $a[$i]; ?>.webp" alt="Life" class="border">
                    </div>
                    <?php
                            }
                        ?>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 advertise_01 text-center">
                        <div class="">
                            <h3 class="">Education for the Next Generation to Build a Better World
                            </h3>
                            <p class="ctasize">Admissions Open 2025</p>
                            <button class="btn c_btn py-lg-2 px-lg-4 px-4 px-2 fs-6 fw-bold" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Apply
                                Now</button>
                            <div class="pt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->

        <?php include 'footer.php';?>

        <a href="#Program" class="btn c_btn rounded-pill d-md-none px-4 left_button">Programs</a>
        <button type="button" class="btn c_btn  px-4 right_button " data-bs-toggle="modal"
            data-bs-target="#exampleModal">Apply Now</button>
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

            // Select all blue-lirect buttons
            const blue - lirectBtns = document.querySelectorAll('.blue-lirectBtn');

            blue - lirectBtns.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent the default anchor behavior

                    // Get the target section's ID
                    const targetId = this.getElementById('programs').substring(1);
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

        </script>
</body>

</html>