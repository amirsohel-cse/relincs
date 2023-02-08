<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title'); ?>
        Cashei Terms and Conditions
    <?php $__env->stopSection(); ?>

    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: Arial, sans-serif;
        }
        body{
            padding: 0;
            margin: 0;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            -webkit-font-feature-settings: "pnum";
            font-feature-settings: "pnum";
            font-variant-numeric: proportional-nums;
            position: relative;
            background: #eee;
        }
        .container {
            padding-right: 0;
            padding-left: 0;
            margin-right: auto;
            margin-left: auto;
            margin-top: 7px;
            margin-bottom: 7px;

        }

        @media (min-width: 768px) {
            .container {
                width: 738px;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 962px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }

        .main-container {
            color: #222;
            text-align: left !important;
            padding: 2em;
            background: #fff;
            min-height: 400px;
            -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .25);
            -moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .25);
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, .25)
        }

        .main-container * {
            text-align: left !important
        }

        .main-container :not(a) {
            color: #222
        }

        .main-container #content p {
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        a {
            color: #009c9c
        }

        a:hover {
            color: #007bff
        }

        h2 {
            font-size: 1.5em
        }

        @media  only screen and (max-width: 600px) {
            h2 {
                font-size: 1.2em
            }
        }

    </style>

<div style="background:#eee;">
    <div class="container">
        <div class="main-container">
            <h2 style="margin-top:0;">Cashei Terms and Conditions</h2>
            <hr style="margin-bottom: 1em;">
            <div id="content">
                <p>
                    By using the website, these terms will automatically apply to you – you should make sure therefore that you read them carefully before using the site. You’re not allowed to copy or modify the website, any part of the webiste, or our trademarks in any way. You’re not allowed to attempt to extract the source code of the website, and you also shouldn’t try to translate the website into other languages or make derivative versions. The website itself, and all the trademarks, copyright, database rights, and other intellectual property rights related to it, still belong to Hassan Hussein.
                </p>
                <p>
                    Hassan Hussein is committed to ensuring that the website is as useful and efficient as possible. For that reason, we reserve the right to make changes to the website or to charge for its services, at any time and for any reason. We will never charge you for the website or its services without making it very clear to you exactly what you’re paying for.
                </p>

                <p>
                    Cashei.app stores and processes personal data that you have provided to us, to provide my Service. It’s your responsibility to keep your device and access to the website secure. We therefore recommend that you do not jailbreak or root your device, which is the process of removing software restrictions and limitations imposed by the official operating system of your device. It could make your phone vulnerable to malware/viruses/malicious programs, compromise your phone’s security features and it could mean that the website won’t work properly or at all.
                </p>

                <p>
                    You should be aware that there are certain things that Hassan Hussein will not take responsibility for. Certain functions of the website will require the website to have an active internet connection. The connection can be Wi-Fi or provided by your mobile network provider, but Hassan Hussein cannot take responsibility for the website not working at full functionality if you don’t have access to Wi-Fi, and you don’t have any of your data allowance left.
                </p>

                <p>
                    If you’re using the website outside of an area with Wi-Fi, you should remember that the terms of the agreement with your mobile network provider will still apply. As a result, you may be charged by your mobile provider for the cost of data for the duration of the connection while accessing the website, or other third-party charges. In using the website, you’re accepting responsibility for any such charges, including roaming data charges if you use the website outside of your home territory (i.e. region or country) without turning off data roaming. If you are not the bill payer for the device on which you’re using the website, please be aware that we assume that you have received permission from the bill payer for using the website.
                </p>

                <p>
                    With respect to Hassan Hussein’s responsibility for your use of the website, when you’re using the website, it’s important to bear in mind that although we endeavor to ensure that it is updated and correct at all times, we do rely on third parties to provide information to us so that we can make it available to you. Hassan Hussein accepts no liability for any loss, direct or indirect, you experience as a result of relying wholly on this functionality of the app.
                </p>

                <p><strong>Changes to This Terms and Conditions</strong></p>
                <p>
                    I may update our Terms and Conditions from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Terms and Conditions on this page.
                </p>

                <p> These terms and conditions are effective as of 2023-02-2 </p>

                <p><strong>Contact Us</strong></p>
                <p> If you have any questions or suggestions about my Terms and Conditions, do not hesitate to contact me at contact@cashei.app. </p>
            </div>
        </div>



    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\relincs\local\resources\views/pages/terms_conditions.blade.php ENDPATH**/ ?>