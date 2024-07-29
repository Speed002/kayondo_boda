<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Form</title>
    <style>
        /* Define CSS styles inline for compatibility with dompdf */
        body {
            font-family:'Times New Roman', Times, serif;
            font-size: 14px;
        }
        .left-content {
            float: left;
            width: 50%;
        }

        .right-content {
            float: right;
            width: 50%;
        }

        .header:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Additional styling for content inside right-content */
        .right-content > div {
            padding: 0 10px; /* Adjust padding as needed */
        }
        .blue-color{
            color: rgb(0, 183, 255);
        }
    </style>
</head>
<body style="font-family:'Poppins', sans-serif !important;">
    <div class="main-content">
        <div class="header">
            <div class="left-content">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 50%;" alt="BTS">
            </div>
            <div class="right-content">
                <div>
                    <span style="background-color:#c0c5c8; padding:5px; padding-right:300px; border-radius:5px;">
                        Date:
                    </span>
                    <br>
                    <span>Sales Agreement and Transfer of Ownership</span>
                    <hr>
                    <span style="font-size: 12px;"><i>DRIVE EVERYDAY, SAVE EVERYDAY, PAY WEEKLY, THEN OWN FOREVER</i></span>
                </div>
            </div>
        </div>
        <div style="margin-top:50px;">
            <p>Motor-type: <span class="blue-color">{{$client->motor->type}}</span></p>
            <p>Make: <span class="blue-color">{{$client->motor->make}}</span></p>
            <p>Registration Number: <span class="blue-color">{{$client->motor->registration}}</span></p>
            <p>Engine Number: <span class="blue-color">{{$client->motor->engine}}</span></p>
            <p>Chasis Number: <span class="blue-color">{{$client->motor->chasis}}</span></p>
            <p>Previous Registered Owner: <span class="blue-color">{{$client->motor->registered_names}}</span></p>
            <p>Buyer: <span class="blue-color">{{$client->name}}</span></p>
            <p>Buyer NIN Number: <span class="blue-color">{{$client->nin}}</span></p>
        </div>
        <div>
            <p>The Seller Mr. Kayondo Tonny on behalf of Kayondo Boda Loans Co.Ltd confirms that buyer <span class="blue-color">{{$client->name}}</span> has fully completed the hire purchase of the above property at an agreed total cost of <span class="blue-color">Ugx. {{$client->payment->selling_price}}/=</span> paid through in a period of <span class="blue-color">{{$client->payment->agreed_months}} months</span> and any penalties as agreed on in the hire purchase agreement between the two parties. The seller hereby agrees to transfer its ownership and full responsibility to the buyer.</p>
        </div>
        <div>
            <p>Buyer: <span class="blue-color">{{$client->name}}</span></p>
            <p>On Behalf of Kayondo Boda Loans Co.Ltd</p>
            <p>Name</p>
            <p>______________________________________</p>
            <p>Position</p>
            <p>______________________________________</p>
            <p>Signature</p>
            <p>______________________________________</p>
            <p>Witness</p>
            <p>______________________________________</p>
        </div>
    </div>
</body>
</html>
