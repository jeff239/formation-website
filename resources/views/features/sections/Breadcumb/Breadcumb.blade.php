<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset(sprintf("storage/%s", $banner ?? '')) }});">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">{{ $breadcumbData['title'] }}</h1>
            <ul class="page-breadcrumb">
                @foreach($breadcumbData['path'] as $key => $value)
                    <li><a href="{{ $value }}">{{ $key }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
