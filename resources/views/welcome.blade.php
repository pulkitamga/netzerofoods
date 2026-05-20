@extends('component.master')
@section('title','Home')
@section('content')

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<!-------------Banner---------->
<section class="banner-home">
    <div class="home-banner">
        <img src="assets/images/banner.jpg" alt="" />
        <div class="banner-caps">
            <h1>Welcome To Net Zero Market</h1>
            <span>the hub of sustainable communities</span>
        </div>
    </div>
</section>
<!-------------content---------->
<section class="sec">
    <div class="container">
        <div class="mar-sec">
            <p class="t-blue">Net Zero Markets is a platform dedicated to promoting sustainable communities and helping
                the UK to reach its net zero target. </p>
            <h2><a href="{{ route('NetZeroMarket') }}">What is Net Zero markets?</a></h2>
            <!-- <p>Net zero is all about 'balancing' or cancelling out any carbon we produce. We reach net zero when the
                amount of greenhouse gas we produce is no more than the amount taken away. Zero carbon concerns the
                emissions produced from a product or service – it means no carbon is given off at all.</p>
            <p>By making healthy, sustainable food choices and eating greener we can all play our part in helping
                Scotland reach its net zero target. Net zero is when the amount of greenhouse gas emissions we put into
                the atmosphere and the amount we’re able to take out adds up to zero. Plus, if we eat well, we feel
                better too. A healthy, balanced diet can help us maintain a healthy weight and keep us fighting fit. 
            </p> -->
        </div>
        <div class="ben-sec">
            <h2>Benefits.</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <span class="ben-icon"><img src="assets/images/security-system.png" alt="" /></span>
                    <p>Save on food transportation and storage.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <span class="ben-icon"><img src="assets/images/map.png" alt="" /></span>
                    <p>Strengthen your ties with the local community</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <span class="ben-icon"><img src="assets/images/fast-food.png" alt="" /></span>
                    <p>Support the growth of the local economy.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <span class="ben-icon"><img src="assets/images/gazebo.png" alt="" /></span>
                    <p>Attract customers who value sustainability</p>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="sec">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-md-6 img-full"><img src="assets/images/sec-img-1.png" alt="" /></div>
            <div class="col-md-6">
                <h4><a href="{{ route('EatingWithTheSeason') }}">Eating with the seasons is another way to reduce energy
                        consumption in food production.</h4></a>
                <p>
                    <b>Seasonal food requires less energy as it doesn't need to be grown in heated greenhouses.

                    </b> It
                    also tends to be grown locally, resulting in fewer emissions from transportation. In addition to the
                    environmental benefits, seasonal food is bursting with flavor and nutrition. Foraging for fallen
                    fruit or berries, if available, can also be a fun and sustainable activity.
                </p>

                <!-- <p>Choosing organic food contributes to reducing energy use and emissions.</p>
                Organic farms use less
                energy and limit the use of imported resources. They rely on natural fertilizers, such as green manures
                and animal manures, instead of manufactured chemical fertilizers. Organic standards also restrict the
                use of peat, which is important for combating climate change. In addition, organic farming bans GM
                animal feed, which is commonly used in non-organic farming.
                </p>
                <p>By opting for organic, we support sustainable farming practices and reduce our carbon footprint.</p>
                <p>By opting for organic, we support sustainable farming practices and reduce our carbon footprint.</p>
                <p>Growing your own food is an excellent way to cut down on food miles, packaging waste, and emissions.
                    It allows you to eat fresh and in-season produce while reducing your greenhouse gas emissions. </p>
                <p><b>You don't need a large garden to grow your own food - herbs can be planted in window boxes, and
                        potted fruits or vegetables can be grown on small patios.</b> If you don't have access to a
                    garden, you can explore options like applying for an allotment, volunteering at a community garden,
                    or participating in a garden share scheme. Just make sure to follow the coronavirus guidance for the
                    safe use of community gardens and allotments.</p> -->

            </div>

        </div>
    </div>
</div>
<section class="sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 img-full pl-0"><img src="assets/images/sec-img-2.jpg" alt="" /></div>
            <div class="col-md-6">
                <div class="col-center">
                    <p class="t-blue">Net Zero Markets is a platform dedicated to promoting sustainable communities
                        and
                        helping the UK to reach its net zero target. </p>
                    <h2>Eating with the seasons is another way to reduce energy consumption in food production</h2>
                    <!-- <h4>Seasonal food requires less energy as it doesn't need to be grown in heated greenhouses. It
                        also
                        tends to be grown locally, resulting in fewer emissions from transportation. </h4> -->
                    <!-- <p>Net zero is all about balancing or canceling out the carbon emissions we produce. It means
                        that
                        the amount of greenhouse gas we produce is no more than the amount taken away. Zero carbon
                        refers to products or services that emit no carbon at all.</p>
                    <p>Making healthy and sustainable food choices and eating greener can contribute to reaching net
                        zero. By eating local, we reduce carbon emissions from transportation and storage. Scotland
                        is
                        renowned for its delicious produce, including fruits, vegetables, meat, fish, and dairy.
                        Eating
                        local not only benefits the environment but also supports the local economy and producers,
                        which
                        is especially important in the aftermath of the coronavirus pandemic.</p> -->
                    <a class="custom-btn" href="/about">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sep-border"><img src="assets/images/Separator.png" alt="" /></div>
<section class="sec">
    <div class="container-fluid">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-md-6 img-full pr-0"><img src="assets/images/sec-img-3.jpg" alt="" /></div>
            <div class="col-md-6">
                <div class="col-left">
                    <p class="t-blue">Eat Organic</p>
                    <h2>Organic farms use less energy, and tend to have lower emissions</h2>
                    <p>On average, organic farms use less energy than non-organic farms. This is because organic
                        standards encourage farmers to ‘close the loop’, making use of what’s to hand and limiting
                        the
                        use of imported resources. It’s this respect for the natural world and ability to work with
                        nature that makes organic farming better for the planet:</p>
                    <ul class="sec-list">
                        <li><span>*</span>
                            <p>Organic farming reduces greenhouse gas emissions by severely restricting the use of
                                manufactured chemical fertilisers, which are often imported from abroad and come
                                from
                                burning fossil fuels. Instead, farmers rely on natural fertilisers, which can be
                                sourced
                                locally or from their own farm like green manures, animal manures and ‘cover crops’
                                to
                                fix nutrients, as well as crop rotations.</p>
                        </li>
                        <li><span>*</span>
                            <p>Soil Association organic standards severely restrict the use of peat in composts.
                                Peat
                                comes from peatlands and peat bogs – they are an important carbon sink and a
                                valuable
                                part of our ecosystem, which are vital for combatting climate change.</p>
                        </li>
                        <li><span>*</span>
                            <p>GM animal feed is banned under organic standards. Most non-organic British chickens,
                                pigs
                                and cows are fed with GM crops, like maize and soya, which are imported from abroad.
                                Organic cows must be fed a minimum of 60% grass-based diet, rather than other feeds
                                like
                                cereals and soya, which are often imported.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec new-l">
    <img src="assets/images/sec-img-full1.jpg" alt="" />

    <form action="" id="subscribe-form">
        @csrf
        <div class="new-lb">
            <h2>Subscribe to our newsletter</h2>
            <div id="success-message" style="display: none; color: white;"></div>
            <div id="error-message" style="display: none; color: white;"></div>
            <div class="new-lr">
                <input id="email" type="email" name="email"
                    placeholder="Galleons stand prophet thieves prefect’s veela follow doxycide snitch. " />
                <button type="submit">Subscribe</button>
            </div>
            <div class="sep-border"><img src="assets/images/Separator.png" alt="" /></div>
        </div>
    </form>
</section>
<section class="sec gallary-sec">
    <div class="container">
        <p class="t-blue">A Visual Journey Through Light and Color</p>
        <h2>gallery market</h2>
        <div class="gallery-row">
            <div class="gallery-col"><a href="assets/images/gallary-img1.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img1.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img2.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img2.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img3.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img3.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img4.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img4.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img5.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img5.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img6.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img6.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img7.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img7.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img8.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img8.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img9.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img9.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img10.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img10.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img11.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img11.jpg" alt="" /></a></div>
            <div class="gallery-col"><a href="assets/images/gallary-img12.jpg" data-fancybox="gallery"
                    data-caption="Caption Images 1"><img src="assets/images/gallary-img12.jpg" alt="" /></a></div>
        </div>
    </div>
</section>

@endsection

@section('subscribejs')

<script>
$(document).ready(function() {
    console.log("Document is ready");
    $('#subscribe-form').on('submit', function(e) {
        e.preventDefault();
        console.log("Form submission intercepted");

        $.ajax({
            url: "{{route('subscribe')}}", // Make sure this is the correct URL for your form submission
            type: 'POST',
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                console.log("Success:", response);
                $('#success-message').text("Form submitted successfully!").show();
                $('#error-message').hide();
                $('#subscribe-form')[0].reset(); // Clear the form fields
            },
            error: function(xhr) {
                console.log("Error:", xhr);
                $('#error-message').text("An error occurred. Please try again.").show();
                $('#success-message').hide();
            }
        });
    });
});
</script>

@endsection