
<!-- ======= tourguid Section ======= -->
<section id="tour" class=" chefs tourguid section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Tourguide</h2>
            <p>Our <span>Proffesional</span>Tourguide</p>
        </div>
        <div class="row gy-4">
            @foreach($tourguides as $tourguide)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="tourguid-member chefs-member">
                    <div class="member-img">
                        <img src="{{$tourguide->TourGuideImg}}" class="img-fluid" alt="" style="height: 290px;">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{ $tourguide->TourGuideName}} {{$tourguide->TourGuideFamily}}</h4>
                        <span>{{$tourguide->TourGuideEmail}}</span>
                        <p>{{$tourguide->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
