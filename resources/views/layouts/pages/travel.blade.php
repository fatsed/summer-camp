<style>

        .container {
            max-width: 1156px;
        }
        .card-trip {
            margin: 35px;
            overflow: hidden;
            background:#FFFFFF;
            box-shadow: 0 0 15px rgb(43, 43, 43);
            width:300px;
            display: inline-block;
            color:black;
        }

        .card-trip > img {
            height: 200px;
            width: 300px;
            object-fit: cover;

        }

        .card-trip h2 {
            font-size: 17px;
            font-weight: bold;
            margin: 0;
        }

        .card-trip p {
            font-size: 12px;
            opacity: 0.7;
            margin: 0;
        }


        .card-trip .card-trip-infos {
            padding: 16px;
            justify-content: space-between;
            align-items: flex-end;
            position: relative;
        }

        .card-trip-infos .card-trip-user {
            position: absolute;
            right: 6px;
            top: -14px;
            width: 49px;
            height:49px;
            border-radius: 50%;
        }
        .card-trip:hover {
            webkit-transform: scale(.6);
            -moz-transform: scale(.6);
            -ms-transform: scale(.6);
            -ms-transform: scale(.6);
            -ms-transform: scale(.6);
            transform: scale(1.2);
            transition: 0.9s;
        }

        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .badge {
                transition: none; } }
        a.badge:hover, a.badge:focus {
            text-decoration: none; }
        .badge:empty {
            display: none; }

        .badge-pill {
            padding-right: 0.6em;
            padding-left: 0.6em;
            border-radius: 10rem; }

        .badge-primary {
            color: #fff;
            background-color: #0090e7; }
        a.badge-primary:hover, a.badge-primary:focus {
            color: #fff;
            background-color: #0070b4; }
        a.badge-primary:focus, a.badge-primary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 144, 231, 0.5); }

        .badge-secondary {
            color: #212529;
            background-color: #e4eaec; }
        a.badge-secondary:hover, a.badge-secondary:focus {
            color: #212529;
            background-color: #c6d3d7; }
        a.badge-secondary:focus, a.badge-secondary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(228, 234, 236, 0.5); }

        .badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
            color: #fff;
            background-color: #00d25b; }
        a.badge-success:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:hover, a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus {
            color: #fff;
            background-color: #009f45; }
        a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus, a.badge-success.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-online {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 210, 91, 0.5); }

        .badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
            color: #fff;
            background-color: #8f5fe8; }
        a.badge-info:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:hover, a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus {
            color: #fff;
            background-color: #7032e2; }
        a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus, a.badge-info.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-offline {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(143, 95, 232, 0.5); }

        .badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
            color: #212529;
            background-color: #ffab00; }
        a.badge-warning:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:hover, a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus {
            color: #212529;
            background-color: #cc8900; }
        a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus, a.badge-warning.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-busy {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(255, 171, 0, 0.5); }

        .badge-danger {
            color: #fff;
            background-color: #fc424a; }
        a.badge-danger:hover, a.badge-danger:focus {
            color: #fff;
            background-color: #fb101a; }
        a.badge-danger:focus, a.badge-danger.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(252, 66, 74, 0.5); }

        .badge-light {
            color: #212529;
            background-color: #ffffff; }
        a.badge-light:hover, a.badge-light:focus {
            color: #212529;
            background-color: #e6e6e6; }
        a.badge-light:focus, a.badge-light.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

        .badge-dark {
            color: #fff;
            background-color: #0d0d0d; }
        a.badge-dark:hover, a.badge-dark:focus {
            color: #fff;
            background-color: black; }
        a.badge-dark:focus, a.badge-dark.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(13, 13, 13, 0.5); }

</style>
<div class="section-header">
    <h2>trip</h2>
    <p>travel <span>with us</span></p>
</div>
<div class="container" id="menu">
    @foreach($travels as $travel)
    <div class="card-trip">
        <img src="{{$travel->TravelPicture}}">
        <div class="card-trip-infos">
            <div>
                <h2>{{ $travel->title}}</h2>
                <p>{{$travel->TravelAddress}}</p>
            </div>
             <br>
            <h2 class="card-trip-pricing">{{ $travel->price}}$ </h2>
            <span class="badge badge-warning"> discount trip:{{$travel->discount_trip}}</span>
            <br>



            <p class="badge badge-primary">it takes day:{{ $travel->it_takes_day}} |  departure:{{$travel->departure_date}}</p>
            @foreach($tourGuides as $tourguide)
            <img src='{{$tourguide->TourGuideImg}}' class="card-trip-user avatar-bordered"/>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
