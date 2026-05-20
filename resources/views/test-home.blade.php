@extends('component.master')
@section('title','Home')
@section('content')


<!-- <section class="hero-section">
    <div class="container test">
        <div class="hero-content">
            <h1>WELCOME TO NET ZERO MARKET</h1>
            <p>THE HUB OF SUSTAINABLE COMMUNITIES</p>
            <a href="#menu" class="btn">View Menu</a>
        </div>
    </div>
</section> -->
<div class="video-background position-relative w-100 vh-100">
    <video class="position-absolute top-50 start-50 w-100 h-100 object-fit-cover" autoplay muted loop>
        <source src="assets/images/video2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content position-relative text-white text-center p-5">
        <h1 class="display-1">WELCOME TO NET ZERO MARKET</h1>
        <h4 class="fs-3">THE HUB OF SUSTAINABLE COMMUNITIES</h4>
    </div>
</div>

<div class="container p1_2 py-5">
    <div class="row">
        <div class="col-md-4">
            <div class="inner text-left">
                <div class="image-wrapper mb-4">
                    <img src="assets/images/bbbq-free-img.png" alt="BBQ Place Logo" class="img-fluid"
                        style="width: 50px; height: 50px;">
                </div>
                <div class="heading mb-3">
                    <h2>Eating With Seasons</h2>
                </div>
                <div class="divider mb-4">
                    <img src="assets/images/divider-free-img-1.png" alt="Divider" class="img-fluid"
                        style="width: 200px; height: 35px;">
                </div>
                <div class="subheading mb-3">
                    <h6>Eating With The Seasons Is Another Way To Reduce Energy Consumption In Food Production.</h6>
                </div>
                <div class="text mb-3">
                    <p>Seasonal food requires less energy as it doesn't need to be grown in heated greenhouses.</p>
                </div>
                <div class="text mb-3">
                    <p>It also tends to be grown locally, resulting in fewer emissions from transportation. In addition
                        to the environmental benefits, seasonal food is bursting with flavor and nutrition. Foraging for
                        fallen fruit or berries, if available, can also be a fun and sustainable activity.</p>
                </div>
                <div class="button">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="imgcontainer d-flex justify-content-center gap-3">
                <div class="image-section text-center mb-4">
                    <img src="assets/images/barbecue-food-1.jpg" alt="Barbecue Food 1" class="img-fluid"
                        style="width: 400px; height: 600px; object-fit: cover;">
                </div>
                <div class="image-section text-center mb-4">
                    <img src="assets/images/barbecue-foods-2.jpg" alt="Barbecue Foods 2" class="img-fluid"
                        style="width: 400px; height: 600px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection