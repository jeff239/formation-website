<!--Start Services Details-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <!--Start Services Details Sidebar-->
            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">
                    <!--Start Services Details Sidebar Single-->
                    <div class="sidebar-widget service-sidebar-single">
                        <div class="sidebar-service-list">
                            <ul>
                                @foreach($listFormations as $element)
                                    <li @class(['current' => $element->title == $formation->title])>
                                        <a href={{ route('formationDetails', ['formation' => $element->slug] ) }} >
                                            <i class="fas fa-angle-right"></i>
                                            <span>{{ $element->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="service-details-help">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                            <div class="help-icon">
                                <span class=" lnr-icon-phone-handset"></span>
                            </div>
                            <div class="help-contact">
                                <p>Need help? Talk to an expert</p>
                                <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                            </div>
                        </div>

                        <!--Start Services Details Sidebar Single-->
{{--                        <div class="sidebar-widget service-sidebar-single mt-4">--}}
{{--                            <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">--}}
{{--                                <a href="#" class="theme-btn btn-style-one d-grid"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <!--End Services Details Sidebar-->
                </div>
            </div>

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <img src={{ asset(sprintf("storage/%s", $formation->image)) }} alt="">
                    <h3 class="mt-4">{{ $formation->title }}</h3>
                    {!! $formation->content !!}
{{--                    <div class="content mt-40">--}}
{{--                        <div class="text">--}}
{{--                            <h3>Service Center</h3>--}}
{{--                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                            <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur</blockquote>--}}
{{--                        </div>--}}
{{--                        <div class="feature-list mt-4">--}}
{{--                            <div class="row clearfix">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-12 column">--}}
{{--                                    <img class="mb-3" src="https://via.placeholder.com/450x250" alt="images" />--}}
{{--                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-12 column">--}}
{{--                                    <img class="mb-3" src="https://via.placeholder.com/450x250" alt="images" />--}}
{{--                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="innerpage mt-25">
                        <h3>Questions posées frequemment</h3>
                        <ul class="accordion-box wow fadeInRight">
                            <!--Block active-block-->
                            @foreach($questions as $question)
                                <li class="accordion block">
                                    <div class="acc-btn"> {{ $question->title }}
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">{{ $question->content }}</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                            <!--Block-->
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->
