<?php if(auth()->guard()->check()): ?>
    

<div class="w-full">
    <div class="w-full">
        <div class="bg-indigo-100 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-80">
                <p class="text-3xl font-bold leading-7 text-center">Contact us</p>
                <form>
                    
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-1/2 flex flex-col">
                            <label class="font-semibold leading-none">Name</label>
                            <input type="text" name="name" id="name"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                            
                            <div id="name_error" style="color: red;"></div>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                            <label class="font-semibold leading-none">Email</label>
                            <input type="email" name="email" id="email"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                            <div id="email_error" style="color: red;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none">Message</label>
                            <textarea type="text" name="content" id="content"
                                class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                            <div id="content_error" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button id="sendSupportMessage" type="button"
                            class="mt-9 rounded-md font-semibold leading-none text-gray-800 py-4 px-10 bg-indigo-100 hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none">
                            Send message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <section class="text-gray-700">
            <div class="container px-5 py-10 mx-auto">
                <div class="text-center mb-20">
                    <h1 class="font-pop sm:text-3xl text-2xl font-bold text-center text-gray-900 mb-4">
                        Frequently Asked Questions
                    </h1>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
                        The most common questions about Relincs.
                    </p>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="w-full grid  grid-cols-1 gap-6 px-4 py-2">
                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What is Relincs Social Media?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                Relincs is a social media platform that not only preaches freedom of speech and freedom
                                of the press, but also practices these principles without compromise or double
                                standards.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                Why a website?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                Relincs.com is the official registration option for potential members of the Relincs
                                community before the app release.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What are the public/ private content streams?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                The public stream is the parts of the platform that all members have access to – the
                                home page, the trending page, etc. The private stream is your own personal content
                                library and private hubs.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What are active/ inactive members and accounts?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                An active account is one where the account owner is using their real first name and an
                                authentic profile picture of themselves; an inactive account is an account where either
                                one, or both of these criteria are missing.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                How do I activate my account?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                To activate your account on the website, you need to register/sign-up with your real
                                first name and picture. The app will have a more complex verification system.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                When will the Relincs app be released?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                Anytime. But we have designed the website to function as an app. To access Relincs.com
                                as an app - simply add the website adress [Relincs.com] to your mobile homescreen.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                Who can join Relincs?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                Anyone over the age of 13 is allowed to join Relincs.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                On which side on the political spectrum are you?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                We don’t adhere to nor distance ourselves from any political, social or religious
                                group(s) or belief(s). We are simply a platform.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What can be uploaded/ shared on this platform?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                All legal content is allowed on the platform. Explicit content is also allowed, but only
                                on private hubs. Sensitive material is allowed on the public stream, but only if the
                                uploader has an active account.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What are "sensitive material” and “explicit content”?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                "Explicit content" is aged-restricted content, such as nudity and adult material.
                                "Sensitive content" is content that can be considered offensive to some groups or
                                individuals, such as identity politics, conspiracies content, political extremism, etc.
                            </span>
                        </details>

                        <details class="mb-4">
                            <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                                What’s prohibited on Relincs?
                            </summary>

                            <span class="py-2 text-left leading-8 pt-4 px-1">
                                All illegal activity and content is strictly forbidden on all parts of the platform, and
                                will lead to an immediate and permanent termination of account(s). And if necessary --
                                to legal actions.
                            </span>
                        </details>


                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if(Session::has('successMessage')): ?>
        Swal.fire(
            'Success!',
            'Support message sent successfully',
            'success'
        )
    <?php endif; ?>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#sendSupportMessage').on('click', function(){
            var name = $('#name').val();
            var email = $('#email').val();
            var content = $('#content').val();

            if(name != ''){
                $('#name_error').html('');
                if(email != ''){
                    $('#email_error').html('');
                    if(content != ''){
                        $('#content_error').html('');
                        $.ajax({
                            url:"<?php echo e(route('dash.sendSupportMsg')); ?>",
                            method:"POST",
                            data:{name:name, email:email, _token:"<?php echo e(csrf_token()); ?>", content:content},
                            beforeSend:function(){
                                $('#sendSupportMessage').addClass('disabled');
                                $('#sendSupportMessage').html('Sending...');
                            },
                            success:function(result)
                            {
                                if(result == 'success'){
                                    $('#name').val('');
                                    $('#email').val('');
                                    $('#content').val('');

                                    Swal.fire(
                                        'Success!',
                                        'Support message sent successfully',
                                        'success'
                                    )

                                    setTimeout(function(){
                                        location.reload();
                                    }, 200); 
                                }
                                $('#sendSupportMessage').removeClass('disabled');
                                $('#sendSupportMessage').html('Send Message');

                            }
                        })
                    }
                    else{
                        $('#content_error').html('Enter your message');
                    }
                }
                else{
                    $('#email_error').html('Enter your email');
                }
            }
            else{
                $('#name_error').html('Enter your name');
            }
            
        })
    });
</script>

<?php endif; ?><?php /**PATH E:\xampp\htdocs\relincs\local\resources\views/components/support.blade.php ENDPATH**/ ?>