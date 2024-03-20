
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link href="{{ asset('style\style.css') }}" rel="stylesheet">


    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="{{ Storage::url($profile->icon) }}" type="image/x-icon">

    <title>Portfolio | {{ $profile->namalengkap }}</title>
</head>

<body>
  
    <div class="container">
        <!-- --------------- HEADER --------------- -->
        <nav id="header">
            <div class="nav-logo">
                <img src="{{ Storage::url($profile->icon) }}" alt="logo" class="nav-brand">
                <p class="nav-name">{{ $profile->logonama }}</p>
                <span>.</span>
            </div>
            <div class="nav-menu" id="myNavMenu">
                <ul class="nav_menu_list">
                    <li class="nav_list">
                        <a href="#home" class="nav-link active-link">Home</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#about" class="nav-link">About</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#Education" class="nav-link">Education</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#projects" class="nav-link">Projects</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#contact" class="nav-link">Contact</a>
                        <div class="circle"></div>
                    </li>

                    <li class="nav_list">
                        <a href="/admin" target="_blank" class="nav-link">Login</a>
                        <div class="circle"></div>
                    </li>

                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="uil uil-bars" onclick="myMenuFunction()"></i>
            </div>
        </nav>


        <!-- -------------- MAIN ---------------- -->
        <main class="wrapper">
            <!-- -------------- FEATURED BOX ---------------- -->
            <section class="featured-box" id="home">
                <div class="featured-text">
                    <div class="featured-text-card">
                        <span>{{ $profile->namalengkap }}</span>
                    </div>
                    <div class="featured-name">
                        <p>I'm <span class="typedText"></span></p>
                    </div>
                    <div class="featured-text-info">
                        {!! strip_tags($profile->detail) !!}
                    </div>
                    <div class="featured-text-btn">
                        <button class="btn blue-btn" onclick="btnHireMe()">Hire Me</button>
                        <!--
                        <button class="btn" onclick="downloadCV()"><a download style="text-decoration: none; color: black;" href="comingsoon.html">Download CV <i class="uil uil-file-alt"></i></a></i></button>
                        -->
                        
                        <button class="btn"><a style="text-decoration: none; color: black;" href="{{ Storage::url($profile->cv) }}" target="_blank">Download CV <i class="uil uil-file-alt"></i></a></i></button>

                    </div>
                    <div class="social_icons">
                        <div class="icon"><a href="https://www.instagram.com/{{ $contact->ig }}/" target="_blank"><i class="uil uil-instagram"></i></a></div>
                        <div class="icon"><a href="https://wa.me/{{ $contact->wa }}" target="_blank"><i class="uil uil-whatsapp"></i></a></i></div>
                        <div class="icon"><a href="https://github.com/{{ $contact->github }}" target="_blank"><i class="uil uil-github-alt"></i></a></div>
                    </div>
                </div>
                <div class="featured-image">
                    <div class="image">
                        <img src="{{ Storage::url($profile->foto) }}" alt="avatar">
                    </div>
                </div>
                <div class="scroll-icon-box">
                    <a href="#about" class="scroll-btn">
                        <i class="uil uil-mouse-alt"></i>
                        <p>Scroll Down</p>
                    </a>
                </div>

            </section>
            <!-- -------------- ABOUT BOX ---------------- -->
            <section class="section" id="about">
                <div class="top-header">
                    <h1>About Me & Skill</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="about-info">
                            <h3>{{ $aboutme->title }}</h3>
                            <p>{{ $aboutme->detail }}
                            </p>
                            <div class="about-btn">
                                <!--
                                <button class="btn" onclick="downloadCV()"><a download style="text-decoration: none; color: white;" href="comingsoon.html">Download CV <i class="uil uil-import"></i></a></button>
                                -->
                                <button class="btn" ><a style="text-decoration: none; color: white;" href="{{ Storage::url($profile->cv) }}" target="_blank">Download CV <i class="uil uil-import"></i></a></button>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="skills-container">
                            <div class="skills-box">
                                <div class="skills-header">
                                    <h3>Frontend</h3>
                                </div>
                                <div class="skills-list">
                                    @foreach($frontendSkills as $skill)
                                        <span>{{ $skill->data }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="skills-box">
                                <div class="skills-header">
                                    <h3>Backend</h3>
                                </div>
                                <div class="skills-list">
                                    @foreach($backendSkills as $skill)
                                        <span>{{ $skill->data }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="skills-box">
                                <div class="skills-header">
                                    <h3>Database</h3>
                                </div>
                                <div class="skills-list">
                                    @foreach($databaseSkills as $skill)
                                        <span>{{ $skill->data }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills & Education -->
            <section id="Education">
                <div class="skills-main-container">
                    <div class="top-header">
                        <h1>Learning Path</h1>
                    </div>
                    
                    <div class="skills-grid">
                        <div class="skills-left">
                            <h3 class="section-title">Education</h3>
                            
                            <!--perulangan edukasi -->
                            @foreach ($education as $education)
                            <div class="education">
                                <div class="line">
                                    <div></div>
                                </div>
                                <div class="education-info">
                                    <h5 class="education-title">{{ $education->school_name }}</h5>
                                    <p>{{ $education->majors }}</p>
                                    <h5 class="education-years">{{ $education->year }}</h5>
                                </div>
                            </div>
                            @endforeach
                            <!--penutub perulangan edukasi -->

                        </div>

                       
                    </div>
                </div>
            </section>
            <!-- End Skills & Education  -->


            <!-- -------------- PROJECT BOX ---------------- -->

            <section class="section" id="projects">
                <div class="top-header">
                    <h1>My Certified</h1>
                </div>


                    <!-- grid sertifikat -->
                    <div class="grid-3">

                      <!-- sertifikat2 -->
                     
                      @foreach ($certificate as $certificate)
                      <div class="portfolio">
                        <div class="portfolio-cover">
                          <img
                            src="{{ Storage::url($certificate->foto) }}"
                            alt="{{ $certificate->nama }}"
                          />
                        </div>
                        <div class="portfolio-info">
                          <div class="portfolio-title">
                            <h4>{{ $certificate->nama }}</h4>
                          </div>
                          <p>
                            {!! strip_tags($certificate->detail) !!}

                          </p>
                        </div>
                      </div> 
                      @endforeach
                      <!-- batas sertifikat 2 -->
                        
                    </div>
                    <!-- batas grid sertifikat-->







                <div class="portfolios main-container">
                    <div class="top-header">
                        <br>
                        <br>
                        <h1>My Works</h1>
                    </div>
            

                <!-- GRID perulangan project -->
                      <div class="grid-3">
                        @foreach ($project as $project)
                          <div class="portfolio">
                            <div class="portfolio-cover">
                              @if($project->foto)
                              <img src="{{ Storage::url($project->foto) }}" alt="{{ $project->name }}">
                              @else
                              <img src="{{ asset('img/portofolios/default.png') }}" alt="Default Image">
                              @endif
                            </div>
                            <div class="portfolio-info">
                              <div class="portfolio-title">
                                <h4>{{ $project->name }}</h4>
                                <a href="{{ $project->link }}" class="portfolio-link" target="_blank">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/>
                                  </svg>
                                </a>
                              </div>
                              <p>{!! strip_tags($project->detail) !!}</p>
                            </div>
                          </div>
                          @endforeach
                          
                    </div> <!-- penutup GRID perulangan project -->





                  </div>
            </section>

            <!-- -------------- CONTACT BOX ---------------- -->

            <section class="section" id="contact">
                <div class="top-header">
                    <h1>Get in touch</h1>
                    <span>Do you have a project in your mind, contact me here</span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="contact-info">
                            <h2>Contact Me <i class="uil uil-corner-right-down"></i></h2>
                            <p> <a href="mailto:{{ $contact->email }}" target="_blank" style="text-decoration:none; color:unset;"> <i class="uil uil-envelope"></i> Email: {{ $contact->email }} </a></p>

                            <p><i class="uil uil-phone"></i> Tel: +{{ $contact->tlp }}</p>

                            <p> <a href="https://wa.me/{{ $contact->wa }}" target="_blank" style="text-decoration:none; color: unset;"> <i class="uil uil-whatsapp"></i> WA: +{{ $contact->wa }} </a> </p>

                        </div>
                    </div>
                    <div class="col">
                                                            <article class="Address" data-page="adress">

                                <header>
                                  <h2 class="h2 article-title">My Adress</h2>
                                </header>

                                <section class="mapbox" data-mapbox>
                                  <figure>
                                    <iframe
                                      src="{{ $contact->alamat }}" width="400" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                      width="400" height="300" loading="lazy"></iframe>
                                  </figure>
                                </section>
                              </article>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        <!-- --------------- FOOTER --------------- -->
        <footer>
            <div class="top-footer">
                <p>{{ $profile->logonama }}.</p>
            </div>
            <div class="middle-footer">
                <ul class="footer-menu">
                    <li class="footer_menu_list">
                        <a href="#home">Home</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#about">About</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#Education">Education</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-social-icons">
                <div class="icon"><a href="https://www.instagram.com/{{ $contact->ig }}/" target="_blank"><i class="uil uil-instagram"></i></a></div>
                <div class="icon"><a href="https://wa.me/{{ $contact->wa }}" target="_blank"><i class="uil uil-whatsapp"></i></a></i></div>
                <div class="icon"><a href="https://github.com/{{ $contact->github }}" target="_blank"><i class="uil uil-github-alt"></i></a></div>
            </div>
            <div class="bottom-footer">
                <p>Copyright &copy; <a href="meiyu.my.id" style="text-decoration: none;">meiyu.my.id</a></p>
            </div>
        </footer>

    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="{{ asset('script/script.js') }}"></script>

    <!-- ----- Memangil perulangan dalam javascript ----- -->
    <script type="application/json" id="myTitles">
        @json($mytitle->pluck('titlename'))
    </script>
    

</body>

</html>
