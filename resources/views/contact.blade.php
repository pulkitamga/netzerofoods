@extends('component.master')

@section('content')

<!-------------content---------->
<div class="section_margin">
    <div class="sec">
        <div class="container">
            <h1 class="page-head">contact us</h1>
            @if(session('success'))
            <p>{{ session('success') }}</p>
            @endif
            <div class="row">
                <div class="col-lg-5">
                    <p class="con-head">Bring A Net Zero <br>Market To Your Town</p>
                    <p>Net Zero Markets works like a magnet to attract and promote local sustainable food trading.</p>
                    <p>We can work in any area, and invite local tradespeople to operate at our market. Of course, they
                        must
                        comply with our <sustainability charter> - and provide offerings which are locally sourced,
                            seasonal, organic or just artisanal - we are zero plastic, zero waste and we promote only
                            healthy food which is better for people and planet.</p>
                    <h3>Address: </h3>
                    <p class="mb-0">123 High Street, London, UK, SW1A 1AA</p>

                    <h3>Phone: </h3>
                    <p class="mb-0">+44 20 1234 5678</p>
                    <h3>Email:</h3>
                    <p>info@burgerheaven.co.uk</p>

                    <h3>Opening Hours:</h3>
                    <p>-<b>Monday to Friday</b>: 11:00 AM - 11:00 PM<br>
                        -<b>Saturday</b>: 12:00 PM - 11:00 PM<br>
                        -<b>Sunday</b>: 12:00 PM - 10:00 PM</p>
                    <p>Net zero is all about balancing or canceling out the carbon emissions we produce. It means that
                        the
                        amount of greenhouse gas we produce is no more than the amount taken away. Zero carbon refers to
                        products or services that emit no carbon at all.
                    </p>
                    <div class="adr-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.6703869497087!2d-0.1953126240595426!3d51.500915911177884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760ff6c45fddf9%3A0xbfb1c1f476b95ab7!2s123%20Kensington%20High%20St%2C%20London%20W8%205SF%2C%20UK!5e0!3m2!1sen!2sin!4v1720973561498!5m2!1sen!2sin"
                            width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
                <div class="col-lg-7">
                    <div class="con-fb">
                        <h2>APLICATION TO TRADE</h2>
                        <h4>If you’d like to be considered to trade at one of our market locations, please complete the
                            form
                            below. Thank you</h4>
                        <form action="{{ route('contact') }}" method="POST">
                            @csrf
                            <div class="con-fb-col">
                                <input type="text" name="name" placeholder="Names" />
                            </div>
                            <div class="con-fb-col">
                                <input type="text" name="email" placeholder="Email" />
                            </div>
                            <div class="con-fb-col">
                                <input type="text" name="phone" placeholder="Phone" />
                            </div>
                            <div class="con-fb-col">
                                <input type="text" name="subject" placeholder="Subject" />
                            </div>
                            <div class="con-fb-col">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="con-fb-col">
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <div class="con-fb-col mb-0">
                                <button type="submit" class="con-btn">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection