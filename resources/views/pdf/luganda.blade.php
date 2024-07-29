<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Purchase Agreement</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            margin: 0;
            padding: 0;
        }
        p{
            font-size: 14px !important;
        }
        #second-page ul li p,
        #second-page div p{
            font-size: 16px !important;
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
        .green-color{
            color: green;
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
            background-color: #9ed0ea;
            padding: 5px;
        }

    </style>
</head>
<body style="font-family:'Poppins', sans-serif !important;">
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
            <p class="fw-bold text-danger">ENDAGAANO</p>
            <span>Wakati wa</span>
            <p class="fw-bold"><strong>Kayondo Tonny [Nanyini]</strong></p>
            <span>Ne:</span>
            <p class="fw-bold"><strong>{{$client->name}} [Omuguzi]</strong></p>
            <p class="fw-bold" style="margin-top: 25px;">Ebiri mu ndagaano eno:</p>
        </div>
        <div class="requirements">
            <div id="left">
                <ul>
                    <li>Ebikwata ku Nannyini</li>
                    <li>Ebikwata ku muguzi</li>
                    <li>Abeyimiridde omuguzi</li>
                    <li>Enzikiriziganya wakati wa nanyi n’omuguzi</li>
                </ul>
            </div>
            <div id="right">
                <ul>
                    <li>Ebikwata kukidduka ekitundibwa</li>
                    <li>Obuvunanyizibwa bwomuguzi</li>
                    <li>Enkola n’obukwakulizo</li>
                    <li>Ensasula nebirala</li>
                </ul>
            </div>
            <div style="clear: both;"></div> <!-- Clear float -->
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
                <p>Endagaano eno ekoleddwa enaku z’omwezi nga: <span class="blue-color"><strong>{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}.</strong></span></p>
                <p><strong>Wakati wa:</strong></p>
                <p><strong>KAYONDO TONNY</strong>, mutabani wa Kalwanyi Peter, omutuuze w’eKyassenya-Lwengo, Tel: 0704333591/ 0772333591, Omusumba wa Lwengo Pentecostal Life Church, NIN:  CM6803610254 QG  (mundagaano eno ye <strong>“Nanyini”</strong>) kuludda olumu.</p>

                <p><strong>Ne:</strong></p>

                <p><span class="blue-color"><strong style="text-transform: uppercase;">{{$client->name}}</strong></span>
                yazalibwa nga
                <span><strong class="blue-color">{{ \Carbon\Carbon::parse($client->dob)->isoFormat('Do MMMM YYYY') }}</strong></span>
                mutabani w’omwani n’omukyala
                <span class="blue-color"><strong>{{$client->father}} </strong></span>
                ne:
                <span class="blue-color"> <strong>{{$client->mother}}</strong></span>.
                Omutuuze w’e
                 <span class="blue-color"><strong>{{$client->residence}}</strong></span>
                Enamba y’essimu:
                <span class="blue-color"><strong>{{$client->contact}}</strong></span>
                n’omulimo gwe:
                <span class="blue-color"><strong>{{$client->occupation}}</strong></span>
                NIN:
                <span class="blue-color"><strong>{{$client->nin}}</strong></span>
                (mundagaano eno ye <strong>“Muguzi”</strong>) kuluda olulala.
                </p>
                <p><strong>ERA NGA:</strong></p>
                <div style="margin-top:-20px;">
                    <ul style="list-style-type: upper-alpha;">
                        <li>
                            <p>Kayondo Tonny ye Nanyini kidduka (erambuluddwa mu kawaayiro 1.1), etundibwa mu ndagaano eno era nga tebanjibwa.</p>
                        </li>
                        <li>
                            <p>Omuguzi ayina obwagazi okugula e e kiduka  okuva ku Nanyini waayo ku nkola eya “Looni” j’anasasula mu bitundu tundu oluvanyuna lwa buli banga egere, era ne Nanyini mwetegefu okuwa Omuguzi Kiduka kino n’ebijikwatako singa omuguzi anaatuukiriza enkola n’obukwakurizo obuli mundagaano eno.</p>
                        </li>
                        <li>
                            <p>
                                Omuguzi yetegereza e kiduka  kino era mumativu n’embeera jerimu.
                            </p>
                        </li>
                        <li>
                            <p>
                                Nanyini awadde Omuguzi e kiduka  eyogerwako mu nkola ekiriziganyiddwako mu ndagaano eno.
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
                <p style="margin-top:50px;"><strong>ENJUUYI Z’OMBI ZITUUSE KUNZIKIRIZIGANYA KUBINO WAMANGA:</strong></p>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom:20px;">
                        <strong>1. EKITUNDIBWA</strong>
                        <ol style="list-style-type: none; line-height:30px;">
                            <li>
                                1.1.1. Ekitundibwa; Nanyini mumbeera eno aguza Omuguzi ekiduka kino wamanga:
                            </li>
                            <li>
                                1.1.2. Ekika ky’ekiduka e kitundibwa: <strong class="blue-color">{{$client->motor->type}}</strong>
                            </li>
                            <li>
                                1.1.3. Embeera y’ekiduka: <strong class="blue-color">{{$client->motor->condition}}</strong>
                            </li>
                            <li>
                                1.1.4. Enkola: <strong class="blue-color">{{$client->motor->make}}</strong>
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
                        1.12. Ekifo/ ekituundu endagaano w’essiddwako omukono: <strong class="red-color">{{$client->payment->agreement_place}}</strong>
                    </li>
                    <li style="margin-bottom:20px;">
                            <strong>1.4. ENSASULA:</strong>
                            Omuguzi atandise ne Ugx. <span class="red-color">{{$client->payment->initial_deposit}}</span> nga entadikwa kukusasula ekiduka kino, oluvanyuma lw’okuwebwa ekiduka kino, omuguzi wa kusasula Ugx. <span class="red-color">{{$client->payment->weekly_deposit}}.</span> buli wiiki obutassuka Sunday okumala wiiki <span class="red-color">{{$client->payment->total_weeks}}. </span> nga omugate gy’emyezi <span class="red-color">{{$client->payment->agreed_months}} </span>, okutandika nga <span class="red-color">{{ \Carbon\Carbon::parse($client->payment->starting_week)->isoFormat('Do MMMM YYYY') }}.</span> era nga guno gwemuwendo gw’ekiduka kino.
                    </li>
                    <li>
                            <strong>1.6. OKUSASULA AMANGU:</strong> Omuguzi ayina eddembe okusasula sente ezisukka ezo ezirambikiddwa buli wiiki okumusobozesa okumalayo ebbanja lye amangu naawebwa obwanannyini ku e kiduka   eno. (Enkola eno ekubirizibwa).
                    </li>
                </ul>
            </div>
            <div class="definition">
                <ul style="list-style-type: none;">
                    <li>
                        <strong>2.0. ENZIKIRIZIGANYA</strong>
                    </li>
                    <ol style="list-style-type: none;">
                        <li style="margin-bottom:20px;">
                            2.1. Nanyini akkiriza okuwa, n’Omuguzi akkiriza okutwala ekidduka oky’ogerwako mu kawaayiro akasooka (Sec. 1) kunkola n’obukwakulizo ebirambikiddwa mundagaano eno.
                        </li>
                        <li style="">
                            <strong>3.0. OMUWENDO</strong>
                        </li>
                        <li>
                            3.1. Omuguzi akkiriza okugula e kiduka   omugate gwa sente ezo ezitandika nezaanaawayo mu bitundutundu buli wiiki okumala ebanga ely’emyezi egere.
                        </li>
                    </ol>
                </ul>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:25px;" alt="footer">
            </div>
        </div>
        <div class="fourth-page">
            <div class="definition">
                <ul style="list-style-type: none;">
                    <ol style="list-style-type: none;">
                        <li>
                            3.2. Omuguzi mukuteekamu okusaba kwe n’okuwaayo ssente ezitandika, akakasa nti obubaka bwona bwaawadeyo mukusaba kwe bwamazima era bwesigika. Nnanyina bwalaba nga Omuvuzi tasaanidde kuweebwa Kiduka Kiduka, ssente zino zakumudizibwa, naye bwekimala okuzuulwa nga e kiduka   emaze okumuweebwa nti obubaka bweyawaayo mukusaba kwe nti bwabulimba era bukyamya mugeri yonna, e kiduka   yakumugibwako, era ne ssente zino sizaakumudizibwa.
                        </li>
                    </ol>
                </ul>
            </div>
            <div class="definition">
                <ul style="list-style-type: none;">
                    <li>
                        <strong>4.0. ENSASULA</strong></p>
                    </li>
                    <ol style="list-style-type: none;">
                        <li>
                            4.1. Omuguzi wakusasula Nanyini ssente ezimubanjibwa mubudde ewatali kubanjibwa buli lunaku oba buli wiiki okusinziira kunzikiriziganya eyatuukibwaako mundagaano.
                        </li>
                        <li>
                            4.2. Omuguzi wakusasula Nanyini sente okutali misolo oba ebisale ebilala byona, ebisale n‘emisolo ebyoyongeramu buvunaanyizibwa bwa Nanyini.
                        </li>
                        <li class="red-color">
                            4.3. Omuguzi singa eremererwa okusasula Nanyini ebisale byabuli lunaku oba wiiki okumala wiiki bbiri (2) ezidiringana, Nanyini alina olukisa okumujjako e kiduka   kino n’epaakingibwa era n’endagaano n’eyimirizibwa.
                        </li>
                        <li>
                            4.3.1. Mumbeera eno Omuguzi tajja kuwakanya kyaNanyini kupaakinga e kiduka   kino  oba ng’ayiita mu babaka be (Nanyini) singa Omuvuzi aba yategeezeddwako oba nga asindikiddwa obubaka mubuwaandiike.
                        </li>
                        <li>
                            4.3.2. Omuguzi asuubirwa okuzza e kiduka  eri Nanyini yo emumbeera eno era Omuguzi wakusasula ebibasale ebisaamusamu mukuddizibwa e kiduka  eno.
                        </li>
                        <li>
                            4.3.3. Mukuddizibwa Kiduka Kiduka, Omuguzi wakusasula ebisale ebyemabega byona ebimubanjibwa mu wiiki enkadde ebyaviirako e kiduka  kino okupaakingibwa era endagaano eno enaddamu okutambula mbagirawo.
                        </li>
                        <li>
                            4.3.4. Mumbeera eno Omuguzi ayina ebanga lya wiiki bbiri (2) oba ennaku kumi nanya (14) okusasula sente zona ezimubanjibwa emababega okuva kulunaku e kiduka  lwemujiddwako okupaakingibwa. Singa Omuguzi aremererwa okusasulira sente ezimubanjibwa mu banga lino, oba okubaako enzikiriziganya yona jatuukako ne Nanyini, e kiduka  yakumujibwako ddala era obwaNanyini nebudizibwa Nnyiniyo mubujuvu era ayina olukisa okujikozesa kyayagala.
                        </li>
                    </ol>
                </ul>
            </div>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:100px;" alt="footer">
            </div>
        </div>
        <div class="fifth-page">
            <ul style="list-style-type: none;">
                <li class="red-color">
                    4.3.5. Singa ebanga eriragaane liggwayo nga omuguzi aky’abanjibwa sente zona, wakuwa engassi (fine) yakusasula sente zino emirundi ebiri (x2). Okugeza singa aba abangibwa emitwalo kumi (Ugx. 100,000), wakusasula emitwalo abiri (Ugx. 200,000). Omuguzi wakuwebwa ebbanga egere okusasula sente zino. Mungeri endala, omuguzi wakusigala nga asasula sente zaburi wiiki nga engassi okutuusa lwanasasula nanyini ebanja ekadde erimubanjibwa endagano lweyagwerako.
                </li>
                <li>
                    <p><strong>5.0 OBUVUNAYIZIBWA BW’OMUGUZI</strong></p>
                </li>
                <ol style="list-style-type: none;">
                    <li>
                        5.1. Omuguzi wakusasula sente, ebisale n’amabanja byona ebimubanjibwa mubujjuvu bwabyo alyoke aweebwe obwaNanyini ku Kiduka Kiduka.
                    </li>
                    <li>
                        5.2. Omuguzi obudde bwona wakukuuma e kiduka  mukifo ekituufu singa eba nga tevugibwa oba nga epaakingiddwa, emisana oba ekiro.
                    </li>
                    <li>
                        5.3. Omuguzi takirizibwa kutunda, kusiinga, kwazika, kugaba oba okulekera omuntu omulala yena atali mundagaano eno okuvuga oba okukozesa e kiduka  eno.
                    </li>
                    <li>
                        5.4. Omuguzi wakusasula ebisale byona mumateeka ebikwatagana n’okukozesa e kiduka  kino eli abo bekikwatako mubudde obutuufu okugeza eri Police, Stage kwavugira.
                    </li>
                    <li>
                        5.5. Omuguzi wadembe okuteeka e kiduka  kino mu “Insurance” mu mannya ga Nanyini nga akozesa “Insuarance Company” yona, era avunaanyizibwa kukusasula ebisale byona ebija nenkola eno.
                    </li>
                    <li>
                        5.6. Omuguzi ayina okukakasa nti e kiduka  eli mumbeera nungi era nti eweebwa service buli luvanyuma lwa wiiki bbiri (2) oba oluvanyuma lw’okutambula kilometer bibiri, kyona ekinaasooka.

                    </li>
                    <li>
                        5.7. Omuguzi wakukuuma e kiduka  nga kiri mumbeera nungi, era wakujitangira okuva eri okwononeka oba okubbibwa ekiseera kyona. Omuguzi wakukanisa e kiduka  singa eba eyonoonese mubugenderevu oba mubutali bugenderevu era akirize Nanyini okujikebera embeera gyerimu wakiri omulundi guno mu banga lya wiiki bbiri (2) oba obudde bwona bwalaba kiba kyetagisa okutuusa nga ebanga eryakanyizibwako liweddeyo.
                    </li>
                    <li>
                        5.8. Mumbeera singa Kiduka esanyiziddwawo oba akabenje, muliro oba okubbibwa, Omuguzi wakusasula sente zona eziba zimubanjibwa mundagaano eno oba okusinziira kunzikiriziganya enaatukibwako wakati w’Omuguzi ne Nanyini.
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
                        5.9. Singa Omuguzi alemererwa oba abuusa amaaso eky’okukuumira e kiduka  kino mumbeera enungi, ategeera nti Nanyini ayina olukisa okumujjako e kiduka  kino najidaabiriza oba najikanisa.
                    </li>
                    <li>
                        5.10. Singa e kiduka  enaaba edaabiriziddwa Nanyini, yakupaakingibwa era Omuguzi waakuweebwa ebanga lya nnaku musanvu (7) okusasula ebisale b’yokukanika oluvanyuma e kiduka  emuddizibwe.
                    </li>
                    <li>
                        5.12. Singa Omuguzi agaana okusasula ebisale by’okuddaabiriza Kiduka Kiduka, oba okutuuka kunzikieiziganya yona ne Nanyini, e kiduka  yakumujjibwako Nanyini era n’endagaano eyimirizibwe.
                    </li>
                    <div class="definition mt-5">
                        <li>
                            5.13. Omuguzi wakutegeeza Nanyini singa e kiduka  enaaba ekwatidwa oluvanyuma lw’okkuza omusaango ggwona oba nga eteekeddwako ebisal byonna okugeza nga etomedde.
                        </li>
                        <li>
                            5.14. Omuguzi wakutegeeza Nanyini singa e kiduka  enaaba ebuze, ebbidwa, eyonoonese oba nga kiri mumbeera yonna eyinza okumulemesa okusasula sente ezaburi wiiki.
                        </li>
                    </div>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li style="margin-bottom: 20px;">
                    <strong>6. ENKOLA N’OBUKWAKULIZO.</strong>
                    <p>6.1.0. Omuguzi wakukuuma obukwakulizo buno wamanga, era singa anaabuvoola, wakusasula engassi, era okuvoola okujja kudiringana kuyinza okuviirako okuyimirizibwa kw’endagaano eno wakati w’Omuguzi ne Nanyini. Omuguzi asuubiza obutakola bino wamanga:</p>
                </li>
                <li style="margin-bottom: 20px;">
                    6.1.1. Okukozesa e kiduka  mungeri emenya amateeka oba mungeri yonna ekontana namateeka g’eggwanga. Singa Omuguzi asangibwa nga akozesa e kiduka  mungeri eno, kino kimalawo endagaano eno bunambiro era naasasula ebisale byona ebiva mubumenyi bwamateeka. Okugeza okubbira ku Kiduka Kiduka, okutambuza ebyamaguzi ebitakirizibwa nebirara nga bwebirambikiddwa mu ssemateeka we Ggwanga.
                </li>
                <li style="margin-bottom: 20px;">
                    6.1.2. Okupangulula ebyuma bya e kiduka  oba okukyankalanya enkola ya e kiduka  entuufu oba okujjamu obuuma obulondoola (<span>Tracking Devices</span>).
                </li>
                <li style="margin-bottom: 20px;">
                    6.1.3. Okuvuga e kiduka  engendo empaanvu nga tayina Helmet oba ebiwandiiko ebimukiriza okuvugira ku kubo nga amateeka bwegalambika.
                </li>
                <li style="margin-bottom: 20px;">
                    6.1.4. Okwazika omuntu omulala yena atali mundagaano eno okumuyanbako okuvuga e kiduka  era wakuwa fayini.
                </li>
                <li>
                    6.2. Omuguzi era asuubiza nti obudde bwona.6.2.1. Wakukozesa Kiduka   Kiduka mungeri eyobuvunanyizibwa era etakontana na Ssemateeka wa Ggwanga Uganda.
                </li>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:20px;" alt="footer">
            </div>
        </div>
        <div class="seventh-page">
            <ul style="list-style-type: none;">
                <li>
                    <strong>7. OBWANANYINI, OBUVUNANYIZIBWA NE RIZIKI.</strong>
                </li>
                <ol style="list-style-type: none;">
                    <li>
                        7.1. Oluvanyuma lw’okuteeka omukono kundagaano eno n’Omuguzi okuweebwa Kiduka Kiduka, obuvunanyizibwa ku kukuuma n’okulabirira e kiduka  kino bidda eri Omuguzi naye obwaNanyini ku e kiduka  kino busigala kiri Nanyini okutuusa nga endagaano eweddeko.
                    </li>
                    <li>
                        7.2. Singa Omuguzi anaatukiriza obuvunanyizibwa bwe, enkola n’obukwakulizo ebiri mundagaano eno, saako okusasula Nanyini ebisale byona mubujjuvu, Nanyini wakukwasa Omuguzi ObwaNanyini ku e kiduka  kino mubujjuvu n’ebijogyogerako byonna, era anajikozesa mugeri yonna janaaba asazeewo okumuyamba okutuukiriza ebyetaago bye.
                    </li>
                </ol>
            </ul>
            <ul style="list-style-type: none;">
                <li>
                    <strong>8. ENONDOOLA YA SENTE EZISASULIBWA OMUGUZI.</strong>
                </li>
                <ol style="list-style-type: none;">
                    <li class="green-color">
                        8.1. Oluvanyuma lw’okusasula sente ezitandika n’okuteeka emikono kundagaano eno, Omuguzi wakuyingizibwa mu nkola (system) enayamba okulondoola ensasula ya looni ya e kiduka  eno.
                    </li>
                    <li>
                        8.2. Omuguzi wakukwasibwa Account okunaterekebwa sente zona zaanasasula okutandikira kwezo ezitandika, okutuusa kwezo ezabuli lunaku oba buli wiiki. Omuguzi wakukwasa Nnanyino sente zino oluvanyuma Nanyini aziteeke ku Account oba Nnanyi okuwa Omuguzi olukisa okuweereza sente zino butereevu ku Account okusinziira kukusalawookwe.
                    </li>
                    <li>
                        8.3. Omuguzi wakufuna obubaka (message) ku ssimu ye oluvanyuma lw’okuweereza sente ku Account ye. Obubaka buno bujja kuba bulaga Sente Omuguzi zasasudde mu wiiki eyo eyise, Omugate gwa sente eziri ku Account ye, Ebbanga ly’atambuddeko, n’ebbanga eribulayo omulayo ebbanja lye, wamu ne sente eziyitamu kwezo endagaane (Excess).
                    </li>
                    <li class="green-color">
                        8.4. Sente zona eziyitamu (Excess) zaakulondoolwa nga zigatibwa kwezo eziri ku Account, era zitoolebwe kw’ezo Omuguzi z’abanjibwa. Mungeri endala singa sente zino ziweza omuwendo ogubalirirwamu sente ezijja mu wiiki oba mu mwezi, ebanga lino lija kugatibwa ku bbanga Omuguzi lyeyakatambula, era litolebwe ku bbanga Omuguzi ly’abulayo okumalayo ebbanja lye.
                    </li>

                    <li class="red-color">
                        Endagaano eno tejja kukyusibwa mungeri yonna okujjako nga enjuuyi zombi zikiriziganyiza mubuwandiike era neziteekako emikono. Endagaano eno evunanyizibwako enjuuyi zombi, ababeyimiridde n’abataddeko emikono, era eja kukaatirizibwa wansi was Ssemateeka we Ggwanga Uganda.
                    </li>
                </ol>
            </ul>
            <div class="footer">
                <img src="{{ public_path('images/logo_big.jpg')}}" style="width: 10%; margin-top:35px;" alt="footer">
            </div>
        </div>

        <div class="nineth-page">
            <div class="referee-part">
                <div class="left-content">
                    <div class="photo">
                        <img src="{{ public_path('images/user03.jpg') }}" width="100" alt="">
                    </div>
                    <div class="details">
                        <p>NANYINI: <strong>Kayondo Tonny</strong></p>
                        <p>Signature: </p>
                        <p>Date: <span class="blue-color">{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</span></p>
                    </div>

                    <div class="details">
                        <p><strong>EY’EYIMIRIDDE OMUGUZI (1)</strong></p>
                        <p>ERINNYA: <span class="blue-color">{{$client->referee->referee1_name}}</span></p>
                        <p>BW’AMUYITA: <span class="blue-color">{{$client->referee->referee1_relationship}}</span></p>
                        <p>Contact: <span class="blue-color">{{$client->referee->referee1_contact}}</span></p>
                        <p>Signature: </p>
                    </div>

                    <div class="details">
                        <p><strong>STAGE CHAIRMAN</strong></p>
                        <p>ERINNYA: <span class="blue-color">{{$client->referee->st_chair_name}}</span></p>
                        <p>Contact: <span class="blue-color">{{$client->referee->st_chair_contact}}</span></p>
                        <p>Signature: </p>
                    </div>
                </div>
                <div class="right-content">
                    <div class="photo">
                        <img src="{{ public_path('images/user04.jpg') }}" width="100" alt="">
                    </div>
                    <div class="details">
                        <p>OMUGUZI: <span class="blue-color">{{$client->name}}</span></p>
                        <p>Signature:</p>
                        <p>Date: <span class="blue-color">{{ \Carbon\Carbon::parse($client->doa)->isoFormat('Do MMMM YYYY') }}</span></p>
                    </div>
                    <div class="details">
                        <p><strong>EY’EYIMIRIDDE OMUGUZI (2)</strong></p>
                        <p>ERINNYA: <span class="blue-color">{{$client->referee->referee2_name}}</span></p>
                        <p>BW’AMUYITA: <span class="blue-color">{{$client->referee->referee2_relationship}}</span></p>
                        <p>Contact: <span class="blue-color">{{$client->referee->referee2_contact}}</span></p>
                        <p>Signature: </p>
                    </div>
                    <div class="details">
                        <p><strong>CHAIRMAN W’OMUGUZI</strong></p>
                        <p>ERINNYA: <span class="blue-color">{{$client->referee->lc_chair_name}}</span></p>
                        <p>Contact: <span class="blue-color">{{$client->referee->lc_chair_contact}}</span></p>
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
