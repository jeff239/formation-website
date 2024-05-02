<!-- service-section-Four -->
<section class="services-section-two pt-120 mt-0 before-none">
    <div class="small-container">
        <div class="row">
            <!-- Service Block Two-->
            @foreach($formations as $formation)
                <div class="service-block-two col-lg-4 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href={{ route('formationDetails', ['formation' => $formation->slug]) }}>
                                    <img src={{ asset(sprintf('storage/%s',$formation->image)) }} alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <div class="inner"><i class="icon flaticon-production"></i>
                                <div class="info-box">
                                    <h4>
                                        <a href={{ route('formationDetails', ['formation' => $formation->slug]) }} class="title">
                                            {{ $formation->title }}
                                        </a>
                                    </h4>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Service Block Two-->
        </div>
    </div>
</section>
<!-- End service-section two -->
