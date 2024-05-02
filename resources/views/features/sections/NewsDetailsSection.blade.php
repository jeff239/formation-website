<!--Blog Details Start-->
<section class="blog-details">
    <div class="container pb-100">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src={{ asset(sprintf('storage/%s',$publication->image)) }} alt="">
                        <div class="blog-details__date">
                            <span class="day">{{ \Carbon\Carbon::parse($publication->created_at)->format('d') }}</span>
                            <span class="month">{{ \Carbon\Carbon::parse($publication->created_at)->format('M') }}</span>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><i class="fas fa-user-circle"></i> {{ $publication->author }} </li>
{{--                            <li>--}}
{{--                                <a href="news-details.html"><i class="fas fa-comments"></i> 02 Comments</a>--}}
{{--                            </li>--}}
                        </ul>
                        <h3 class="blog-details__title">{{ $publication->title }}</h3>
                        <p class="blog-details__text-2">{!! $publication->content !!}
                        </p>
                    </div>
{{--                    <div class="blog-details__bottom">--}}
{{--                        <p class="blog-details__tags"> <span>Tags</span> <a href="news-details.html">Business</a> <a href="news-details.html">Agency</a> </p>--}}
{{--                        <div class="blog-details__social-list"> <a href="news-details.html"><i class="fab fa-twitter"></i></a> <a href="news-details.html"><i class="fab fa-facebook"></i></a> <a href="news-details.html"><i class="fab fa-pinterest-p"></i></a> <a href="news-details.html"><i class="fab fa-instagram"></i></a> </div>--}}
{{--                    </div>--}}
{{--                    <div class="nav-links">--}}
{{--                        <div class="prev">--}}
{{--                            <a href="news-details.html" rel="prev">Bring to the table win-win survival strategies</a>--}}
{{--                        </div>--}}
{{--                        <div class="next">--}}
{{--                            <a href="news-details.html" rel="next">How to lead a healthy &amp; well-balanced life</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="comment-one">
                        <h3 class="comment-one__title">2 commentaire(s)</h3>
                        @foreach($commentaires as $commentaire)
                        <div class="comment-one__single" style="margin-bottom: 30px;padding-bottom: 0; border-bottom: none">
{{--                            <div class="comment-one__image"> <img src="https://via.placeholder.com/100x100" alt=""> </div>--}}
                                <div class="comment-one__content">
                                    <h3>{{ $commentaire->nom }} a commenté :</h3>
                                    <p>{{ $commentaire->content }}</p>
                                    {{--                                <a href="news-details.html" class="theme-btn btn-style-one comment-one__btn"><span class="btn-title">Reply</span></a>--}}
                                </div>
                        </div>
                        @endforeach
                        <div style="margin-bottom: 30px;">{{ $commentaires->links() }}</div>
                        <div class="comment-form">
                            <h3 class="comment-form__title mb-30">Laissez un commentaire</h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="contact_form" name="contact_form" class="" action="{{ route('postComment') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="nom" class="form-control" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="content" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input name="publication" class="form-control" type="hidden" value={{ $publication->slug }} />
                                    <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Soumettre le commentaire</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
{{--                    <div class="sidebar__single sidebar__search">--}}
{{--                        <form action="#" class="sidebar__search-form">--}}
{{--                            <input type="search" placeholder="Search here">--}}
{{--                            <button type="submit"><i class="lnr-icon-search"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Dernières Publications</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($latestPublications as $latest)
                                <li>
                                    <div class="sidebar__post-image"> <img src={{ asset(sprintf('storage/%s',$latest->image)) }} alt=""> </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta">
                                                <i class="fas fa-user-circle"></i>Admin
                                            </span>
                                            <a href={{ route('publicationDetails', ['article'=> $latest->slug]) }}>Top crypto exchange influencers</a>
                                        </h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach($categories as $categorie)
                                <li @class( [ 'active' => $categorie->name == 'Sciences' ])>
                                    <a href={{ route('publicationsCategorie',['categorie'=> $categorie->name]) }}>
                                        {{ $categorie->name }}
                                    <span class="icon-right-arrow">
                                    </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
{{--                    <div class="sidebar__single sidebar__tags">--}}
{{--                        <h3 class="sidebar__title">Tags</h3>--}}
{{--                        <div class="sidebar__tags-list"> <a href="#">Consulting</a> <a href="#">Agency</a> <a href="#">Business</a> <a href="#">Digital</a> <a href="#">Experience</a> <a href="#">Technology</a> </div>--}}
{{--                    </div>--}}
{{--                    <div class="sidebar__single sidebar__comments">--}}
{{--                        <h3 class="sidebar__title">Recent Comments</h3>--}}
{{--                        <ul class="sidebar__comments-list list-unstyled">--}}
{{--                            <li>--}}
{{--                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>--}}
{{--                                <div class="sidebar__comments-text-box">--}}
{{--                                    <p>A wordpress commenter on <br>--}}
{{--                                        launch new mobile app--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>--}}
{{--                                <div class="sidebar__comments-text-box">--}}
{{--                                    <p> <span>John Doe</span> on template:</p>--}}
{{--                                    <h5>comments</h5>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>--}}
{{--                                <div class="sidebar__comments-text-box">--}}
{{--                                    <p>A wordpress commenter on <br>--}}
{{--                                        launch new mobile app--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>--}}
{{--                                <div class="sidebar__comments-text-box">--}}
{{--                                    <p> <span>John Doe</span> on template:</p>--}}
{{--                                    <h5>comments</h5>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
