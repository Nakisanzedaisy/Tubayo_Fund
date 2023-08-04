@extends('new-ui.layout.main')
@section('content')
   <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Better digital savings with Tubayo Community Fund.</h1>
                    <h2>Building your future, one penny at a time</h2>
                    <a href="https://forms.gle/diPaXnfUCEYP24Pr7" target="_blank" class="btn-get-started scrollto">Get
                        Started</a>
                    <a href="{{ url('/sitelogin') }}" class="btn-get-started scrollto">Login</a>
                </div>

            </div>

        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="new-ui-assets/assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>

                    </div><br><br>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Tubayo, Building your future</h3>
                            <p>
                                Empowering Your Journey to Limitless Financial Freedom!
                            </p>
                            <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Accuracy </h4>
                                    <p>Achieve perfection with Tubayo Community Fund. <br> Unmatched accuracy in every use.
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Integrity</h4>
                                    <p>The pathway to financial trust and confidence. <br> Harness the power of integrity
                                        for a secure future!</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>Simplicity</h4>
                                    <p>Your key to effortless financial success. <br> Simplify your finances, amplify your
                                        results embrace the ease and thrive today!</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>Secure</h4>
                                    <p>Your trusted and secure companion for saving and financial empowerment. <br> Unleash
                                        the power of unwavering ssecurity and simplified success today!</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Overall, Tubayo aims to instill responsible financial habits, promote savings, and empower young
                        individuals to take control of their financial future.</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="service.html">Savings and Investments</a></h4>
                            <p>Savings accounts specifically designed for young individuals, providing a safe and secure
                                place to deposit and grow their money.Tubayo provides tools to track and invest youth
                                savings for a prosperous future. Unlock the Potential of your wealth today</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="service.html">Financial Education</a></h4>
                            <p>Educational resources and workshops to promote financial literacy among youth,the importance
                                of setting financial goals, and developing responsible money management habits.We aim at
                                sensitizing the youth about the importances of financial literacy and financial independence
                                at large.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-binoculars"></i>
                            <h4><a href="service.html">Access to Financial Services</a></h4>
                            <p>Access to other financial services, such as debit cards or mobile banking applications,
                                allowing youth to manage their savings more conveniently and gain experience with digital
                                financial tools.We are partnering with a number of financial institutions to provide you
                                with quality services.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-brightness-high"></i>
                            <h4><a href="service.html">Community Engagement</a></h4>
                            <p>Facilitation of a sense of community among youth savers by organizing events, activities, and
                                workshops where they can connect with peers who share similar financial goals. This promotes
                                a supportive environment and encourages mutual learning.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>-->
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <div class="position-relative rounded overflow-hidden h-100" align-items="right">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7425471881406!2d32.61206040995046!3d0.35311766396843564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dba31c9ffedf9%3A0x689faccd8ebd72a8!2sNtinda%20Complex%20Apartments!5e0!3m2!1sen!2sug!4v1688139348017!5m2!1sen!2sug"
                                            width="600" height="210" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <h3>Our Address</h3>
                                    <p>Ntinda Complex Apartments, Kampala</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>tubayo@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+256 777 645 991<br>+256 755 253 138</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="contactForm">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
