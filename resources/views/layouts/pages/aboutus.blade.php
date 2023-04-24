<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
            @foreach ($abouts as $about)
            <div class="col-lg-7 position-relative about-img"
                 style="background-image: url(assets/img/11.jpg);background-size: cover;" data-aos="fade-up"
                 data-aos-delay="150">
                <div class="call-us position-absolute">
                    <h4>{{$about->Name}}</h4>
                    <p>{{$about->email}}</p>
                    <p>{{ $about->numberUs}}</p>
                </div>
            </div>
            @endforeach
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                <div class="content ps-0 ps-lg-5">
                    @foreach ($abouts as $about)
                    <p class="fst-italic">
                        {{ $about->text}}
                    </p>
                     <p>address:   {{ $about->address}}</p>
                    @endforeach
                    <ul>
                        <li style="color: #222222;"><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</li>
                        <li style="color: #222222;"><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li style="color: #222222;"><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute
                            irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                            fugiat nulla
                            pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident
                    </p>

                    <div class="position-relative mt-4">
                        <img src="assets/img/pic (2).jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

