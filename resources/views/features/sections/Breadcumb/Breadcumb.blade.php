<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">{{ $title }}</h1>
            <ul class="page-breadcrumb">
                @foreach($path as $key => $value)
                    <li><a href="{{ $value }}">{{ $key }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
