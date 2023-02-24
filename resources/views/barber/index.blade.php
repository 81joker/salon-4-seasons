@include('include.header')


<!-- Top Bar Start -->
@include('include.tobBar')

<!-- Top Bar End -->

<!-- Nav Bar Start -->
@include('include.nav')

<!-- Nav Bar End -->


<!-- Hero Start -->
<div class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="hero-text">
                    <h1>WIR MACHEN DEINEN LOOK PERFEKT</h1>
                    <p>
                        Wir lieben es jeden Tag aufs neue unsere Kreativität mit viel Freude und Erfolg auszuüben und
                        die Kunden zu verwöhnen und begeistern.
                        =========================================================
                        Im Friseursalon Salon 4 seasons verbinden wir jahrzehntelange Erfahrung mit modernen Trends und
                        Stylings. Für Ihr perfektes, typgerechtes Styling nehmen wir uns ausgiebig Zeit. Jeder
                        Behandlung geht eine ausführliche Beratung in angenehmer Atmosphäre voraus. Dabei gehen wir auf
                        Ihre individuellen Vorstellungen und Wünsche ein.
                    </p>
                    <a class="btn" href="#">Termin vereinbaren</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="img/hero.png" alt="Hero Image">
                </div>
            </div>
        </div>
        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
            data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>
<!-- Hero End -->

<!-- Video Modal Start-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>FÜR SIE UND IHN</p>
                    <h2>Die richtige Frisur für jeden Type</h2>
                </div>
                <div class="about-text">
                    <p>
                        Ob Frau, Mann oder Kind, wir finden für jeden die passende und auf den Typ zugeschnittene
                        Frisur. Sowohl unsere jahrelangen Erfahrungen als auch ständige Weiterbildungen versetzen uns
                        die Lage, von klassischen Haarschnitten bis zu trendig-modernen Styles ein großes Repertoire an

                    </p>
                    <p>
                        Techniken zu beherrschen. Auch wenn es um Ihre Haarfarbe geht, sind Sie bei uns richtig, denn
                        wir färben sowohl mit klassischen als auch mit aktuell modernen Techniken, je nachdem, welcher
                        Effekt von Ihnen gewünscht wird. Moderne und zeitgemäße Varianten der Dauerwelle
                        vervollständigen unser Angebot.
                    </p>
                    <a class="btn" href="">Termin vereinbaren</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Salon Services</p>
            <h2>Bester Salon und Friseur service für Sie</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-1.jpg" alt="Image">
                    </div>
                    <h3>Haarschnitt</h3>
                    <p>
                        Der Undercut ist eine Frisur, welche besonders in den letzten paar Jahren sehr beliebt geworden
                        ist. Egal ob ausgefallen in Kombination mit einem Man Bun oder aber klassisch mit einem Quiff:
                        Der Undercut macht aus jeder Frisur etwas Besonderes und sorgt dafür, dass ihr heraussticht.
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-2.jpg" alt="Image">
                    </div>
                    <h3>Beard Style</h3>
                    <p>
                        In punkto Bartpflege und Bartschnitt können wir Ihnen als spezialisierter Herrenfriseur alles
                        bieten, was Ihr Männerherz begehrt. Die akribische Pflege eines Bartes, egal welcher Länge, ist
                        absolut notwendig, um attraktiv und gepflegt auszusehen.
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-3.jpg" alt="Image">
                    </div>
                    <h3>Color & Wash</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->




<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" alt="Image">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas
                    eleifend dui ac consequat. Fusce venenatis at lectus in malesuada. Suspendisse sit amet dolor et
                    odio varius mattis.
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" alt="Image">
                <p>
                    Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non
                    velit. Vivamus vehicula finibus tortor. Aliquam vehicula molestie pulvinar. Sed varius libero in leo
                    finibus, ac consectetur tortor rutrum.
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" alt="Image">
                <p>
                    Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut
                    vestibulum massa. Integer quis magna non enim luctus interdum. Phasellus sed eleifend erat. Aliquam
                    ligula ex, semper vel tempor pellentesque, pretium eu nulla.
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Barber Team</p>
            <h2>Meet Our Hair Cut Expert Barber</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Abod alarakie</h2>
                        <p>Master Barber</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>AWS Adams</h2>
                        <p>Hair Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Abod Edwards</h2>
                        <p>Beard Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>AWS Dunn</h2>
                        <p>Color Expert</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest From Blog</p>
            <h2>Learn More from Latest Barber Blog</h2>
        </div>
        <div class="owl-carousel blog-carousel">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-1.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Hair Cut</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>{{ date('Y-m-d H:i:s') }}</p>
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-2.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Beard Style</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>{{ date('Y-m-d H') }}</p>
                    {{-- <p>01-Jan-2045</p> --}}
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-3.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Color & Wash</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>{{ date('Y-m-d H:i:s') }}</p>
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-4.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Hair Cut</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>{{ date('Y-m-d H:i:s') }}</p>
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-5.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Beard Style</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-6.jpg" alt="Blog">
                </div>
                <div class="blog-meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Color & Wash</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum
                        metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@include('include.footer')
