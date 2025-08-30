<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniwersal</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/fav_icon.svg') }}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
</head>

<style>
    body {
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    /* Form container with glass effect */
    form {
        max-width: 800px;
        margin: 40px auto;
        padding: 30px;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }

    h4,
    h3 {
        color: #ff7ee5;
        font-weight: bold;
        margin-bottom: 12px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
        color: #cfcfcf;
    }

    /* Inputs */
    input {
        width: 100%;
        padding: 12px 16px;
        margin-bottom: 18px;
        border-radius: 12px;
        border: none;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
    }

    input::placeholder {
        color: #bdbdbd;
    }

    input:focus {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 12px #7ee8fa, 0 0 24px #eec0c6;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        padding: 12px 24px;
        margin-right: 12px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .btn-primary {
        background: linear-gradient(90deg, #7ee8fa, #eec0c6);
        color: #1a1a1a;
        box-shadow: 0 0 15px rgba(238, 192, 198, 0.8);
    }

    .btn-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(126, 232, 250, 1);
    }

    .btn-outline {
        background: transparent;
        border: 2px solid #7ee8fa;
        color: #7ee8fa;
    }

    .btn-outline:hover {
        background: #7ee8fa;
        color: #1a1a1a;
    }

    /* Results box */
    .results {
        margin-top: 30px;
        padding: 20px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: inset 0 0 20px rgba(126, 232, 250, 0.2);
    }

    .results h3 {
        font-size: 20px;
        color: #7ee8fa;
        margin-bottom: 15px;
    }

    .results p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .results span {
        color: #ffd369;
        font-weight: bold;
    }

    /* Buttons */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        /* tighter gap between icon & text */
        padding: 10px 20px;
        margin-right: 10px;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        font-size: 15px;
        transition: all 0.3s ease-in-out;
        border: none;
    }

    /* Primary button (Calculate) */
    .btn-primary {
        background: linear-gradient(135deg, #7ee8fa, #eec0c6);
        color: #1a1a1a;
        box-shadow: 0 4px 15px rgba(126, 232, 250, 0.6);
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .btn-primary:hover {
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 6px 20px rgba(126, 232, 250, 0.9);
    }

    /* Outline button (Reset) */
    .btn-outline {
        background: rgba(255, 255, 255, 0.08);
        border: 2px solid #7ee8fa;
        color: #7ee8fa;
        box-shadow: 0 4px 10px rgba(126, 232, 250, 0.3);
    }

    .btn-outline:hover {
        background: #7ee8fa;
        color: #1a1a1a;
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 6px 18px rgba(126, 232, 250, 0.8);
    }
</style>

<body>

    <div class="site-wrapper">
        <!-- ======== 1.1. Header section ======== -->

        <!-- ======== End of 1.1. Header section ======== -->
        <!-- ======== 1.2. Hero section ========  -->
        <section class="Hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column" data-aos="fade-up">
                            <div>
                                <h1>Welcome to <span>Uniwersal</span> </h1>
                                <p>Uniwersal is a groundbreaking platform designed to meet the evolving financial,
                                    lifestyle, risk, and protection needs of the modern individual — all in one seamless
                                    ecosystem.</p>
                                <div class="my-lg-2 my-md-3">
                                    <a href="{{ route('employee.auth.sign-in') }}" class="hover2">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                            <div class="mt-1">
                                <h5>Over <span class="number" data-final-value="5000"></span>+ Reviews</h5>
                                <div class="d-flex">
                                    <figure><img src="{{ asset('images/reviewImg_1.webp') }}" alt="reviewImg_1">
                                    </figure>
                                    <figure><img src="{{ asset('images/credit_cards.webp') }}"
                                            alt="credit_cards"></figure>
                                    <figure><img src="{{ asset('images/person.svg') }}" alt="person"></figure>
                                    <div
                                        class="rounded-circle d-flex justify-content-center align-items-center position-relative">
                                        <h5 class="p-0 ps-1"><span class="number" data-final-value="5"></span>K+</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative d-flex flex-lg-row flex-column h-100">
                            <figure class="position-absolute" data-aos="zoom-in-up"><img src="images/credit_cards.webp"
                                    alt="credit_cards">
                            </figure>
                            <div class="d-flex flex-lg-column align-items-end w-100" data-aos="fade-down">
                                <div class="pe-lg-3">
                                    <h2><span class="number" data-final-value="93"></span>k+</h2>
                                    <p>Satisfied user</p>
                                </div>
                                <div class="pe-lg-1">
                                    <h2><span class="number" data-final-value="4.9"></span>/5</h2>
                                    <p>Client Rating</p>
                                </div>
                                <div class="pe-lg-3">
                                    <h2><span class="number" data-final-value="99"></span>%</h2>
                                    <p>Secure Payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End of 1.2. Hero section ========  -->

        <!-- ======== 1.4. Services section ======== -->
        <section class="Services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap pt-lg-0 pt-5">
                            <div class="d-flex align-items-center gap-3" data-aos="flip-left">
                                <figure>
                                    <img src="images/person.svg" alt="icon1">
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h5>For Individuals</h5>
                                    <p>Your needs—pre-approved and covered—with a tailored credit limit for housing,
                                        healthcare, insurance, lifestyle, and retail, ensuring financial certainty.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" data-aos="flip-left">
                                <figure>
                                    <img src="images/transaction.svg" alt="icon2">
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h5>For Financial Institutions & Corporates</h5>
                                    <p>A smarter way to serve and grow—Uniwersal helps banks, NBFCs, and businesses
                                        boost wallet share with graded risk assessment, structured engagement, and
                                        long-term consumer value.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" data-aos="flip-left">
                                <figure>
                                    <img src="images/investment.svg" alt="icon3">
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h5>A Vision Driven by Expertise</h5>
                                    <p>Led by financial services expert Mathew PM and technologist Sahana TK, Uniwersal
                                        blends industry depth with innovation to drive digital transformation.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3" data-aos="flip-left">
                                <figure>
                                    <img src="images/card.svg" alt="icon4">
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h5>Join the Network</h5>
                                    <p>Join the Uniwersal network—businesses, builders, retailers, and insurers can
                                        reach financially evaluated consumers and grow with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100 position-relative" data-aos="fade-up">
                            <h2>
                                What is <span> Uniwersal?</span>
                            </h2>
                            <p class="py-4 flex-grow-1">Uniwersal brings together individuals, financial institutions,
                                and businesses into a single, powerful ecosystem designed to create a smarter, more
                                sustainable financial journey for everyone. Through a structured partnership model,
                                Uniwersal connects people to the resources they need—combining intelligent credit and
                                risk management with seamless access to essential lifestyle, protection, and everyday
                                services. Whether it’s securing housing, healthcare, insurance, or retail benefits, the
                                platform is built to support users at every stage of life, from their very first
                                financial step to long-term security and growth. For partners, Uniwersal offers deep
                                insights, advanced risk assessment, and efficient engagement tools that drive
                                sustainable wallet share expansion. By aligning the goals of consumers, institutions,
                                and service providers, Uniwersal creates a collaborative space where opportunity meets
                                reliability, ensuring that every participant moves forward with clarity, confidence, and
                                measurable value.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End of 1.4. Services section ======== -->
        <!-- ========  1.5. Registration section ========  -->
        <section class="Registration">
            <div class="container">
                <div class="row gy-lg-0 gy-md-5 gy-4">
                    <div class="col-lg-6">
                        <div class="mt-md-4" data-aos="fade-up">
                            <h2>Our Easy Steps For <span>Registration</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s.</p>
                            <div class="d-flex gap-sm-5  gap-4 flex-sm-row flex-column">
                                <ul class="d-flex flex-column">
                                    <li>
                                        <h6>Sign in with ID Card</h6>
                                    </li>
                                    <li>
                                        <h6>Select Country Location</h6>
                                    </li>
                                    <li>
                                        <h6>Enjoy Full Access</h6>
                                    </li>
                                </ul>
                                <ul class="d-flex flex-column">
                                    <li>
                                        <h6>User Configuration</h6>
                                    </li>
                                    <li>
                                        <h6>Enter the Transaction</h6>
                                    </li>
                                    <li>
                                        <h6>Enter the Transaction</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex  align-items-center gap-md-4 gap-3">
                                <div>
                                    <a href="{{ route('employee.auth.sign-in') }}" class="hover1">Register Now</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-lg-start justify-content-center">
                            <figure class="position-relative" data-aos="zoom-in-up" data-aos-delay="200">
                                <img class="w-100" src="images/registration_mobile.webp" alt="registration_mobile"
                                    data-aos="fade-up">
                            </figure>
                            <div class="d-flex flex-column gap-lg-4 gap-3 ps-lg-4 ps-3 pt-lg-2">
                                <div class="d-flex flex-column gap-lg-3" data-aos="flip-left">
                                    <figure class="d-flex justify-content-center align-items-center">
                                        <img src="images/income_icon.svg" alt="income_icon">
                                    </figure>
                                    <div>
                                        <p class="p-0">Incomes</p>
                                        <p class="pt-1">$<span class="number" data-final-value="2750.50"></span></p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-lg-3" data-aos="flip-left">
                                    <figure class="d-flex justify-content-center align-items-center"><img
                                            src="images/icon_expenses.svg" alt="icon_expenses"></figure>
                                    <div>
                                        <p class="p-0">Expenses</p>
                                        <p class="pt-1">$<span class="number" data-final-value="1240.75"></span></p>
                                    </div>
                                </div>
                                <figure data-aos="flip-left">
                                    <img class="w-100" src="images/monthly_Graph.webp" alt="monthly_Graph">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End of 1.5. Registration section ========  -->
        <!-- ======== 1.6. Download section ========  -->
        <section class="Download">
            <div class="container">
                <div class="row flex-md-row flex-column-reverse">
                    <div class="col-lg-5 col-md-5">
                        <figure class="d-flex h-100 position-relative" data-aos="zoom-in-up">
                            <img src="images/download_Img.webp" alt="download_Img">
                        </figure>
                    </div>

                    <div class="col-lg-7 col-md-7">
                        <div class="d-flex flex-column h-100 justify-content-md-center justify-content-end text-md-start text-center"
                            data-aos="fade-up">
                            <h2>Why Uniwersal?</h2>
                            <p style="line-height: 2; font-size: 1rem;">
                                <span><strong>Integrated Platform:</strong> Access housing, healthcare, insurance,
                                    lifestyle, and retail services seamlessly in one ecosystem.</span><br><br>
                                <span><strong>Customer-Risk Profiling:</strong> Benefit from fair, accurate, and
                                    personalized assessments that unlock smarter financial opportunities.</span><br><br>
                                <span><strong>Dynamic Credit Access:</strong> Enjoy flexible, pre-approved credit limits
                                    tailored to your evolving needs and lifestyle.</span><br><br>
                                <span><strong>Partner Growth:</strong> Banks, NBFCs, and businesses gain deep insights,
                                    structured engagement, and sustainable expansion of wallet share.</span><br><br>
                                <span><strong>Financial Security:</strong> Individuals are supported at every stage of
                                    life, ensuring confidence, protection, and reliable access to essential
                                    services.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======== 1.10. Blog section ======== -->
        <section class="Blog">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mx-auto mb-4"
                    data-aos="fade-up">
                    <h2>Credit Score Calculator</h2>
                    <p class="lead text-center">Estimate your credit score instantly based on your income, debt, and
                        payment history. Use this tool to understand your creditworthiness and make smarter financial
                        decisions.</p>
                </div>


                <form id="creditForm" class="mt-10 max-w-3xl mx-auto grid grid-cols-2 gap-6 p-8 
             rounded-3xl shadow-2xl bg-gradient-to-br from-gray-900 via-black to-gray-900 
             border border-white/10 backdrop-blur-xl">

                    <!-- Salary -->
                    <div class="col-span-2">
                        <label for="salary" class="block text-lg font-semibold text-gray-200 mb-2">
                            💰 Current Salary / Income per annum
                        </label>
                        <input type="number" id="salary" name="current_salary_per_annum" class="fancy-input"
                            placeholder="Enter salary" />
                    </div>

                    <!-- Loans -->
                    <h4 class="col-span-2 text-xl font-bold text-indigo-400 border-b border-gray-700 pb-2">
                        📊 Loan Exposure (EAD-risk)
                    </h4>

                    <div class="col-span-2">
                        <label for="personalLoan" class="form-label">🏦 Personal Loan</label>
                        <input type="number" id="personalLoan" name="personal_loan" class="fancy-input"
                            placeholder="Enter personal loan" />
                    </div>

                    <div class="col-span-2">
                        <label for="autoLoan" class="form-label">🚗 Auto Loan</label>
                        <input type="number" id="autoLoan" name="auto_loan" class="fancy-input"
                            placeholder="Enter auto loan" />
                    </div>

                    <div class="col-span-2">
                        <label for="creditCard" class="form-label">💳 Credit Card</label>
                        <input type="number" id="creditCard" name="credit_card" class="fancy-input"
                            placeholder="Enter credit card" />
                    </div>

                    <div class="col-span-2">
                        <label for="overdraft" class="form-label">🏦 Overdraft</label>
                        <input type="number" id="overdraft" name="overdraft" class="fancy-input"
                            placeholder="Enter overdraft" />
                    </div>

                    <div class="col-span-2">
                        <label for="educationLoan" class="form-label">🎓 Educational Loan</label>
                        <input type="number" id="educationLoan" name="educational_loan" class="fancy-input"
                            placeholder="Enter educational loan" />
                    </div>

                    <!-- Buttons -->
                    <div class="col-span-2 flex gap-4 pt-6">
                        <button type="button" class="btn-primary" onclick="calculateCredit()">✨ Calculate</button>

                        <button type="reset" class="btn-outline" onclick="resetResults()">🔄 Reset</button>
                    </div>

                    <!-- Results -->
                    <div class="col-span-2 mt-8 p-6 rounded-2xl bg-gradient-to-br from-gray-800 to-gray-900 
                border border-gray-700 shadow-xl">
                        <h3 class="text-2xl font-bold text-pink-400 mb-4 flex items-center gap-2">
                            📈 Results
                        </h3>
                        <div class="space-y-2 text-gray-200 text-base">
                            <p style="padding:10px"><strong>Total Exposure (EAD):</strong> <span id="totalEAD"
                                    class="text-yellow-300">N/A</span></br>
                                <strong>DBR (EAD / Salary):</strong> <span id="dbr" class="text-yellow-300">N/A</span>
                                </br>
                                <strong>Credit Limit:</strong> <span id="creditLimit" class="text-yellow-300">N/A</span>
                                </br>
                                <strong>Available Limit:</strong> <span id="availableLimit"
                                    class="text-yellow-300">N/A</span>
                                </br>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- ======== 1.12. Footer section ======== -->
        <footer>
            <div class="container">

                <div class="w-100 text-center py-lg-4 py-3">
                    <p>Copyright � <span id="year"></span> All Rights Reserved.</p>
                </div>
            </div>
            <!-- scroll to top  -->
            <div class="scrollToTop">
                <div class="arrowUp">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div class="water">
                    <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                        <use xlink:href="#wave"></use>
                    </svg>
                    <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                        <use xlink:href="#wave"></use>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 560 20" style="display: none;">
                        <symbol id="wave">
                            <path
                                d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z">
                            </path>
                            <path
                                d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z">
                            </path>
                            <path
                                d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z">
                            </path>
                            <path
                                d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z">
                            </path>
                        </symbol>
                    </svg>
                </div>
            </div>
        </footer>
        <!-- ======== End of 1.12. Footer section ======== -->
    </div>

    <!-- bootstrap min javascript -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        function calculateCreditScore() {
            const income = parseFloat(document.getElementById('income').value) || 0;
            const debt = parseFloat(document.getElementById('debt').value) || 0;
            const paymentHistory = parseFloat(document.getElementById('paymentHistory').value) || 0;

            // Simple formula
            let score = 300;
            score += (income / 1000) * 10;            // income adds points
            score -= (debt / 1000) * 5;              // debt reduces points
            score += (paymentHistory / 100) * 350;   // good payment history adds points

            if (score > 850) score = 850;
            if (score < 300) score = 300;

            const roundedScore = Math.round(score);
            document.getElementById('creditScore').innerText = roundedScore;

            // Update progress bar
            const percent = ((roundedScore - 300) / (850 - 300)) * 100;
            const bar = document.getElementById('scoreBar');
            bar.style.width = percent + '%';

            // Color code
            if (roundedScore >= 750) {
                bar.className = "progress-bar bg-success";
            } else if (roundedScore >= 600) {
                bar.className = "progress-bar bg-warning";
            } else {
                bar.className = "progress-bar bg-danger";
            }
        }
    </script>
    <script>
        function calculateCredit() {
            const salary = parseFloat(document.getElementById('salary').value) || 0;
            const personalLoan = parseFloat(document.getElementById('personalLoan').value) || 0;
            const autoLoan = parseFloat(document.getElementById('autoLoan').value) || 0;
            const creditCard = parseFloat(document.getElementById('creditCard').value) || 0;
            const overdraft = parseFloat(document.getElementById('overdraft').value) || 0;
            const educationLoan = parseFloat(document.getElementById('educationLoan').value) || 0;

            // Total Exposure (EAD)
            const totalEAD = personalLoan + autoLoan + creditCard + overdraft + educationLoan;

            // DBR Calculation
            const dbr = salary > 0 ? ((totalEAD / salary) * 100).toFixed(2) + '%' : "0%";

            // Credit Limit (5x salary)
            const creditLimit = salary * 5;

            // Available Limit
            const availableLimit = creditLimit - totalEAD;

            // Update results
            document.getElementById('totalEAD').textContent = totalEAD.toLocaleString();
            document.getElementById('dbr').textContent = dbr;
            document.getElementById('creditLimit').textContent = creditLimit.toLocaleString();
            document.getElementById('availableLimit').textContent = availableLimit.toLocaleString();
        }

        function resetResults() {
            document.getElementById('totalEAD').textContent = "N/A";
            document.getElementById('dbr').textContent = "N/A";
            document.getElementById('creditLimit').textContent = "N/A";
            document.getElementById('availableLimit').textContent = "N/A";
        }
    </script>
</body>

</html>