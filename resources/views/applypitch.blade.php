@extends('component.master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<!-------------content---------->
<div class="section_margin">
    <div class="sec">
        <div class="container">
            <h1 class="page-head">Apply for a pitch</h1>

            <div class="apply-pt">
                <form id="final-form">
                    <!-- Steps 1 -->
                    <div class="apply-pt-col active" id="step-1">
                        <h3>Hi there.. thanks for signing up - let’s take a few details.. Please enter your first name
                        </h3>
                        <div class="pitch-f">
                            <input type="text" placeholder="Write your name here..." id="first-name" name="first_name"
                                value="" required />
                            <div class="nx-btn" id="nx-btn" data-step="1" onclick="nextStep(1)">Next <img
                                    src="assets/images/next-i.png" alt="" />
                            </div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1 active">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 2 -->
                    <div class="apply-pt-col" id="step-2">
                        <h3>Hello <span id="first-name-display"></span>, good to meet you .. we need also your last
                            name, please type it in the box here</h3>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png"
                                    alt="" />&nbsp;Back</button>
                            <input type="text" placeholder="Write your last name here..." id="last-name"
                                name="last_name" value="" />
                            <div class="nx-btn" id="nx-btn" data-step="2" onclick="nextStep(2)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2 active">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 3 -->
                    <div class="apply-pt-col" id="step-3">
                        <h3>Thanks - ok so,<span id="full-name-display"></span> , is that right ..? I think I got it
                        </h3>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png"
                                    alt="" />&nbsp;Back</button>
                            <div class="nx-btn" id="nx-btn" data-step="3" onclick="nextStep(3)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="apply-pt-col" id="step-4">
                        <h3>Ok - So, <span id="first-name-display"></span> we need to get your post code.. type it in
                            here.. thanks
                        </h3>

                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png"
                                    alt="" />&nbsp;Back</button>
                            <input type="text" placeholder="Write your post code here..." id="post_code"
                                name="post_code" value="" />
                            <div class="nx-btn get_address_by_postcode" id="nx-btn" data-step="4" onclick="nextStep(4)">
                                Next <img src="assets/images/next-i.png" alt="" /></div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3 active">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 5 -->
                    <div class="apply-pt-col" id="step-5">
                        <div id="response-message" style="">
                            <h3>ok thanks is that <span id="street" class="street"></span> <span id="town"
                                    class="town"></span> <span id="county" class="county"></span>? - and what number do
                                you live at.. ?’
                            </h3>

                            <div class="pitch-f">
                                <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                    &nbsp;Back</button>
                                <input type="text" placeholder="Write your post number here..." id="post_number"
                                    name="post_number" value="" />
                                <div class="nx-btn show_full_address" id="nx-btn" data-step="5" onclick="nextStep(5)">
                                    Next <img src="assets/images/next-i.png" alt="" /></div>
                            </div>
                            <div class="error-message mb-3" style="display: none; color: red;"></div>
                        </div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4 active">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 6 -->
                    <div class="apply-pt-col" id="step-6">
                        <div id="final_address_data" style="">
                            <h3>ok great - I got that.. so that’s <span id="summaryline" class="summaryline"></span> -
                                is that correct ?
                            </h3>
                            <div class="pitch-f">
                                <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                    &nbsp;Back</button>
                                <input type="text" placeholder="Full Address" id="full_address" class="full_address"
                                    name="full_address" value="" />
                                <div class="nx-btn" id="nx-btn" data-step="6" onclick="nextStep(6)">Next <img
                                        src="assets/images/next-i.png" alt="" /></div>
                            </div>
                            <div class="error-message mb-3" style="display: none; color: red;"></div>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="apply-pt-col" id="step-7">
                        <h3>Please can we get your contact number</h3>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <input type="text" placeholder="Write your contact number here..." id="contact-number"
                                name="contact_number" value="" />
                            <div class="nx-btn" id="nx-btn" data-step="7" onclick="nextStep(7)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5 active">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 8 -->
                    <div class="apply-pt-col" id="step-8">
                        <h3>And your email?</h3>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <input type="text" placeholder="Write your email here..." id="email" name="email"
                                value="" />
                            <div class="nx-btn" id="nx-btn" data-step="8" onclick="nextStep(8)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6 active">6</a></li>
                            <li><a href="#" class="op-7">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 9 -->
                    <!-- Verification Step -->
                    <div class="apply-pt-col" id="step-9">
                        <span><img src="assets/images/icons_ok.png" alt="" /></span><br><br>
                        <h3>Thank you - please check your inbox and verify the email we just sent.</h3>
                        <div class="pitch-f">
                            <div class="nx-btn" id="nx-btn" data-step="9" onclick="nextStep(9)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 10 -->
                    <!-- SMS Verification Step -->
                    <div class="apply-pt-col" id="step-10">
                        <h3>And now, we will send you a text message with a code.</h3>
                        <h4>Please enter the code here</h4>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <input type="text" placeholder="Enter the verification code..." id="verification-code"
                                name="verification_code" value="" />
                            <div class="nx-btn" id="nx-btn" data-step="10" onclick="nextStep(10)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                        <div class="error-message mb-3" style="display: none; color: red;"></div>
                        <ul class="pitch-pro">
                            <li><a href="#" class="op-1">1</a></li>
                            <li><a href="#" class="op-2">2</a></li>
                            <li><a href="#" class="op-3">3</a></li>
                            <li><a href="#" class="op-4">4</a></li>
                            <li><a href="#" class="op-5">5</a></li>
                            <li><a href="#" class="op-6">6</a></li>
                            <li><a href="#" class="op-7 active">7</a></li>
                        </ul>
                    </div>

                    <!-- Step 11 -->
                    <div class="apply-pt-col" id="step-11">
                        <span><img src="assets/images/icons_ok.png" alt="" /></span><br><br>
                        <h3>Thanks</h3><br>
                        <h4>ok great - so that’s all done.. you’re now a confirmed and bonafied user</h4>
                        <div class="pitch-f">
                            <div class="nx-btn" id="nx-btn" data-step="11" onclick="nextStep(11)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 12 -->
                    <div class="apply-pt-col" id="step-12">
                        <h3>‘So let’s go ahead and complete your application for a market pitch.. ok?
                        </h3>
                        <div class="pitch-f">
                            <div class="nx-btn" id="nx-btn" data-step="12" onclick="nextStep(12)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 13 -->
                    <div class="apply-pt-col" id="step-13">
                        <h3>Cool.. so is this your first time working a market space?</h3>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step13"
                                    id="experience_with_market_spaces" name="experience_with_market_spaces" value="yes"
                                    data-step="13" data-response="yes" onclick="handleStep13Response(yes)">
                                <label class="form-check-label" for="inlineRadio1-step13">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step13"
                                    id="experience_with_market_spaces" name="experience_with_market_spaces" value="no"
                                    data-step="13" data-response="no" onclick="handleStep13Response(no)">
                                <label class="form-check-label" for="inlineRadio2-step13">No</label>
                            </div>
                            </p>
                        </div>
                    </div>

                    <!-- Step 14 -->
                    <!-- if yes-->
                    <div class="apply-pt-col" id="step-14">
                        <h3>‘Ok - great.. so we can help you to get started..</h3>
                        <div class="pitch-f">
                            <div class="nx-btn" id="nx-btn" data-step="14" onclick="nextStep(14)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 15 -->
                    <!-- if No-->
                    <div class="apply-pt-col" id="step-15">
                        <h3>‘Ok great - so you’ve done it before’</h3>
                        <p>At Net Zero Markets - we try to help operators to cut their carbon footprint.. This means
                            using
                            more organic produce, grown locally - and in season. This can dramatically cut as much as
                            75%
                            CO2 out of the food system.</p>
                        <h4>Would you be happy to use some organic produce in your operation?</h4>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step15"
                                    id="sustainability_practices" name="sustainability_practices" value="yes"
                                    data-step="15" data-response="yes" onclick="handleStep15Response(yes)">
                                <label class="form-check-label" for="inlineRadio1-step15">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step15"
                                    id="sustainability_practices" name="sustainability_practices" value="no"
                                    data-step="15" data-response="no" onclick="handleStep15Response(no)">
                                <label class="form-check-label" for="inlineRadio2-step15">No</label>
                            </div>
                            </p>
                        </div>
                    </div>

                    <!-- Step 16 -->
                    <!-- if No-->
                    <div class="apply-pt-col" id="step-16">
                        <h3>‘We ideally ask all operators to start using at least 10% organic ingredients.</h3>
                        <h4>Would that be possible?</h4>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step16"
                                    name="organic_ingredients" value="yes" data-step="16" data-response="yes"
                                    onclick="handleStep16Response('yes')">
                                <label class="form-check-label" for="inlineRadio1-step16">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step16"
                                    name="organic_ingredients" value="no" data-step="16" data-response="no"
                                    onclick="handleStep16Response('no')">
                                <label class="form-check-label" for="inlineRadio2-step16">No</label>
                            </div>
                            </p>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- Step 17 -->
                    <!-- if No-->
                    <div class="apply-pt-col" id="step-17">
                        <h3>‘We’re really sorry - but we cannot accept your application at this stage - our minimum
                            starting
                            criteria is to use at least 10% organic produce.
                        </h3>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <div class="nx-btn" id="nx-btn" data-step="17" onclick="nextStep(17)">Ok <img
                                    src="assets/images/next-i.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Step 18 -->
                    <!-- if OK -->
                    <div class="apply-pt-col" id="step-18">
                        <h3>‘Thanks for applying - sorry we couldn’t proceed further on this occasion. If anything
                            changes
                            in the future, feel free to try again. Thanks again..</h3>
                        <div class="row pitch-f">
                            <!--  <label for="applicationDetails">Details</label>
                            <textarea id="applicationDetails" name="applicationDetails" rows="4" required></textarea> -->
                            <!-- <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" /> &nbsp;Back</button> -->
                            <button type="submit">Complete</button>
                        </div>
                    </div>

                    <!-- Step 19 -->
                    <!-- if yes to the above-->
                    <div class="apply-pt-col" id="step-19">
                        <h3>‘Great - this makes a big difference to attracting more customers, who are focused on better
                            health and sustainability. We also ask all applicants and operators to not use any plastic
                            packaging - this applies to serving your produce. We ask for all operators to use
                            compostable
                            packaging for all purchases.</h3>
                        <h4>Is this ok with you?</h4>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step19"
                                    name="do_not_use_plastic" value="yes" data-step="19" data-response="yes"
                                    onclick="handleStep19Response('yes')">
                                <label class="form-check-label" for="inlineRadio1-step19">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step19"
                                    name="do_not_use_plastic" value="no" data-step="19" data-response="no"
                                    onclick="handleStep19Response('no')">
                                <label class="form-check-label" for="inlineRadio2-step19">No</label>
                            </div>
                            </p>
                        </div>
                    </div>

                    <!-- Step 20 -->
                    <!-- if No-->
                    <div class="apply-pt-col" id="step-20">
                        <p>We regret that we cannot continue with your application at this stage.</p>
                        <div class="pitch-f">
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <div class="nx-btn" id="nx-btn" data-step="20" onclick="nextStep(20)">Next<img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 21 -->
                    <!-- if yes to the above-->
                    <div class="apply-pt-col" id="step-21">
                        <h4>Ok that’s great news - by using compostable packaging, we can save an awful lot of landfill
                            -
                            which creates methane gas - the most harmful of all greenhouse gases. Also, we ask all our
                            operators to use seasonal, locally grown produce - at least 10% must be in season with the
                            UK
                            growing cycles and grown/produced within a 100-mile radius.</h4>
                        <h4>Are you able to commit to this?</h4>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step21"
                                    name="use_seasonal" value="yes" data-step="21" data-response="yes"
                                    onclick="handleStep21Response(yes)">
                                <label class="form-check-label" for="inlineRadio1-step21">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step21"
                                    name="use_seasonal" value="no" data-step="21" data-response="no"
                                    onclick="handleStep21Response(no)">
                                <label class="form-check-label" for="inlineRadio2-step21">No</label>
                            </div>
                            </p>

                        </div>
                    </div>

                    <!-- Step 22 -->
                    <!-- if yes-->
                    <div class="apply-pt-col" id="step-22">
                        <h4>That’s good news - by using seasonal, local produce, we can cut delivery emissions by 30%!
                            This
                            can save a huge amount of CO2! Finally, we ask all our operators to be ‘Zero Waste’ - what
                            this
                            means is that we put nothing into landfill. So we ask all our operators to recycle their
                            waste
                            and to not use anything which goes into landfill.</h4>
                        <h4>Can you commit to this?</h4>
                        <div class="pitch-f">
                            <p class="chec-list">
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio1-step22"
                                    name="recycle_their_waste" value="yes" data-step="22" data-response="yes"
                                    onclick="handleStep22Response(yes)">
                                <label class="form-check-label" for="inlineRadio1-step22">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="nx-btn form-check-input" type="radio" id="inlineRadio2-step22"
                                    name="recycle_their_waste" value="no" data-step="22" data-response="no"
                                    onclick="handleStep22Response(yes)">
                                <label class="form-check-label" for="inlineRadio2-step22">No</label>
                            </div>
                            </p>
                            <div class="nx-btn" id="nx-btn" data-step="22" onclick="nextStep(22)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                        </div>
                    </div>

                    <!-- Step 23 -->
                    <div class="apply-pt-col" id="step-23">
                        <h3>We’re almost done - lastly, please tell us exactly what you’d like to offer for sale at Net
                            Zero
                            Markets ~ Street Food? Fresh Produce? Home Items..?</h3>
                        <div class="row pitch-f">
                            <label for="applicationDetails">Details</label>
                            <textarea id="applicationDetails" name="offer_for_sale" rows="4" value=""></textarea>
                            <div class="nx-btn" id="nx-btn" data-step="23" onclick="nextStep(23)">Next <img
                                    src="assets/images/next-i.png" alt="" /></div>
                            <!-- <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" /> &nbsp;Back</button>
                            <button type="submit">Complete</button> -->
                        </div>
                    </div>

                    <!-- Step 24 -->
                    <!-- Final step -->
                    <div class="apply-pt-col" id="step-24">
                        <h3>Thank you - If you’re happy with your application - just hit <Complete> and we will review
                                it,
                                and get it touch.</h3>

                        <div class="row pitch-f">
                            <!--  <label for="applicationDetails">Details</label>
                            <textarea id="applicationDetails" name="applicationDetails" rows="4" required></textarea> -->
                            <button type="button" onclick="prevStep()"><img src="assets/images/back-i.png" alt="" />
                                &nbsp;Back</button>
                            <button type="submit"
                                style="border: 1px solid #65d636; width: 100px; background: #65d636; color: #fff; padding: 8px;">Complete</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection