@extends('layout.master')
@section('content')

<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <div class="col-12">
                    <div class="mx-auto p-4" style="max-width: 700px;">
                        <h1 class="text-primary text-center mb-4">Terms & Conditions</h1>

                        <h2 class="text-primary">Introduction:</h2>
                        <p class="mb-4">
                            Welcome to FreshFusion! By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. If you do not agree to these terms, please do not use our website. We reserve the right to update or modify these terms at any time, and your continued use of the website following any changes will be considered acceptance of those changes.
                        </p>

                        <h2 class="text-primary">Use of Website:</h2>
                        <p class="mb-4">
                            You agree to use our website for lawful purposes only. You must not:
                            <ul>
                                <li>Engage in any activity that could harm, disable, or overburden the website, such as unauthorized access to our systems.</li>
                                <li>Use the website to transmit, distribute, or store harmful material such as malware, viruses, or spyware.</li>
                                <li>Impersonate another person or entity or falsely claim an affiliation with any person or entity.</li>
                                <li>Violate the rights of others or engage in activities that could be considered illegal under applicable laws.</li>
                            </ul>
                            You must comply with all applicable laws, regulations, and codes of practice in your jurisdiction when using our website.
                        </p>

                        <h2 class="text-primary">Account Registration and Security:</h2>
                        <p class="mb-4">
                            To access certain features of our website, you may be required to create an account. You agree to provide accurate and complete information when registering and to update your details as necessary. You are responsible for maintaining the confidentiality of your account login details and for all activities that occur under your account. If you believe that your account has been compromised, you agree to notify us immediately.
                        </p>

                        <h2 class="text-primary">Intellectual Property:</h2>
                        <p class="mb-4">
                            All content on this website, including but not limited to text, graphics, logos, images, videos, software, and data compilations, is the property of FreshFusion and is protected by copyright, trademark, and other intellectual property laws. You may not:
                            <ul>
                                <li>Reproduce, distribute, modify, transmit, display, or use any content from our website without our express written permission.</li>
                                <li>Use any FreshFusion trademarks, logos, or other intellectual property without prior approval.</li>
                            </ul>
                            Any unauthorized use of the content may violate copyright, trademark, or other laws and may result in legal action.
                        </p>

                        <h2 class="text-primary">Product Information:</h2>
                        <p class="mb-4">
                            We strive to provide accurate and up-to-date information regarding the products on our website. However, we do not warrant that product descriptions, pricing, or any other content is error-free or complete. In the event of a discrepancy, we reserve the right to correct the information at any time. This may include:
                            <ul>
                                <li>Correcting any errors or inaccuracies in product descriptions, pricing, or availability.</li>
                                <li>Cancelling any orders placed for products at incorrect prices or with incorrect details. If you have already made a purchase, you will be notified, and we will refund the amount paid if the error leads to an incorrect price being charged.</li>
                            </ul>
                        </p>

                        <h2 class="text-primary">Orders and Payment:</h2>
                        <p class="mb-4">
                            When placing an order on our website, you agree to provide accurate information and complete payment for your purchases. We reserve the right to refuse or cancel any orders at our discretion. Payment must be made using a valid payment method accepted by us. By submitting an order, you are making an offer to purchase the product(s) in your cart, and we will notify you upon receipt of the order and when it is processed.
                        </p>

                        <h2 class="text-primary">Limitation of Liability:</h2>
                        <p class="mb-4">
                            To the fullest extent permitted by law, FreshFusion shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages arising from the use or inability to use our website, products, or services. This includes, but is not limited to, damages for loss of profits, goodwill, use, data, or other intangible losses.
                            <br>
                            Our total liability to you, under any circumstances, is limited to the amount you paid for the product(s) in the order related to the claim.
                        </p>

                        <h2 class="text-primary">Indemnification:</h2>
                        <p class="mb-4">
                            You agree to indemnify, defend, and hold harmless FreshFusion, its officers, employees, agents, licensors, and suppliers from any and all claims, losses, damages, liabilities, costs, and expenses (including reasonable attorneys' fees) arising from:
                            <ul>
                                <li>Your use of the website or products</li>
                                <li>Your violation of these terms and conditions</li>
                                <li>Any third-party claims arising from your actions</li>
                            </ul>
                        </p>

                        <h2 class="text-primary">Third-Party Links and Content:</h2>
                        <p class="mb-4">
                            Our website may contain links to third-party websites, services, or resources. We do not endorse or assume any responsibility for these external sites. You acknowledge and agree that FreshFusion is not responsible for the availability, content, or accuracy of any external sites linked to from our website.
                        </p>

                        <h2 class="text-primary">Privacy Policy:</h2>
                        <p class="mb-4">
                            Your use of our website is also governed by our Privacy Policy, which outlines how we collect, use, and protect your personal information. By using our website, you agree to the terms of the Privacy Policy.
                        </p>

                        <h2 class="text-primary">Governing Law and Dispute Resolution:</h2>
                        <p class="mb-4">
                            These terms and conditions are governed by and construed in accordance with the laws of [Your Country/State]. Any disputes arising out of or in connection with these terms and conditions or your use of the website shall be resolved exclusively in the courts located in [Your Country/State]. By using our website, you consent to the jurisdiction of such courts.
                        </p>

                        <h2 class="text-primary">Force Majeure:</h2>
                        <p class="mb-4">
                            FreshFusion shall not be held liable for any failure or delay in performance under these terms and conditions, if such failure or delay is caused by events beyond our reasonable control, including but not limited to acts of God, war, strikes, supply shortages, government regulations, or other unforeseen events.
                        </p>

                        <h2 class="text-primary">Severability:</h2>
                        <p class="mb-4">
                            If any provision of these terms and conditions is found to be unlawful, void, or unenforceable, the remaining provisions shall remain in full force and effect.
                        </p>

                        <h2 class="text-primary">Entire Agreement:</h2>
                        <p class="mb-0">
                            These terms and conditions constitute the entire agreement between you and FreshFusion regarding your use of the website and supersede all prior agreements and understandings, whether written or oral, concerning the subject matter.
                        </p>

                        <!-- Download Button -->
                        <div class="text-center mt-5">
                            <a href="{{ asset('docs/terms-and-conditions.pdf') }}" download class="btn btn-primary px-4 py-2">
                                Download Terms & Conditions
                            </a>
                        </div>
                        <!-- /Download Button -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

