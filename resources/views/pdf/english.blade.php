<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Purchase Agreement</title>

    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }
        p{
            font-size: 15px;
        }
        .main-content {
            padding: 10mm; /* Padding for A4-like appearance */
            /* margin: auto; Center the content horizontally */
            max-width: 800px; /* Limit width for readability */
            /* margin-top: -100px; */
        }
        .header {
            margin-bottom: 20px;
            overflow: hidden; /* Clearfix for floated elements */
        }
        .header span {
            float: left;
        }
        .right-content {
            float: right;
        }
        #passport_photo {
            width: 30mm;
            height: 40mm;
            background-color: #ddd;
            display: inline-block;
            margin-bottom: 5px;
        }
        #client-name{
            margin-top: 170px;
        }
        #main_logo img {
            width: 100%; /* Make the logo responsive */
            max-width: 500px; /* Limit maximum width */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px;
        }
        #introduction_content {
            text-align: center;
            margin-bottom: 20px;
        }
        .requirements {
            margin-top: 20px;
            overflow: hidden; /* Clearfix for floated elements */
            text-align: center;
        }
        .requirements #left,
        .requirements #right {
            width: 48%;
            float: left;
            text-align: left;
            margin-left:20px;
        }
        .requirements ul {
            list-style-type: disc !important;
            padding: 0;
        }
        #left ul{
            list-style-type: disc !important;
        }
        .footer {
            text-align: center;
            margin-top: 25px;
        }
        .coat{
            text-align: center;
            font-size: 12px;
            line-height: 5px;
        }
        #main_logo {
            text-align: center; /* Center-align its children (the image) */
        }

        .footer img {
            width: 100%; /* Make the footer image responsive */
            max-width: 800px; /* Limit maximum width */
            height: auto; /* Maintain aspect ratio */
        }
        /* blue color words */
        .blue-color{
           color: rgb(49, 127, 196);
           font-weight: bold;
        }
        .red-color{
            color: rgb(227, 48, 48);
            font-weight: bold;
        }
        .fourth-page ol li,
        .fifth-page ol li,
        .sixth-page ol li,
        .seventh-page ol li,
        .eighth-page ol li{
            margin-bottom: 20px;
        }
        .third-page,
        .fourth-page,
        .fifth-page,
        .sixth-page,
        .seventh-page,
        .eighth-page{
            background-image: url('');
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }
        /* referee part */
        .referee-part {
            clear: both; /* Clear any floats */
            margin-left:50px;
        }

        .referee-part .left-content {
            float: left; /* Float left to move left content to the left */
            width: 50%; /* Adjust width as needed */
        }

        .referee-part .right-content {
            float: right; /* Float right to move right content to the right */
            width: 50%; /* Adjust width as needed */
        }
        .bg-blue{
            background-color: #558da9;
            padding: 5px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="main-content">
        <div class="header">
            <span class="bg-blue">{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</span>
            <div class="right-content">
                <span id="passport_photo"></span>
                <span id="client-name">{{$client->name}}</span>
            </div>
            <div style="clear: both;"></div> <!-- Clear float -->
        </div>
        <div id="main_logo">
            <img src="{{ public_path('images/logo_big.jpg')}}" alt="BTS">
        </div>
        <div id="introduction_content">
            <p class="fw-bold text-danger">HIRE PURCHASE AGREEMENT</p>
            <span>Between</span>
            <p class="fw-bold">Kayondo Tonny [Owner]</p>
            <span>And</span>
            <p class="fw-bold">{{$client->name}}</p>
            <p class="fw-bold" style="margin-top: 25px;">This Agreement Consists Of:</p>
        </div>
        <div class="requirements">
            <div id="left">
                <ul>
                    <li>Owner’s Personal information</li>
                    <li>Hirer’s Personal information</li>
                    <li>Referee’s Personal information</li>
                    <li>Definition of the Equipment</li>
                    <li>Agreement between both parties</li>
                </ul>
            </div>
            <div id="right">
                <ul>
                    <li>Consideration</li>
                    <li>Aggregation of the Hirer</li>
                    <li>Loan terms and conditions</li>
                    <li>Risk management & Control</li>
                    <li>Monitoring of the Hirer’s payments</li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="footer">
            <img src="{{ public_path('images/footer.jpg')}}" alt="footer">
        </div>
        {{-- another section --}}
        <div id="second-page">
            <div class="coat">
                <img src="{{ public_path('images/coat.jpg')}}" style="width: 16%;" alt="footer">
                <p><strong>THE REPUBLIC OF UGANDA</strong></p>
                <P>IN THE MATTER OF THE CONTRACTS ACT 2010</P>
                <p>MOTORCYCLE SALE AND HIRE PURCHASE AGREEMENT</p>
            </div>
            <div>
                <p>This Agreement is made this date of <span class="blue-color"><strong>{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</strong></span></p>
                <p><strong>Between</strong></p>
                <p><strong>KAYONDO TONNY</strong>, Son of Kalwanyi Peter, Resident of kyassenya-Lwengo, Tel. contact: 0704333591/0772333591, Pastor at Lwengo Pentecostal Life Church, NIN Number CM 6803610254 QG (Here in after "the Owner") on the one part.</p>

                <p><strong>And</strong></p>

                <p><span class="blue-color"><strong style="text-transform: uppercase;">{{$client->name}}</strong></span>
                BORN ON
                <span><strong class="blue-color">{{$client->dob}}</strong></span>
                SON OF
                <span class="blue-color"><strong>{{$client->father}} </strong></span>
                and
                <span class="blue-color"> <strong>{{$client->mother}}</strong></span>.
                A RESIDENT OF
                 <span class="blue-color"><strong>{{$client->residence}}</strong></span>
                TELEPHONE CONTACT
                <span class="blue-color"><strong>{{$client->contact}}</strong></span>
                WITH AN OCCUPATION OF
                <span class="blue-color"><strong>{{$client->occupation}}</strong></span>
                AND NIN:
                <span class="blue-color"><strong>{{$client->nin}}</strong></span>
                (Here in after “the Hirer”) of the other part.</p>
                <p style="margin-top:10px;"><strong>WHEREAS.</strong></p>

                <div style="margin-top:-20px;">
                    <ul style="list-style-type: upper-alpha;">
                        <li>
                            <p>Kayondo Tonny is the legal and registered Owner of the motorcycle (more particularly described in clause 1.1), the subject matter of this Agreement and owns the motorcycle free from any charge or encumbrances.</p>
                        </li>
                        <li>
                            <p>The Hirer is delirious of buying the said motorcycle from the Owner on a Hire Purchase arrangement and the Owner is willing to let the said motorcycle to the Hirer, with a view to transfer legal title and interest in the said motorcycle to the Hirer, subject to the fulfillment by the Hirer of the terms and conditions of the Hire Purchase Agreement.</p>
                        </li>
                        <li>
                            <p>
                                The Hirer has inspected the said motorcycle and is satisfied with its condition and considers the motorcycle fit for the purposes for which he requires it.
                            </p>
                        </li>
                        <li>
                            <p>
                                The Owner has delivered the said motorcycle to the Hirer in the manner agreed upon under this Agreement whereas the Hirer acknowledges receipt of the motorcycle in good mechanical condition.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:50px;" alt="footer">
            </div>
        </div>

        <div class="third-page">
            <div>
                <p><strong>NOW IT IS AGREED BETWEEN BOTH PARTIES AS FOLLOWS:</strong></p>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom:20px;">
                        <strong>1. DEFINITION</strong>
                        <ol style="list-style-type: none; line-height:30px;">
                            <li>
                                1.1.1. Equipment: The Owner hereby Hires to the Hirer the following equipment:
                            </li>
                            <li>
                                1.1.2. Equipment type: <strong class="blue-color">{{$client->motor->type}}</strong>
                            </li>
                            <li>
                                1.1.3. Equipment condition: <strong class="blue-color">{{$client->motor->condition}}</strong>
                            </li>
                            <li>
                                1.1.4. Make: <strong class="blue-color">{{$client->motor->make}}</strong>
                            </li>
                            <li>
                                1.1.5. Color: <strong class="blue-color">{{$client->motor->color}}</strong>
                            </li>
                            <li>
                                1.1.6. Registration number: <strong class="blue-color">{{$client->motor->registration}}</strong>
                            </li>
                            <li>
                                1.1.7. Engine number: <strong class="blue-color">{{$client->motor->engine}}</strong>
                            </li>
                            <li>
                                1.1.8. Chassis number: <strong class="blue-color">{{$client->motor->chasis}}</strong>
                            </li>
                            <li>
                                1.1.9. Date of registration: <strong class="blue-color">{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</strong>
                            </li>
                            <li>
                                1.1.10. 1Registered Owner <strong class="blue-color">{{$client->motor->registered_names}}</strong>
                            </li>
                        </ol>
                    </li>
                    <li style="margin-bottom:20px;">
                        1.2. Place of Agreement signing: <strong class="red-color">{{$client->payment->agreement_place}}</strong>
                    </li>
                    <li style="margin-bottom:20px;">
                            <strong>1.3. PAYMENT</strong>
                            The hirer has paid Ugx. <span class="red-color">{{$client->payment->initial_deposit}}</span> as an initial deposit. Additionally, The hirer shall make weekly deposits of Ugx. <span class="red-color">{{$client->payment->weekly_deposit}}</span> in advance of Sunday of every week for a period of <span class="red-color">{{$client->payment->total_weeks}} weeks.</span> A rough period of <span class="red-color">{{$client->payment->agreed_months}} months</span>, with effect from <span class="red-color">{{$client->payment->starting_week}}</span>. The summation of these amounts shall be selling price of the motor vehicle
                    </li>
                    <li>
                            <strong>1.6. Sales price:</strong> the Hirer has an option to complete the Agreement requirements early thereby claiming Ownership earlier.
                    </li>
                </ul>
            </div>
            <div class="definition">
                <ul style="list-style-type: none;">
                    <li>
                        <strong>2.0. AGREEMENT</strong>
                    </li>
                    <ol style="list-style-type: none;">
                        <li style="margin-bottom:20px;">
                            2.1. The Owner has agreed to let, and the Hirer has agreed to take on Hire the Equipment more particularly described in the schedule here on Hire / Purchase arrangement, based on the terms and conditions stipulated herein.
                        </li>
                        <li style="margin-bottom:20px;">
                            <strong>3.0. CONSIDERATION</strong>
                        </li>
                        <li>
                            3.1. In consideration of the delivery of the equipment to the Hirer, the Hirer has agreed to take the Equipment on Hire Purchase for total consideration of the Hire Purchase payments over the Term and the Hire/ Purchase initial installment parts 1 and 2
                        </li>
                    </ol>
                </ul>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:35px;" alt="footer">
            </div>
        </div>
        <div class="fourth-page">
            <div class="definition">
                <ul style="list-style-type: none;">

                    <ol style="list-style-type: none;">
                        <li>
                                3.2. By clients submitting and paying for initial installments parts 1 and 2, the Hirer certifies all information is accurate and trustful and as such, if the client does not qualify for the Hire Purchase asset, these funds will be refundable. Initial installment parts 1and 2 will not be refundable if the application information provided are false or misleading in any way.
                        </li>
                    </ol>
                </ul>
            </div>
            <div class="definition">
                <ul style="list-style-type: none;">
                    <li>
                        <strong>4.0. PAYMENTS</strong></p>
                    </li>
                    <ol style="list-style-type: none;">
                        <li>
                                4.1. The Hirer shall pay the Owner whenever due and without demand, any and all Money due as daily or weekly installments under the term of this Agreement and or which the Owner sees if it should be paid in order to make good any default committed by the Hirer.
                        </li>
                        <li>
                                4.2. The Hirer shall make all payments free of charges and duties, and that the payments are at the Hirer’s risk until received at the address appointed for this purpose by the Owner.
                        </li>
                        <li class="red-color">
                                4.3. Where the Hirer fails to make Hire Purchase payments for two (2) or more weeks, the Owner reserves the right to repossess the motorcycle and terminate this Agreement.
                        </li>
                        <li>
                                4.3.1. The Hirer shall not object to the retaking of possession of the said motorcycle by the Owner or his agents and/or by written notice to the Hirer.
                        </li>
                        <li>
                                4.3.2. The Hirer is expected to return the equipment to the Owner, if the Owner must retrieve the Equipment, an impounding Fee is charged.
                        </li>
                        <li>
                                4.3.3. Upon repossession of the motorcycle, the Hirer shall be under obligation to fully settle any amounts in arrears of that date.
                        </li>
                        <li>
                                4.3.4. Where the Hirer pays at least Eighty percent (80%) of the arrears within fourteen (14) days from the date of repossession of the motorcycle or reaching on any mutual agreement, the Owner may at its full discretion, return the motorcycle to the Hirer, and this Agreement will continue the basis laid out herein.
                        </li>
                        <li class="red-color">
                            4.3.5. In a situation where the agreed period of loan payment comes to an end the the Hirer has loan balances, he will be fined to pay two times the debt balance. For example, if the balance is Ugx. 200,000, the Hirer shall pay Ugx. 400,000 as fine. Alternatively, the hirer may be required to continue paying weekly deposits until he is set to bring the remaining balance at the end of the agreement at once, these extra weeks serve as fines, not deducting on the debt.
                    </li>
                    </ol>
                </ul>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:20px;" alt="footer">
            </div>
        </div>
        <div class="fifth-page">
            <ul>
                <ol style="list-style-type: none;">
                    <li>

                            4.3.6. Hirer has three (3) weeks (21 days) from date of repossession to clear all outstanding balances on the Hire/Purchase payments and any fees or charges. If this balance is not cleared in full within 21 days / 3 weeks or both parties failing to reach any agreement, the Owner reserves the right to re-allocate or otherwise reassert their right to full possession and Ownership of the equipment.

                    </li>
                    <li>

                        4.4.0. Payments made over and above the weekly minimum are both allowed and encouraged and shall result in faster Hire Purchase completion.

                    </li>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li>
                    <p><strong>5.0. OBLIGATIONS OF THE HIRER</strong></p>
                </li>
                <ol style="list-style-type: none;">
                    <li>

                            5.1. The Hirer shall pay all Hire/Purchase payments fees, charges and penalties in timely manner as laid out under this Agreement and complete all Hire Purchase payments and clear all outstanding balances before Ownership of the property transferred.

                    </li>
                    <li>

                            5.2. The Hirer shall always keep the equipment in a secure Parking area including night and day when not being driven by the Hirer.

                    </li>
                    <li>

                            5.3. The Hirer/ shall not sell, assign, pledge, charge mortgage, sublet, license lend, donate, gift with the possession of the said Equipment and not allow the said Equipment to be used or operated by third parties.

                    </li>
                    <li>

                            5.4. The Hirer shall keep the equipment free and clear of any liens or other encumbrances and shall not permit any act where Owner’s title or rights may be negatively affected. The Hirer shall be responsible for complying with and comforting to all laws and regulations relating to the possession, use or maintenance of the Equipment. Furthermore, Hirer shall promptly pay all taxes, fees, licenses and governmental charges together with any penalties or interest thereon relating to the possession use or maintenance of the Equipment.

                    </li>
                    <li>

                        5.6. The Hirer must ensure that the equipment is properly serviced in accordance with manufacturer guidelines where servicing shall happen every two (2) weeks or 200km, whichever comes first.

                    </li>
                    <li>

                        5.7. The Hirer shall until and unless all installments of rent are paid, keep and maintain the Equipment in good order and condition and preserve them against loss or injury, by theft etc. (reasonable wear and tear only expected) and make good all damages whether accidental or otherwise and at all times allow the Owner, his Agents or servant to inspect the same whenever demanded.

                    </li>
                </ol>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:55px;" alt="footer">
            </div>
        </div>
        <div class="sixth-page">
            <ul style="list-style-type: none;">
                <ol style="list-style-type: none;">
                    <li class="red-color">

                            5.8. In the event of the Equipment being damaged or destroyed beyond repair or replacement or lost by fire, theft or any other cause, the Hirer shall never-the-less remain liable for and pay the Owner all remaining installment due on the Hire/ Purchase Agreement.

                    </li>
                    <li>

                            5.9. Where the Hirer fails or neglects to keep the Equipment in a proper state of repair, he acknowledges that the Owner may impound the equipment and undertake the repair.

                    </li>
                    <li>

                            5.10. Once repaired by the Owner, he shall keep the said motorcycle in its custody and give the Hirer a period of seven (7) days within which to settle bills for repair of the said Equipment. If the cost of repairs and overdue amount on the Hire Purchase payments are repaid, the Owner shall return the equipment to the Hirer.

                    </li>
                    <div class="definition mt-5">
                        <li>

                                5.12. Where the Hirer fails to settle the bills for repair within the stated time period, the Owner reserves the right to repossess the motorcycle and terminate this Agreement without prejudice to the Owner’s right to claim from the Hirer any installments in arrears up to the time seizure of the motorcycle for repair purposes.

                        </li>
                        <li>

                                5.13. The Hirer must indemnify the Owner against all claims by third parties arising by accident or other reason caused by the said motorcycle until the said is returned to the Owner or transferred to the Hirer in terms of the Agreement.

                        </li>
                        <li>

                                5.14. The Hirer shall inform the Owner at the earlier opportunity if the Equipment is lost, damaged or stolen.

                        </li>
                    </div>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li style="margin-bottom: 20px;">
                    <strong>6. TERMS AND CONDITIONS.</strong>
                    <p>The Hirer shall preserve the following terms and conditions and breaches of such terms will lead to the respective fine being applied any further breaches may lead to repossession of the motorcycle and termination of the contract, at the Owner’s discretion. The Hirer warrants that they will not:</p>
                </li>
                <li style="margin-bottom: 20px;">

                    6.1.1. Use or permit the said motorcycle to be used in contravention of any Law during the hiring period. Hirers found breaching the laws may have their Hire/Purchase immediately terminated or fined by the Owner as well as be required to pay any relevant legal costs arising from such actions.

                </li>
                <li style="margin-bottom: 20px;">

                    6.1.2. Temper, disconnect, obstruct or otherwise affect the normal operation of the motorcycle or asset tracking devices. Any efforts to do so, determined by the Owner shall result in a penalty Fee being applied, where repeat efforts to do so shall result in immediate termination of this contract.

                </li>
                <li>

                    6.1.3. Operate the equipment without wearing a Helmet. Hirer found driving without a helmet by any person employed by the Owner the Owner or by the Police shall result in a Penalty Fee being applied.

                </li>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:20px;" alt="footer">
            </div>
        </div>
        <div class="seventh-page">
            <ul>
                <ol style="list-style-type: none;">
                    <li>

                            6.1.4. Allow any other person to drive the Equipment. If a third party is found to have been driving the equipment, the Hirer is liable to pay a fine. A repeat offense may lead to termination of the Agreement.

                    </li>
                    <li>

                            6.2.1. The Hirer additionally warrants that they will always use the Equipment in a careful and proper way and will comply with all Laws, Rules, Statutes and Orders regarding the use, maintenance of storage of the equipment.

                    </li>
                    <li class="red-color">

                            6.2.2. The Hirer shall not drive this motorcycle past 10:00pm to avoid possible risks of theft, robbery and murder. Otherwise, the hirer shall be held neglect and responsible of the possible fines and risk outcomes.

                    </li>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li>
                    <strong>7. PASSING OF PROPERTY AND RISK</strong>
                </li>
                <ol style="list-style-type: none;">
                    <li>

                            7.1. Effective from signing this Agreement and delivery of the motorcycle to the Hirer, the risk in the motorcycle shall immediately pass to the Hirer. However, the property in the motorcycle shall remain within the Owner until motorcycle is transferred to the Hirer under terms of this Agreement.

                    </li>
                    <li>

                            7.2. If the Hirer shall duly observe and perform all the conditions herein contained herein and shall pay to the Owner entire Hire / Purchase payments with all other fees and charges, if any payable by him to the Owner under the provision of this Agreement, the hiring shall seize and the property in the said motorcycle will pass from the Owner to the Hirer so that all rights tittles and interest in and to the Equipment shall inure to the benefit of the Hirer alone.

                    </li>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li>
                    <strong>8.0. MONITORING OF HIRER’S PAYMENTS</strong>
                </li>
                <ol style="list-style-type: none;">
                    <li>

                            8.1. Upon payment of the first installment by the Hirer to the Owner, the Hirer shall be registered into a system that will help in monitoring his Hire/ Purchase payments.

                    </li>
                    <li>

                            8.2. The Hirer shall be given an Account on which all his payments shall be deposited starting with the first Hire Purchase installment to the weekly or daily installments.
                    </li>
                    <li>
                        The Hirer shall pay to the Owner these scheduled installments who shall deposit them to the Hirer’s Account. Alternatively, the Owner may permit the Hirer to deposit directly to his (hirer) assigned Account according to his (Owner) choosing which shall be influenced by the Hirer’s trustworthiness in the previous payment record.
                    </li>
                    <li>

                        8.3. The Hirer shall get a weekly message on his mobile phone which clearly indicates his last deposit, Total Account Balance, Period covered, Period left and Excess or less money compared to the targeted Account balance if any.

                    </li>
                </ol>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:20px;" alt="footer">
            </div>
        </div>
        <div class="eighth-page">
            <ul style="list-style-type: none;">
                <ol style="list-style-type: none;">

                    <li class="red-color">
                            8.4. Any Excess money shall be carefully monitored and followed and added on the account balance and deducted from the Amount for the Hirer to complete the due amount. Alternatively, this amount may be computed into weeks or months, added on the period covered and deducted from period Left. Excess payments are encouraged as they help the Hirer complete his Hire Purchase payments in a shorter period thus claiming for ownership of the subject matter of this Agreement.
                    </li>
                    <li>
                        <p>
                            This Agreement may not be modified in any manner unless in writing and signed by both Parties. This Agreement shall be binding upon the Parties, their successors, and assigns and shall be enforced under the laws of the Republic of Uganda.
                        </p>
                    </li>
                </ol>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:600px;" alt="footer">
            </div>
        </div>
        <div class="nineth-page">
            <div class="referee-part">
                <div class="left-content">
                    <div class="photo">
                        <img src="{{ public_path('images/user03.jpg') }}" width="100" alt="">
                    </div>
                    <div class="details">
                        <p>Owner: <strong class="blue-color">Kayondo Tonny</strong></p>
                        <p>Signature: </p>
                        <p>Date: <strong class="blue-color">{{$client->doa}}</strong></p>
                    </div>

                    <div class="details">
                        <p><strong>REFEREE 1</strong></p>
                        <p>Name: <strong class="blue-color">{{$client->referee->referee1_name}}</strong></p>
                        <p>Relationship: <strong class="blue-color">{{$client->referee->referee1_relationship}}</strong></p>
                        <p>Contact: <strong class="blue-color">{{$client->referee->referee1_contact}}</strong></p>
                        <p>Signature: </p>
                    </div>

                    <div class="details">
                        <p><strong>REFEREE 3 / STAGE CHAIRPERSON</strong></p>
                        <p>Name: <strong class="blue-color">{{$client->referee->st_chair_name}}</strong></p>
                        <p>Contact: <strong class="blue-color">{{$client->referee->st_chair_contact}}</strong></p>
                        <p>Signature:</p>
                    </div>
                </div>
                <div class="right-content">
                    <div class="photo">
                        <img src="{{ public_path('images/user04.jpg') }}" width="100" alt="">
                    </div>
                    <div class="details">
                        <p>Hirer: <strong class="blue-color">{{$client->name}}</strong></p>
                        <p>Signature:</p>
                        <p>Date: <strong class="blue-color">{{$client->doa}}</strong></p>
                    </div>
                    <div class="details">
                        <p><strong>REFEREE 2</strong></p>
                        <p>Name: <strong class="blue-color">{{$client->referee->referee2_name}}</strong></p>
                        <p>Relationship: <strong class="blue-color">{{$client->referee->referee2_relationship}}</strong></p>
                        <p>Contact: <strong class="blue-color">{{$client->referee->referee2_contact}}</strong></p>
                        <p>Signature: </p>
                    </div>
                    <div class="details">
                        <p><strong>REGIONAL CHAIRPERSON</strong></p>
                        <p>Name: <strong class="blue-color">{{$client->referee->lc_chair_name}}</strong></p>
                        <p>Contact: <strong class="blue-color">{{$client->referee->lc_chair_contact}}</strong></p>
                        <p>Signature:<strong></strong></p>
                    </div>
                </div>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:900px;" alt="footer">
            </div>
        </div>
    </div>
</body>
</html>
