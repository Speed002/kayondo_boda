<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>KayondoBodaLoans.ltd</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f0f0f0; /* Light grey background */
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; Full viewport height */
            padding: 20mm; /* Padding for A4-like appearance */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        #passport_photo {
            width: 35mm;
            height: 45mm;
            background-color: #ddd;
            display: inline-block;
            margin-bottom: 5px;
        }
        .right-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #main_logo img{
            height: auto;
            width: 500px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row py-4">
        <div class="col-md-2"></div>
        <main class="col-md-8 px-md-4">
            <div class="main-content">
                <div class="header">
                    <span>Date</span>
                    <div class="right-content">
                        <span id="passport_photo"></span>
                        <span>Name of the client</span>
                    </div>
                </div>
                <div id="main_logo">
                    <img src="{{asset('images/logo_big.png')}}" alt="logo">
                </div>
                <div id="introduction_content" class="text-center">
                    <p class="fw-bold text-danger">HIRE PURCHASE AGREEMENT</p>
                    <span>Between</span>
                    <p class="fw-bold">Kayondo Tonny [Owner]</p>
                    <span>And</span>
                    <p class="fw-bold">Wassa spajij [Hirer]</p>
                    <p class="fw-bold" style="margin-top: 50px;">This Agreement Consists Of:</p>
                </div>
                <div class="requirements d-flex gap-5" style="margin-top: 100px;">
                    <div id="left">
                        <ul>
                            <li>Owner’s Personal information</li>
                            <li>Hirer’s Personal information</li>
                            <li>Refferee’s Personal information </li>
                            <li>Definition of the Equipment</li>
                            <li>Agreement between both parties</li>
                        </ul>
                    </div>
                    <div id="right">
                        <ul>
                            <li>Consideration</li>
                            <li>Aggregation of the Hirer</li>
                            <li>Loan terms and conditions</li>
                            <li>Risk management& Control</li>
                            <li>Monotoring of the Hirer’s payments</li>
                        </ul>
                    </div>
                </div>
                <div class="footer">
                    <img src="{{asset('images/footer.png')}}" alt="footer" style="width: 800px; margin-top:50px;">
                </div>
            </div>
        </main>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
