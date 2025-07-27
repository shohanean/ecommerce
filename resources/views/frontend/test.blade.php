@extends('layouts.frontend')

@section('header_scripts')
    {{-- <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/easyzoom/example.css" /> --}}
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/easyzoom/pygments.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/easyzoom/easyzoom.css" />
@endsection

@section('content')
    <h1>First</h1>
    <h3>With thumbnail images</h3>

    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
        <a href="{{ asset('frontend_assets') }}/img/example-images/3_zoom_1.jpg">
            <img src="{{ asset('frontend_assets') }}/img/example-images/3_standard_1.jpg" alt="" width="640"
                height="360" />
        </a>
    </div>

    <ul class="thumbnails">
        <li>
            <a href="{{ asset('frontend_assets') }}/img/example-images/3_zoom_1.jpg"
                data-standard="{{ asset('frontend_assets') }}/img/example-images/3_standard_1.jpg">
                <img src="{{ asset('frontend_assets') }}/img/example-images/3_thumbnail_1.jpg" alt="" />
            </a>
        </li>
        <li>
            <a href="{{ asset('frontend_assets') }}/img/example-images/3_zoom_2.jpg"
                data-standard="{{ asset('frontend_assets') }}/img/example-images/3_standard_2.jpg">
                <img src="{{ asset('frontend_assets') }}/img/example-images/3_thumbnail_2.jpg" alt="" />
            </a>
        </li>
        <li>
            <a href="{{ asset('frontend_assets') }}/img/example-images/3_zoom_3.jpg"
                data-standard="{{ asset('frontend_assets') }}/img/example-images/3_standard_3.jpg">
                <img src="{{ asset('frontend_assets') }}/img/example-images/3_thumbnail_3.jpg" alt="" />
            </a>
        </li>
        <li>
            <a href="{{ asset('frontend_assets') }}/img/example-images/3_zoom_4.jpg"
                data-standard="{{ asset('frontend_assets') }}/img/example-images/3_standard_4.jpg">
                <img src="{{ asset('frontend_assets') }}/img/example-images/3_thumbnail_4.jpg" alt="" />
            </a>
        </li>
    </ul>
    <h1>Last</h1>
@endsection

@section('footer_scripts')
    <script src="{{ asset('frontend_assets') }}/js/easyzoom.js"></script>
    <script>
        // Instantiate EasyZoom instances
        var $easyzoom = $(".easyzoom").easyZoom();

        // Setup thumbnails example
        var api1 = $easyzoom
            .filter(".easyzoom--with-thumbnails")
            .data("easyZoom");

        $(".thumbnails").on("click", "a", function(e) {
            var $this = $(this);

            e.preventDefault();

            // Use EasyZoom's `swap` method
            api1.swap($this.data("standard"), $this.attr("href"));
        });

        // Setup toggles example
        var api2 = $easyzoom.filter(".easyzoom--with-toggle").data("easyZoom");

        $(".toggle").on("click", function() {
            var $this = $(this);

            if ($this.data("active") === true) {
                $this.text("Switch on").data("active", false);
                api2.teardown();
            } else {
                $this.text("Switch off").data("active", true);
                api2._init();
            }
        });
    </script>
@endsection
