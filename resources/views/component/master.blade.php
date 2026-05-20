<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="assets/images/fevicon.png" type="assets/images/png" sizes="13x13">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"
        type="text/css">
    <link href="./assets/css/global.css" rel="stylesheet" type="text/css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>


    <!-------------Header---------->
    <header class="header">
        <div class="header-mid">
            <div class="container">
                <div class="header-row">
                    <div class="logo-top">
                        <a href="#"><img src="assets/images/logo.png" alt="" /></a>
                    </div>
                    <div class="header-right">
                        <div class="menu-col" id='cssmenu'>
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="{{route('about')}}">About us</a>
                                    <!-- <ul>
                                    <li><a href="#">Recipe</a></li>
                                    <li><a href="#">Mission & Vision</a></li>
                                    <li><a href="#">How it work</a></li>
                                </ul> -->
                                </li>
                                <li><a href="{{route('apply-pitch')}}">Apply for a pitch</a></li>
                                <li><a href="{{route('market-location')}}">Market locations</a></li>
                                <li><a href="{{route('contact')}}" class="cont-btn">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="r-nav">
                            <ul>
                                <li><a href="javascript:void(0);"><img src="assets/images/icon1.png" alt="" /></a></li>
                                <li><a href="javascript:void(0);"><img src="assets/images/icon2.png" alt="" /></a></li>
                                <li><a href="javascript:void(0);"><img src="assets/images/icon3.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-------------end header---------->

    @yield('content')

    <!-------------Footer---------->
    <footer class="footer">
        <div class="container">
            <a href="#"><img src="assets/images/logo.png" alt="" /></a>
            <p><a href="mailto:sales@netzerofoods.com">sales@netzerofoods.com</a> | <a href="tel:">+(201) 596-3738</a> |
                <span>11 Leuning St. South
                    Hackensack, NJ 07606</span> | <span>&copy; Copyright 2024 - Net Zero Foods</span>
            </p>
            <p class="sl">
                <a href="javascript:void(0);"><img src="assets/images/icon2.png" alt="" /></a>
                <a href="javascript:void(0);"><img src="assets/images/icon3.png" alt="" /></a>
            </p>
            <p class="fl">
                <a href="javascript:void(0);">F.A.Q.</a> |
                <a href="javascript:void(0);">Terms and Conditions</a> |
                <a href="javascript:void(0);">Shipping and Returns</a> |
                <a href="javascript:void(0);">Privacy Policy</a>
            </p>
        </div>
    </footer>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script type="text/javascript">
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });

    // apply-pitch form 
    // $(document).ready(function() {
    //     $(".nx-btn").click(function() {
    //         $(this).parent().parent().removeClass("active");
    //         $(this).parent().parent().next().addClass("active");
    //     });
    // });
    $(document).ready(function() {
        $('#subscribe-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('subscribe')}}",
                type: 'POST',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    //console.log("Success:", response);
                    $('#success-message').text("You have successfully subscribed!").show();
                    $('#error-message').hide();
                    $('#subscribe-form')[0].reset(); // Clear the form fields
                },
                error: function(xhr) {
                    //console.log("Error:", xhr);
                    $('#error-message').text("An error occurred. Please try again.").show();
                    $('#success-message').hide();
                }
            });
        });


        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('contact')}}",
                type: 'POST',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    //console.log("Success:", response);
                    $('#success-message').text("Your message has been sent successfully!")
                        .show();
                    $('#error-message').hide();
                    $('#contact-form')[0].reset(); // Clear the form fields
                },
                error: function(xhr) {
                    //console.log("Error:", xhr);
                    $('#error-message').text("An error occurred. Please try again.").show();
                    $('#success-message').hide();
                }
            });
        });

        // post code API 
        var obj
        $('.get_address_by_postcode').on('click', function(event) {
            event.preventDefault(); // Prevent the default form submission
            const postcode = $('#post_code').val();

            if (postcode != '') {
                // Make an AJAX call to the API
                $.ajax({
                    url: 'https://ws.postcoder.com/pcw/PCWYP-25NDA-MF8ZN-LBHL9/address/UK/' +
                        postcode,
                    method: 'GET',
                    success: function(data) {
                        obj = data
                        let {
                            street,
                            county,
                            posttown
                        } = data[0];
                        let temp = {
                            street,
                            county,
                            posttown
                        };
                        localStorage.setItem("address", JSON.stringify(temp));

                        // Update the HTML with the constituency data
                        $('#street').text(street);
                        $('#town').text(posttown);
                        $('#county').text(county);
                        $('#full_address').hide();
                        // Show the response message div
                        //$('.response-message').show();
                    },
                    error: function(error) {
                        showError("Error in Fetching address!");
                        $('#full_address').show();
                        //$('#full_address').attr('text', true);
                        // Hide the response message div
                        //$('.response-message').hide();
                    }
                });
            }

        });


        $('.show_full_address').on('click', function(event) {
            event.preventDefault(); // Prevent the default form submission
            const homecode = $('#post_number').val();
            let fulladdress = obj.filter((item) => item.number == homecode)

            $('#summaryline').text(fulladdress[0].summaryline);
            $('#full_address').val(fulladdress[0].summaryline);
            // let add = JSON.parse(address);

            // Show the final data div
            //$('#final_address_data').show();
        });


        //Save Signup Additional Data
        $('#final-form').on('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission
            // Serialize form data
            let formData = {};
            $('#final-form').serializeArray().forEach(function(field) {
                formData[field.name] = field.value;
            });

            // Convert formData to JSON
            let jsonData = JSON.stringify(formData);

            $.ajax({
                url: "{{route('completed-step')}}", //'/completed-step',
                method: 'POST',
                data: JSON.stringify({
                    formData: jsonData,
                    email: email,
                }), // Wrap the JSON data
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content'),
                },
                success: function(data) {
                    location.reload();
                    //console.log('Response:', data);
                },
                error: function(xhr, status, error) {
                    console.log('API Error:', error.message);
                    // Handle the error
                }
            });
        });


    });


    /////
    document.addEventListener('DOMContentLoaded', () => {
        let currentStep = 1;
    const totalSteps = 23;
    const steps = document.querySelectorAll('.form-step'); 

        function showError(message) {
            $('.error-message').text(message).show();
        }

        function hideError(message) {
            $('.error-message').hide();
        }

        async function checkFirstName(step) {
            var first_name = document.getElementById('first-name').value;
            if (first_name != '') {
                nextStep(step);
            } else {
                const errorText = 'Please enter first name!';
                showError(`${errorText}`);
            }
        }

        async function checkLastName(step) {
            var last_name = document.getElementById('last-name').value;
            if (last_name != '') {
                nextStep(step);
            } else {
                const errorText = 'Please enter last name!';
                showError(`${errorText}`);
            }
        }

        async function checkPostCode(step) {
            var post_code = document.getElementById('post_code').value;
            if (post_code != '') {
                nextStep(step);
            } else {
                const errorText = 'Please enter post code!';
                showError(`${errorText}`);
            }
        }

        async function checkPostNumber(step) {
            var post_number = document.getElementById('post_number').value;
            if (post_number != '') {
                nextStep(step);
            } else {
                const errorText = 'Please enter post number!';
                showError(`${errorText}`);
            }
        }

        async function checkContactNumber(step) {
            var contact_number = document.getElementById('contact-number').value;
            if (contact_number != '') {
                nextStep(step);
            } else {
                const errorText = 'Please enter contact number!';
                showError(`${errorText}`);
            }
        }

        async function checkEmail(step) {
            var email = document.getElementById('email').value;
            if (email != '') {
                saveUserDetails(step);
                //return true;
            } else {
                const errorText = 'Please enter email!';
                showError(`${errorText}`);
            }
        }

        async function saveUserDetails(step) {
            const data = {
                first_name: document.getElementById('first-name').value,
                last_name: document.getElementById('last-name').value,
                post_code: document.getElementById('post_code').value,
                contact_number: document.getElementById('contact-number').value,
                email: document.getElementById('email').value,
                full_address: document.getElementById('full_address').value,
            };
            try {
                const response = await fetch('/save-user-details', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content'),
                    },
                    body: JSON.stringify(data),
                });

                const result = await response.json();
                //console.log('Response from save-user-details:', result);

                if (response.ok) {
                    nextStep(step);
                } else {
                    const errorText = await response.text();
                    showError(`Error saving user details: ${errorText}`);
                }
            } catch (error) {
                showError('An error occurred. Please try again.');
                console.error(error);
            }

        }

        async function verifyEmail(step) {
            const data = {
                email: document.getElementById('email').value,
                verification_code: document.getElementById('verification-code').value,
            };

            try {
                const response = await fetch('/verify-email', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content'),
                    },
                    body: JSON.stringify(data),
                });

                const result = await response.json();

                if (response.ok) {
                    localStorage.setItem("email", JSON.stringify(data.email));
                    // jQuery('.email_verify_error').text("");
                    nextStep(step);
                } else {
                    // jQuery('.email_verify_error').text("Email already exist");
                    //console.error(result.message);
                }
            } catch (error) {
                //console.error(error);
            }
        }

        function showStep(step) {
            const steps = document.querySelectorAll('.apply-pt-col');
            steps.forEach((el, index) => {
                el.classList.toggle('active', index === step - 1);
            });
        }

        function nextStep(step) {
            const currentStepElement = document.getElementById(`step-${step}`); //23
            const nextStepElement = document.getElementById(`step-${step + 1}`); //24
            if (!currentStepElement || !nextStepElement) {
                //console.error(`Element with ID step-${step} or step-${step + 1} not found.`);
                return;
            }

            if (step < totalSteps - 1) {
                // console.log('active');
                currentStepElement.classList.remove('active');
                nextStepElement.classList.add('active');
                currentStep = step + 1;

                // Update specific step displays if needed
                if (currentStep === 2) {
                    document.getElementById('first-name-display').innerText = document.getElementById(
                        'first-name').value;
                } else if (currentStep === 3) {

                    const firstName = document.getElementById('first-name').value;
                    const lastName = document.getElementById('last-name').value;
                    document.getElementById('full-name-display').innerText = `${firstName} ${lastName}`;
                }
                // Add more conditions if you have special cases for specific steps
            } else if (step === totalSteps - 1) {
                currentStepElement.classList.remove('active');
                document.getElementById(`step-${step + 1}`).classList.add('active');
                currentStep = step + 1;
            } else if (step === totalSteps) {
                setTimeout(() => {
                    location.reload(); // Refresh the page
                }, 500);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                hideError('');
                const currentStepElement = document.getElementById(`step-${currentStep}`);
                const prevStepElement = document.getElementById(`step-${currentStep - 1}`);

                if (currentStepElement && prevStepElement) {
                    currentStepElement.classList.remove('active');
                    prevStepElement.classList.add('active');
                    currentStep--;
                }
            }
        }

        function handleStep13Response(response) {
            if (response === 'yes') {
                nextStep(13); // Move to step 14
            } else if (response === 'no') {
                nextStep(14); // Move to step 15
            } else {
                console.error('Invalid response for step 13');
            }
        }

        function handleStep15Response(response) {
            if (response === 'yes') {
                nextStep(18); // Move to step 19
            } else if (response === 'no') {
                nextStep(15); // Move to step 16
            } else {
                console.error('Invalid response for step 13');
            }
        }

        function handleStep16Response(response) {
            if (response === 'yes') {
                nextStep(19); // Move to step 19
            } else if (response === 'no') {
                nextStep(16); // Move to step 17
            } else {
                console.error('Invalid response for step 13');
            }
        }

        function handleStep19Response(response) {
            if (response === 'yes') {
                nextStep(20); // Move to step 21
            } else if (response === 'no') {
                nextStep(19); // Move to step 20
            } else {
                console.error('Invalid response for step 13');
            }
        }

        function handleStep21Response(response) {
            if (response === 'yes') {
                nextStep(21); // Move to step 22
            } else if (response === 'no') {
                nextStep(21); // Move to step 22
            } else {
                console.error('Invalid response for step 13');
            }
        }

        function handleStep22Response(response) {
            if (response === 'yes') {
                nextStep(22); // Move to step 22
            } else if (response === 'no') {
                nextStep(22); // Move to step 22
            } else {
                console.error('Invalid response for step 13');
            }
        }


        document.querySelectorAll('.nx-btn').forEach(button => {
            button.addEventListener('click', () => {
                const step = parseInt(button.getAttribute('data-step'), 10);
                hideError('');
                if (step === 1) {
                    checkFirstName(step);
                } else if (step === 2) {
                    checkLastName(step);
                } else if (step === 4) {
                    checkPostCode(step);
                } else if (step === 5) {
                    checkPostNumber(step);
                } else if (step === 7) {
                    checkContactNumber(step);
                } else if (step === 8) {
                    checkEmail(step);
                } else if (step === 10) {
                    verifyEmail(step);
                } else {
                    nextStep(step);
                }
            });
        });

        document.querySelectorAll('button[type="button"]').forEach(button => {
            button.addEventListener('click', prevStep);
        });

        // document.getElementById('final-form').addEventListener('submit', (event) => {
        //     event.preventDefault();

        //     setTimeout(() => {
        //         location.reload();
        //     }, 100);
        // });

        // Initialize the form by showing the first step
        showStep(currentStep);
    });
    </script>

    @yield('subscribejs')
</body>

</html>