 <!-- News Section -->
  <section class="news-section">
    <div class="auto-container">
      <div class="row">
        <!-- News Block-->
          @foreach($publications as $publication)
              <div class="news-block col-xl-4 col-md-6 wow fadeInUp">
                  <div class="inner-box">
                      <div class="image-box">
                          <figure class="image">
                              <a href={{ route('publicationDetails', ['article' => $publication->slug]) }}>
                                  <img src={{ asset(sprintf("storage/%s", $publication->image)) }} alt="">
                              </a>
                          </figure>
                          <span class="date"><b>{{ \Carbon\Carbon::parse($publication->created_at)->format('d') }}</b> <small>{{ \Carbon\Carbon::parse($publication->created_at)->format('D, Y') }}</small></span>
                      </div>
                      <div class="content-box"> <span class="user"><i class="fa fa-user"></i> {{ $publication->author }}</span>
                          <h4 class="title">
                              <a href={{ route('publicationDetails', ['article' => $publication->slug]) }}>
                                  {{ $publication->title }}
                              </a>
                          </h4>
                          <ul class="post-info">
                              <li><i class="fa fa-folder"></i>{{ $publication->category }}</li>
                              <li><i class="fa fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($publication->created_at)->format('d/m/y H:i') }}</li>
                          </ul>
                      </div>
                  </div>
              </div>
          @endforeach

        <!-- News Block-->
      </div>
    </div>
  </section>
  <!--End News Section -->
