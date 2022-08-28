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

<?php endif; ?><?php /**PATH C:\laragon\www\relincs\local\resources\views/components/support.blade.php ENDPATH**/ ?>