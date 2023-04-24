
<section id="why-us" class="why-us section-bg">
    <div class="section-header">
        <h2>article</h2>
        <p>article <span>with us</span></p>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center">
                <div class="row ">
                    @foreach ($articles as $article)
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ $article->ArticlePicture}}" width="70px" height="70px" style="border-radius: 50%">
                            <h4 style="color: #101010;">{{ $article->title}}</h4>
                            <p>{{ $article->abstract}}</p>
                            <p>{{ $article->time}}</p>
                            <span>{{ $article->writer}}</span>
                        </div>
                    </div><!-- End Icon Box -->
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section><!-- End Why Us Section -->
