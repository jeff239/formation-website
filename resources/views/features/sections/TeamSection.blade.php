<!-- team section -->
<section class="team-section-three pt-0 pb-0">
    <div class="small-container">
        <div class="sec-title-two text-center"> <span class="sub-title">Les membres de notre équipe</span>
            <h2>Rencontrez nos Experts</h2>
        </div>
        <div class="row">
            <!-- team-block-three -->
            @foreach($formateurs as $formateur)
                <div class="team-block-three col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image overlay-anim">
                                <img src="https://via.placeholder.com/330x388" alt="">
                            </figure>
                        </div>
                        <div class="content-box">
                            <h4 class="title">{{ $formateur->nom }}</h4>
                            <span>{{ $formateur->titre }}</span>
                            <ul class="social-icon">
                                <li><a href="{{ $formateur->link_twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="{{ $formateur->link_facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{ $formateur->link_linkedin }}"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- team-block-three -->
        </div>
    </div>
</section>
<!-- End team section -->
