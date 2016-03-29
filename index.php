<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>O tym się nie mówi 3 - COACHING OSÓB Z USZKODZENIAMI SŁUCHU</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/button.css" title="button">
    <link rel="stylesheet" href="assets/css/tabelkacen.css">
    <link rel="stylesheet" href="assets/css/tabela_harmonogram.css">
    <link rel="stylesheet" href="assets/css/timeline.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/photos-slider.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <style>
        /* Button - these styles are the good stuff */

        .button {
            text-decoration: none;
            background-color: #999;
            background-image: -webkit-linear-gradient(hsla(0, 0%, 100%, .05), hsla(0, 0%, 0%, .1));
            background-image: -moz-linear-gradient(hsla(0, 0%, 100%, .05), hsla(0, 0%, 0%, .1));
            background-image: -ms-linear-gradient(hsla(0, 0%, 100%, .05), hsla(0, 0%, 0%, .1));
            background-image: -o-linear-gradient(hsla(0, 0%, 100%, .05), hsla(0, 0%, 0%, .1));
            background-image: linear-gradient(hsla(0, 0%, 100%, .05), hsla(0, 0%, 0%, .1));
            border: none;
            border-radius: .5em;
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .2),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, 0.1),
            inset 0 -.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 -.25em 0 hsla(0, 0%, 0%, .25),
            0 .25em .25em hsla(0, 0%, 0%, .05);
            color: #444;
            cursor: pointer;
            display: inline-block;
            font-family: sans-serif;
            font-size: 1em;
            font-weight: bold;
            line-height: 1.5;
            margin: 0 .5em 1em;
            padding: .5em 1.5em .75em;
            position: relative;
            text-decoration: none;
            text-shadow: 0 1px 1px hsla(0, 0%, 100%, .25);
            vertical-align: middle;
        }

        .button:hover {
            outline: none;
            text-decoration: none;
        }

        .button:hover,
        .button:focus {
            text-decoration: none;
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .2),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 -.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 -.25em 0 hsla(0, 0%, 0%, .25),
            inset 0 0 0 3em hsla(0, 0%, 100%, .2),
            0 .25em .25em hsla(0, 0%, 0%, .05);
        }

        .button:active {
            text-decoration: none;
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .2),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 0 0 3em hsla(0, 0%, 100%, .2),
            inset 0 .25em .5em hsla(0, 0%, 0%, .05),
            0 -1px 1px hsla(0, 0%, 0%, .1),
            0 1px 1px hsla(0, 0%, 100%, .25);
            margin-top: .25em;
            outline: none;
            padding-bottom: .5em;
        }

        /* Light Text */

        .lightText {
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .25),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, .05),
            inset 0 -.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 -.25em 0 hsla(0, 0%, 0%, .5),
            0 .25em .25em hsla(0, 0%, 0%, .1);
            color: #fff;
            text-shadow: 0 -1px 1px hsla(0, 0%, 0%, .25);
        }

        .lightText:hover,
        .lightText:focus {
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .25),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, .05),
            inset 0 -.2em 0 hsla(0, 0%, 100%, .1),
            inset 0 -.25em 0 hsla(0, 0%, 0%, .5),
            inset 0 0 0 3em hsla(0, 0%, 100%, .2),
            0 .25em .25em hsla(0, 0%, 0%, .1);
        }

        .lightText:active {
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .25),
            inset 0 2px 0 hsla(0, 0%, 100%, .1),
            inset 0 1.2em 0 hsla(0, 0%, 100%, .05),
            inset 0 0 0 3em hsla(0, 0%, 100%, .2),
            inset 0 .25em .5em hsla(0, 0%, 0%, .05),
            0 -1px 1px hsla(0, 0%, 0%, .1),
            0 1px 1px hsla(0, 0%, 100%, .25);
        }

        /* Large */

        .large {
            font-size: 1.25em;
        }

        /* Medium */

        .medium {
            font-size: 1em;
        }

        /* Small */

        .small {
            font-size: .75em;
        }

        /* Regular */

        .regular {
            border-radius: .5em;
        }

        /* Square */

        .square {
            border-radius: .25em;
        }

        /* Round */

        .round {
            border-radius: 1.25em;
        }

        /* Red */

        .red {
            background-color: #ff6c6f;
        }

        /* Orange */

        .orange {
            background-color: #f6cf6f;
        }

        /* Yellow */

        .yellow {
            background-color: #fff6c6;
        }

        /* Green */

        .green {
            background-color: #6fcf6f;
        }

        /* Blue */

        .blue {
            background-color: #6fc6ff;
        }

        /* Purple */

        .purple {
            background-color: #f6c6ff;
        }

        /* White */

        .white {
            background-color: #eee;
        }

        /* Grey */

        .grey {
            background-color: #999;
        }

        /* Black */

        .black {
            background-color: #444;
        }

        /* Custom */

        .custom {
            background-color: #fff0f5; /* Set the button color here */
            color: #444; /* Remove this for a dark background */
        }
    </style>
</head>

<body data-spy="scroll" data-target="#site-nav">
<nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">

            <!-- logo -->
            <div class="site-branding">
                <a class="logo" href="index.php">

                    <!-- logo image  -->
                    <!--                    <img src="assets/images/logo.png" alt="Logo">-->

                    O tym się nie mówi 3
                </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div><!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="nav navbar-nav navbar-right">

                <!-- navigation menu -->
                <li class="active"><a data-scroll href="#about">O nas</a></li>
                <li><a data-scroll href="#registration">Rejestracja</a></li>
                <li><a data-scroll href="#harmonogram">Harmonogram</a></li>
                <!--                <li><a data-scroll href="#partner">Partnerzy</a></li>-->
                <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                <li><a data-scroll href="#pytania">Pytania</a></li>
                <li><a data-scroll href="#photos">Zdjęcia</a></li>
                <li><a data-scroll href="#location">Lokalizacja</a></li>

            </ul>
        </div>
    </div><!-- /.container -->
</nav>

<header id="site-header" class="site-header valign-center">
    <div class="intro"

    <h2>9 Kwiecień, 2016 / Lublin</h2>

    <h1>O tym się nie mówi 3</h1>

    <p> COACHING OSÓB Z USZKODZENIAMI SŁUCHU
        <br>
        <!--                <a href="https://web.facebook.com/events/821947551284970/"><i class="ion-social-facebook"></i></a>-->
    </p>
    <!--<p>First &amp; Largest Conference</p>-->

    <a class="btn btn-white" data-scroll href="#registration">Rejestracja na konferencję</a><br>

    <span style="margin-top: 80px; display:inline-block;">A także dołącz  na nasze wydarzenie na facebooku <a
            href="https://web.facebook.com/events/821947551284970/" title="Share on Facebook" target="_blank"><img
                src="assets/images/Facebook.svg" width="30px" height="30px"></a></span>

    </div>
</header>

<section id="about" class="section about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h3 class="section-title">SŁÓW KILKA O KONFERENCJI:</h3>

                <p>Po raz kolejny mamy zaszczyt zaprosić <b>WAS</b> na konferencję,<br>
                    tym razem na trzecią edycję <br>
                    pt. <b>„O tym się nie mówi III - coaching osób z uszkodzeniem słuchu”</b>.<br>
                    Poprzednia edycja pokazała nam, iż rozległość tematyki związanej z uszkodzeniem słuchu powoduje, że
                    temat pozostaje dalej niewyczerpany. <br>
                    Dlatego też, pojawiły się głosy o potrzebie zorganizowania kolejnej edycji konferencji.<br>
                    Przy obecnej skupimy się na aspektach psychologicznych.<br>
                    Codziennie zmagamy się z problemami, jakie sprawia dysfunkcja słuchu.<br>
                    Szczególnie w relacjach z innymi ludźmi, czy z sobą samym. <br>
                    <br>
                    <b>DLACZEGO COACHING?</b><br>
                    Coaching jest przede wszystkim odkrywaniem siebie, otoczenia, poprawianiem jakości życia,
                    wprowadzeniem zamierzonych przez nas zmian.<br>
                    Pojawił się kilka lat temu i sprawił, iż wiele ludzi - chętnych do zmiany życia - odmieniło je.<br>
                    Chcemy pokazać ideę coachingu i pod tym kątem pokazać uczestnikom, jak może on pomóc osobom z
                    uszkodzeniem słuchu.
                </p>
                <!--                <p><b>Zachęcamy do zgłaszania tematów referatów lub plakatów!</b></p>-->

                <figure>
                    <img alt="" class="img-responsive" src="assets/images/about-us.jpg"
                         style="height: 250px; margin-top: 5px;">
                </figure>

            </div><!-- /.col-sm-6 -->

            <div class="col-sm-6">

                <b>CO JEST NASZYM CELEM?</b>

                <p>W tej edycji konferencji bardzo byśmy chcieli skupić się na problemach,
                    z jakimi ludzie zmagają się każdego dnia - funkcjonowania osób niesłyszących w rodzinach, relacji z
                    rówieśnikami i znajomymi, z radzeniem sobie w dorosłym życiu.
                    Chcielibyśmy też zwrócić uwagę na psychikę osób z dysfunkcją słuchu - poczucie wartości, samoocenę,
                    motywację, akceptację własnego niedosłuchu, umiejętności radzenia sobie z problemami, jakich życie
                    nam stawia na drodze.
                    Odczuwamy także potrzebę by pokazać ludziom jak można żyć lepiej, inspirować do pokonywania własnych
                    ograniczeń, spełnienia marzeń.
                    Przede wszystkim chcemy pokazać, iż osoby z wadą słuchu mają <b>MOC</b> do wszystkiego, co zapragną
                    osiągnąć.
                    Uważamy, że taka wiedza będzie bardzo pomocna dla innych osób, które chciałyby poprawić swoją <b>JAKOŚĆ</b>
                    życia.
                </p>

                <ul class="list-arrow-right">
                    <b>Zapewniamy:</b> <br>
                    <li>Pętlę indukcyjną</li>
                    <li>Symultaniczny przekaz tekstowy (speech to text)</li>
                    <li>Tłumaczenie na język migowy</li>

                </ul>

                <span style="color:yellow;background-color: darkgreen">ZAPRASZAMY UCZESTNIKÓW DO ZGŁASZANIA TEMATÓW REFERATÓW LUB PLAKATÓW </span>
                <br><br>

                <ul class="list-arrow-right"><b>SUGEROWANE OBSZARY TEMATYCZNE:</b></ul>
                <li>Akceptacja siebie i własnego niedosłuchu</li>
                <li>Coaching- co to jest? Gdzie i do kogo można udać się po pomoc?</li>
                <li>Co możemy zrobić, by mieć wysokie poczucie własnej wartości,<br>
                    podnieść samoocenę?
                </li>
                <li>Jak radzić sobie z problemami?</li>
                <li>Co możemy zrobić lepiej? Jak wprowadzić zmiany w własnym życiu?</li>
                <li>Jak można naprawić relacje z innymi ludźmi, we własnej rodzinie?</li>
                <li>Co stoi na przeszkodzie, by spełniać marzenia?</li>
                </ul>

            </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->
        <a style="color:blue;margin: 0 auto;text-align: center;"
           href="https://drive.google.com/file/d/0B3TncuL0LxlfUzM0SmZ2Ynk5VDRTamFYSjhYZDQxanEtbjlj/view?pref=2&pli=1">Link
            do papierowej wersji zaproszenia na wydarzenie O tym się nie mówi 3 - coaching osób z uszkodzeniami
            słuchu.</a> <br>
    </div><!-- /.container -->
</section>

<section id="facts" class="section bg-image-1 facts text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                <i class="ion-ios-calendar"></i>
                <h3>9 Kwiecień<br>2016</h3>

            </div>
            <div class="col-sm-3">

                <i class="ion-ios-location"></i>
                <h3>Lublin<br>Polska</h3>

            </div>
            <div class="col-sm-3">

                <i class="ion-pricetags"></i>
                <h3>100<br>Miejsc</h3>

            </div>
            <div class="col-sm-3">

                <i class="ion-android-home"></i>
                <h3>Sala<br>CTW-302</h3>

            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>

<!--<section id="speakers" class="section speakers">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->

<!--<h3 class="section-title">Prelegenci</h3>-->
<!---->
<!--</div>-->
<!--</div>-->

<!--<div class="row">-->
<!--<div class="col-md-4">-->
<!--<div class="speaker">-->

<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-1.jpg">-->
<!--</figure>-->

<!--<h4>Jhon Smith</h4>-->

<!--<p>CEO of Peren</p>-->

<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->

<!--</div>&lt;!&ndash; /.speaker &ndash;&gt;-->
<!--</div>&lt;!&ndash; /.col-md-4 &ndash;&gt;-->

<!--<div class="col-md-4">-->
<!--<div class="speaker">-->

<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-2.jpg">-->
<!--</figure>-->

<!--<h4>Jhon Smith</h4>-->

<!--<p>CEO of Peren</p>-->

<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->

<!--</div>&lt;!&ndash; /.speaker &ndash;&gt;-->
<!--</div>&lt;!&ndash; /.col-md-4 &ndash;&gt;-->

<!--<div class="col-md-4">-->
<!--<div class="speaker">-->

<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-3.jpg">-->
<!--</figure>-->

<!--<h4>Jhon Smith</h4>-->

<!--<p>CEO of Peren</p>-->

<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->

<!--</div>&lt;!&ndash; /.speaker &ndash;&gt;-->
<!--</div>&lt;!&ndash; /.col-md-4 &ndash;&gt;-->
<!--</div>&lt;!&ndash; /.row &ndash;&gt;-->

<!--<div class="row">-->
<!--<div class="col-md-4">-->

<!--<div class="speaker">-->

<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-4.jpg">-->
<!--</figure>-->

<!--<h4>Jhon Smith</h4>-->

<!--<p>CEO of Peren</p>-->

<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-4">-->

<!--<div class="speaker">-->

<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-5.jpg">-->
<!--</figure>-->

<!--<h4>Jhon Smith</h4>-->

<!--<p>CEO of Peren</p>-->

<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->

<!--</div>-->
<!--</div>-->

<!--<div class="col-md-4">-->
<!--<div class="speaker">-->
<!--<figure>-->
<!--<img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-6.jpg">-->
<!--</figure>-->
<!--<h4>Jhon Smith</h4>-->
<!--<p>CEO of Peren</p>-->
<!--<ul class="social-block">-->
<!--<li><a href=""><i class="ion-social-twitter"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-facebook"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--<li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->


<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="PrzyciskDORejestracji" style="float:left;">
                    <!--<h3 class="section-title">Rejestracja &amp; Opłaty</h3>-->
                    <h3 class="section-title">Rejestracja</h3><br>
                    Rejestracja odbywa się na stronie Google Docs<br>
                    <a class="button large round yellow"
                       href="https://docs.google.com/forms/d/12VQP9EmvlmDwweOZ4girjKS9ewz-c9aq7V1Ogliktn4/viewform">Chcę
                        wziąć udział! </a> <br>

                    Opłata dla: <br>
                    Uczestnika biernego: <b>50 zł</b> <br>
                    Uczestnika czynnego: <b>100 zł</b> <br>


                </div>


                <div id="Dane_do_przelewu" style="float:right;">
                    <h3 class="section-title">Dane do przelewu:</h3>
            <span style="size: 18">
            <b>Odbiorca:</b> Polskie Stowarzyszenie Metody Fonogestów <br>
            <b>Numer Konta bankowego:</b> 42 1500 1520 1215 2007 5155 0000 <br>
            <b>Adres:</b><br>
            UL. ZBOŻOWA 64 <br>
            20-827 LUBLIN <br>
                <b>Bank:</b> Bank Zachodni WBK S.A; <br>
                <b>Tytuł przelewu:</b O TYM SIĘ NIE MÓWI 3 - Imię i Nazwisko><br>

                <b>WAŻNE:</b><br>
                <span style="color:yellow;background-color: darkgreen">Prosimy nie zapomnieć o wpisaniu tytułu przelewu swoim imieniem i nazwiskiem.</span><br>

            </span>
                </div>

            </div>


            <!--<h3 class="section-title">Rejestracja &amp; Opłaty</h3>-->


            <!--                <span style="color: red; size: 18;">-->
            <!--                Konto bankowe w którym będzie można dokonać przelewów, podamy wkrótce. <br>-->
            <!--                <b> Prosimy o nie korzystanie z danych konta bankowego z poprzedniej konferencji! </b>-->
            <!--                 <br>-->
            <!--                </span>-->

        </div>


    </div>

    </div>

    </div>
</section>


<section id="harmonogram" class="section partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="text-uppercase mt0 font-400">Harmonogram</h3>

                <div class="organization-text"
                     style="margin-right: ;:30px; float: left; margin-bottom: 30px; margin-right:30px;;">

                    <span style="color: deeppink;">

                    Szczegółowy program konferencji<br>
                        zostanie podany w późniejszym terminie.
                    <br>
                    Po konferencji planujemy wyjście integracyjne<br>
                        do restauracji dla chętnych uczestników.<br>
                    Będzie to okazja do porozmawiania,<br>
                        dzielenia się z doświadczeniami, wrażeniami.
                    <br><br>
                    <table class="tub">
                        <tr>
                            <th class="tub-baqh" colspan="2">Dla uczestników biernych<br></th>
                        </tr>
                        <tr>
                            <td class="tub-yw4l">2 kwietnia 2016r.</td>
                            <td class="tub-yw4l">Rejestracja uczestników biernych i termin dokonywania opłaty.</td>
                        </tr>
                    </table>
                </div>

                <style type="text/css">
                    .tg {
                        border-collapse: collapse;
                        border-spacing: 0;
                        border-color: #999;
                    }

                    .tg td {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        padding: 10px 5px;
                        border-style: solid;
                        border-width: 0px;
                        overflow: hidden;
                        word-break: normal;
                        border-color: #999;
                        color: #444;
                        background-color: #F7FDFA;
                    }

                    .tg th {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        font-weight: normal;
                        padding: 10px 5px;
                        border-style: solid;
                        border-width: 0px;
                        overflow: hidden;
                        word-break: normal;
                        border-color: #999;
                        color: #fff;
                        background-color: #26ADE4;
                    }

                    .tg .tg-baqh {
                        text-align: center;
                        vertical-align: top
                    }

                    .tg .tg-yw4l {
                        vertical-align: top;

                    }
                </style>
                <table class="tg">
                    <tr>
                        <th class="tg-baqh" colspan="2">Dla uczestników czynnych<br></th>
                    </tr>
                    <tr>
                        <td class="tg-yw4l">20 marca 2016r.<br></td>
                        <td class="tg-yw4l">Ostateczny termin nadsyłania zgłoszeń, <br>
                            W tym, rejestracja prelegentów z wystąpieniami (referaty/plakaty),<br> z załączonym
                            abstraktem.
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l">25 marca 2016r.</td>
                        <td class="tg-yw4l">Kwalifikacja prac do wystąpienia w sesji tematycznej<br>
                            lub w sesji plakatowej
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l">31 marca 2016r.</td>
                        <td class="tg-yw4l">Dokonanie opłaty konferencyjnej <br>
                            (wpłaty prosimy uiszczać dopiero po zakwalifikowaniu prac)
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l">31 marca 2016r.</td>
                        <td class="tg-yw4l">Przesłanie na adres konferencji <br>
                            ostatecznej wersji elektronicznej prezentacji
                        </td>
                    </tr>
                </table>

                <style type="text/css">
                    .tub {
                        border-collapse: collapse;
                        border-spacing: 0;
                        border-color: #aabcfe;
                    }

                    .tub td {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        padding: 10px 5px;
                        border-style: solid;
                        border-width: 0px;
                        overflow: hidden;
                        word-break: normal;
                        border-color: #aabcfe;
                        color: #669;
                        background-color: #e8edff;
                    }

                    .tub th {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        font-weight: normal;
                        padding: 10px 5px;
                        border-style: solid;
                        border-width: 0px;
                        overflow: hidden;
                        word-break: normal;
                        border-color: #aabcfe;
                        color: #039;
                        background-color: #b9c9fe;
                    }

                    .tub .tub-baqh {
                        text-align: center;
                        vertical-align: top
                    }

                    .tub .tub-yw4l {
                        vertical-align: top
                    }
                </style>
                <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <img src="assets/images/cd-icon-movie.svg" alt="Movie">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2><i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i>
                                <b>Uroczyste rozpoczęcie konferencji</b>
                            </h2>
                            <!--                            <p>Otwarcie zostanie przeprowadzone przez prof. dr hab Kazimiera KRAKOWIAK.</p>-->
                            <!--                            <a href="#0" class="cd-read-more">Read more</a>-->
                            <span class="cd-date">godz. 9:00 - 10:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>prof. dr hab. Kazimiera KRAKOWIAK</h2>
                            <p>Przyczyny procesu samowykluczania niesłyszących </p>
                            <span class="cd-date">godz. 10:00 - 10:20</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>dr hab. Ewa DOMAGAŁA-ZYŚK</h2>
                            <p>Czy da się żyć bez coacha, czyli o sztuce samowychowywania </p>
                            <span class="cd-date">godz. 10:20 - 10:40</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>dr Aleksandra BOROWICZ oraz dr Renata KOŁODZIEJCZYK</h2>
                            <p> Umiejętności komunikacyjne a poczucie własnej tożsamości osób z uszkodzeniem słuchu</p>
                            <span class="cd-date">godz. 10:40 - 11:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location">
                            <img src="assets/images/cd-icon-location.svg" alt="Location">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Przerwa kawowa (40 min.)</h2>
                            <p>Będzie można sobie pospacerować, porozmawiać z innymi osobami, czy też zjeść sobie
                                poczęstunek.</p>
                            <span class="cd-date">godz. 11:20 - 12.00</span>
                        </div> <!-- cd-timeline-content -->
                    </div>

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>mgr Monika SZYMANEK-SZAWRACKA</h2>
                            <p>Funkcjonowanie społeczne osób z uszkodzeniami słuchu</p>
                            <span class="cd-date">godz. 12:00 - 12:20</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>mgr Monika TRĘTKO</h2>
                            <p>Rola realizacji siebie w budowaniu wysokiego poczucia własnej wartości osoby niesłyszącej</p>
                            <span class="cd-date">godz. 12:20 - 12:40</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Anna ŁAZUCHIEWICZ</h2>
                            <p>Antropologia kulturowa Głuchych</p>
                            <span class="cd-date">godz. 12:40 - 13:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Iwona KRAWCZUK</h2>
                            <p>Głucha Polka Potrafi - pierwszy v-log motywacyjny dla osób Głuchych w Polskim Języku Migowym</p>
                            <span class="cd-date">godz. 13:00 - 13:20</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location">
                            <img src="assets/images/cd-icon-location.svg" alt="Location">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Przerwa obiadowa na Stołówce KULu (1,5 h)</h2>
                            <p>Przerwa obiadowa.</p>
                            <span class="cd-date">godz. 13:30 - 15:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div>

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Piotr LEŚNIEWSKI</h2>
                            <p>Sztuka pozytywnych pytań - czy chcesz zmienić swoje życie na lepsze - referat <br><br>
                                Od zamierzchłej historii do dziś - skąd po co i dlaczego, czyli o coachingu słów kilka, czy jesteś na to gotowy? - plakat</p>
                            <span class="cd-date">godz. 15:00 - 15:20</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Natalia SNOPEK oraz inż. Alicja NOWOGRODZKA</h2>
                            <p>Światełko w tunelu - pokonywanie właśnych trudności przy pomocy inspirujących mentorów </p>
                            <span class="cd-date">godz. 15:20 - 15:40</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Karolina CZABAN</h2>
                            <p>Jak jedzenie wpływa na psychikę</p>
                            <span class="cd-date">godz. 15:40 - 16:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="assets/images/cd-icon-picture.svg" alt="Picture">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Mateusz KARGUL</h2>
                            <p>Coaching w masażu i relaksie</p>
                            <span class="cd-date">godz. 16:00 - 16:20</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <img src="assets/images/cd-icon-movie.svg" alt="Movie">
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Zakończenie konferencji</h2>
                            <!--                            <p>Głucha Polka Potrafi - pierwszy v-log motywacyjny dla osób Głuchych w Polskim Języku Migowym</p>-->
                            <span class="cd-date">godz. 16:20 - 17:00</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->



            </div> <!-- cd-timeline-block -->
</section> <!-- cd-timeline -->
            </div>

        </div>
    </div>
</section>

<section id="contribution" class="section bg-image-2 contribution">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!--<h3 class="text-uppercase mt0 font-400">Submit Your Contribution Work</h3>-->
                <!--<p>You've inspired new consumer, racked up click-thru's, blown-up brand awareness. We can't give you back the weekends you worked, or erase the pain of being forced to make the logo bigger. But if you submit your best work.</p>-->
                <!--<a class="btn btn-white" href="#">Submit</a> <br>-->

                <h3 class="text-uppercase mt0 font-400">Opinie uczestników</h3>

                <ul id="text-slider">
                    <li>
                        <p>"Bardzo fajni ludzie, atmosfera, podobało mi się :) <br> Zadowolony uczestnik poprzedniej
                            konferencji. </p>
                    </li>
                    <li>
                        <p>"Polecam tą konferencję, atmosfera świetna!" <br> Zadowolony uczestnik poprzedniej
                            konferencji. </p>
                    </li>
                    <li>
                        <p>"Z chęcią przyjdę na kolejną konferencję jeśli będzie organizowana." <br> Zadowolony
                            uczestnik poprzedniej konferencji. </p>
                    </li>
                </ul>

                <style>
                    #text-slider li {
                        display: none;
                        list-style: none;
                    }
                </style>


                <!--<table border="black 3px solid">-->
                <!--<tr>-->
                <!--<td bgcolor="deeppink">Dla prelegentów z referatem bądź plakatem:</td>	<td bgcolor="deeppink">Dla uczestników</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td><span style="color: deeppink">20 marca 2016 r.</span><br>-->
                <!--Ostateczny termin nadsyłania zgłoszeń/rejestracja prelegentów <br>-->
                <!--z wystąpieniami (referaty/plakaty) z załączonym abstraktem<br>-->
                <!--<span style="color: deeppink">25 marca 2016r.</span><br>-->
                <!--Kwalifikacja prac do wystąpienia w <br>-->
                <!--sesji tematycznej lub w sesji plakatowej<br>-->
                <!--<span style="color: deeppink">31 marca 2016r.</span><br>-->
                <!--Dokonanie opłaty konferencyjnej <br>-->
                <!--(wpłaty prosimy uiszczać dopiero po zakwalifikowaniu prac)<br>-->
                <!--<span style="color: deeppink">31 marca 2016r.</span><br>-->
                <!--Przesłanie na adres konferencji <br>-->
                <!--ostatecznej wersji elektronicznej prezentacji.<br>-->
                <!--</td>-->
                <!--<td><span style="color: deeppink">02 kwietnia 2016r.</span><br>-->
                <!--Rejestracja uczestników biernych.-->
                <!--</td>-->
                <!--</tr>-->
                <!--</table>-->

                <!--<span style="color: deeppink" style="float: right">-->
                <!--Prosimy uczestników, aby uzupełnili zgłoszenie uczestnictwa w konferencji i przysłali na adres mailowy konferencji.<br>-->
                <!--Jest to obowiązkowe- bez tego, uczestnik nie jest wpisany na listę uczestników konferencji.-->
                <!--</span>-->
                <!--<br>-->
                <!--Szczegółowy program konferencji zostanie podany w późniejszym terminie.-->
                <!--<br>-->
                <!--Po konferencji planujemy wyjście integracyjne do restauracji dla chętnych uczestników.<br>-->
                <!--Będzie to okazja do porozmawiania, dzielenia się z doświadczeniami, wrażeniami.-->
                <!--<br>-->
            </div>
        </div>
    </div>
</section>

<!--<section id="schedule" class="section schedule">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-md-12">-->
<!--<h3 class="section-title">Event Schedule</h3>-->
<!--</div>-->
<!--</div>-->
<!--<div class="row">-->
<!--<div class="col-md-4 col-sm-6">-->
<!--<div class="schedule-box">-->
<!--<div class="time">-->
<!--<time datetime="09:00">09:00 am</time> - <time datetime="22:00">10:00 am</time>-->
<!--</div>-->
<!--<h3>Welcome and intro</h3>-->
<!--<p>Mustafizur Khan, SD Asia</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-4 col-sm-6">-->
<!--<div class="schedule-box">-->
<!--<div class="time">-->
<!--<time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>-->
<!--</div>-->
<!--<h3>Tips and share</h3>-->
<!--<p>Mustafizur Khan, SD Asia</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-4 col-sm-6">-->
<!--<div class="schedule-box">-->
<!--<div class="time">-->
<!--<time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>-->
<!--</div>-->
<!--<h3>View from the top</h3>-->
<!--<p>Mustafizur Khan, SD Asia</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->

<section id="partner" class="section partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Sponsorzy konferencji</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <b>Patronaci honorowi:<br></b>
                <img src="assets/images/partner/patronat-prezydent-zuk.png" alt="">
                <img src="assets/images/partner/Logo%20Patronat-rgb.jpg" alt="">
                <!--                <a class="partner-box prezydent-miasta"></a>-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <b>Patroni medialni:<br></b>
                <a class="partner-box charaktery"></a>
            </div>
            <div class="col-sm-3">
                <a class="partner-box radio-centrum"></a>
            </div>

            <!--            <div class="col-sm-3">-->
            <!--                <a class="partner-box akfon"></a>-->
            <!--            </div>-->

        </div>
        <div class="row">
            <div class="col-sm-3">
                <a class="partner-box swiat-ciszy"></a>
            </div>
            <div class="col-sm-3">
                <a class="partner-box polski-zwiazek-gluchych"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <a class="partner-box integracja"></a>
            </div>
<!--            <div class="col-sm-3">-->
<!--                <a class="partner-box echodnia"></a>-->
<!--            </div>-->
        </div>
        <div class="row">
            <div class="col-sm-3">
                <b>Sponsorzy: <br></b>
                <a class="partner-box galeria-smaku"></a>
            </div>
            <div class="col-sm-3">
                <a class="partner-box echodnia"></a>
            </div>
            <div class="col-sm-3">
                <a class="partner-box hostel-orla"></a>
            </div>

            <!--            <div class="col-sm-3">-->
            <!--                <a class="partner-box peziol"></a>-->
            <!--            <y/div>-->

        </div>

    </div>



    <div class="container" stle="float: left">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="float:left;">Sponsor <span style="color: #996515">Hostel</span>
                    <span style="color: saddlebrown">Orla</span><br>
                    udziela <span style="color: darkred">15 % zniżki</span> przy rezerwacji pokoju <br>
                    na hasło "O tym się nie mówi 3". </h3>
            </div>

            <img src="/assets/images/partner/logo_s.png"  width="250" height="140" alt="hostel-orla">

            <div class="col-sm-3" style="font-size: 18px; float: left">
                <span style="color: #996515">Hostel</span>
                <span style="color: saddlebrown">Orla</span><br>
                            <span style="color: blue">ul. Orla 6 <br>
                            20-022 Lublin <br>
                            tel. 883 993 999 <br></span>
                <a href="www.hostelorla.pl">www.hostelorla.pl</a> <br><br>
            </div>

        </div>
        Promocja naliczana jest jeśli rezerwacja zostanie wykonana przez telefon bądż przez wiadomość e-mail'ową.<br>

    </div>
</section>

<section id="pytania" class="section faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Najszczęstsze zadawane pytania</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    <!--                                    JAK DOJECHAĆ NA KONFERENCJĘ Z DWORCA PKS BĄDŹ PKP? </a>-->
                                    Jak dojechać na konferencję z dworca PKS bądż PKP? </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <h3></h3>
                                <p>
                                    Z dworca PKS należy udać się na przystanek MPK i liniami 2, 10, 18, 31 lub 57
                                    dojechać na przystanek Katolicki Uniwersytet Lubelski<br>
                                    <br>
                                    Ze stacji PKP Lublin należy udać się na przystanek MPK i liniami 13, 150 lub 151
                                    dojechać na przystanek Katolicki Uniwersytet Lubelski.<br>
                                    <br>
                                    Dokładny rozkład powyższych linii autobusowych, trolejbusowych, czasu podróży oraz
                                    inne szczegóły<br>
                                    dostępne na stronie www.lublin.jakdojade.pl bądź na stronie www.mpk.lublin.pl<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                   aria-controls="collapseTwo">
                                    Mam dietę i potrzebuję specialnego posiłku, czy mam to gdzieś zgłosić?</a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">W przypadku gdy uczestnik konferencji ma dietę i jadłospis należy
                                dostosowac do jego potrzeb,<br>
                                prosimy kontaktować się z Nami poprzez e-mail: konferencja.ss@gmail.com
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                   aria-controls="collapseThree">
                                    Gdzie organizowana będzie konferencja?</a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body">Konferencja odbędzie się w Katolickim Uniwersytecie Lubelskim Jana
                                Pawła II,<br>
                                Al. Racławickie 14, 20-950 w sali na trzecim piętrze w Centrum Transferu Wiedzy
                                (CTW).<br>
                                To najnowszy budynek uczelni i przylega on do Collegium Jana Pawła II (miejsce 2 edycji
                                konferencji)
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                   aria-controls="collapseFour">
                                    Jeśli macie jakieś pytania...</a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body">Napiszcie nam na adres konferencja.ss@gmail.com, a odpowiemy
                                e-mailowo. <br>
                                Dla najczęściej powtarzających się pytan, odpowiedzi umieścimy w tej sekcji.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<section id="photos" class="section partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Zdjęcia z poprzedniej konferencji</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <ul class="slides">
                    <input type="radio" name="radio-btn" id="img-1" checked/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-1.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-6" class="prev">&#x2039;</label>
                            <label for="img-2" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-2"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-2.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-1" class="prev">&#x2039;</label>
                            <label for="img-3" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-3"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-3.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-2" class="prev">&#x2039;</label>
                            <label for="img-4" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-4"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-4.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-3" class="prev">&#x2039;</label>
                            <label for="img-5" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-5"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-5.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-4" class="prev">&#x2039;</label>
                            <label for="img-6" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-6"/>
                    <li class="slide-container">
                        <div class="slide">
                            <img src="/assets/images/photos/photos-6.jpg"/>
                        </div>
                        <div class="nav">
                            <label for="img-5" class="prev">&#x2039;</label>
                            <label for="img-1" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <li class="nav-dots">
                        <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                        <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                        <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                        <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                        <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                        <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                    </li>
                </ul>
                <!--<ul class="grid">-->
                <!---->
                <!--<li class="grid-item grid-item-sm-6">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-1.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-4.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-5.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-6.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-7.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-8.jpg">-->
                <!--</li>-->
                <!---->
                <!--<li class="grid-item grid-item-sm-3">-->
                <!--<img alt="" class="img-responsive center-block" src="assets/images/photos/photos-9.jpg">-->
                <!--</li>-->
                <!--</ul>-->
            </div>
        </div>
    </div>
</section>

<section id="location" class="section location">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="section-title">Miejsce konferencji</h3>
                <address>
                    <p>Katolicki Uniwersytet Lubelski <br> Jana Pawła II<br>
                        Al. Racławickie 14<br>
                        Sala: CTW-302<br>
                        20-950 Lublin<br>
                        Email: <a href="mailto:konferencja.ss@gmail.com">konferencja.ss@gmail.com</a>
                        <img src="assets/images/partner/kul.jpg" style="margin-top: 30px;">
                    </p>
                </address>
            </div>
            <div class="col-sm-9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.4479501410556!2d22.542615015231583!3d51.24766117959329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722576163bf89c3%3A0xec4f36797ee23234!2sKatolicki+Uniwersytet+Lubelski+Jana+Paw%C5%82a+II!5e0!3m2!1spl!2spl!4v1455532859858"
                    width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="site-info"> Developed by Wojciech Sasiela</a></p>
                <!--                <ul class="social-block">-->
                <!--                    <li><a href=""><i class="ion-social-twitter"></i></a></li>-->
                <!--                    <li><a href=""><i class="ion-social-facebook"></i></a></li>-->
                <!--                    <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>-->
                <!--                    <li><a href=""><i class="ion-social-googleplus"></i></a></li>-->
                <!--                </ul>-->
            </div>
        </div>
    </div>
</footer>

<!-- script -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/button.js"></script>
<script src="assets/js/textrotator.js"></script>
<script src="assets/js/form.js"></script>

<script>
    $(function () {
        $('#text-slider').textRotator({
            random: true,
            fadeIn: 1000,
            fadeOut: 500,
            duration: 3000,
            debug: false
        })
    })
</script>
<script src="assets/js/timeline.js"></script>
<script src="assets/js/modernizr.js"></script>
<script>

    //schowanie formularza po zaladowaniu sie stroy
    $("#registration-form").toggle();

    var UczestnikBierny;
    var UczestnikCzynny;

    function wybranoUczestnikaBiernego() {
        UczestnikBierny = "TAK";
        UczestnikCzynny = "NIE";

//zaznaczasz 1
        $(".produkt").first().css("background", "#111");
        $("#parametry1Cennika li:nth-child(odd)").css("background", "black");
        $("#parametry1Cennika li:nth-child(even)").css("background", "black");
        $("#parametry1Cennika").css("background-color", "black");
        $(".produkt:hover .parametry").first().css("color", "silver");
        $(".produkt:hover h3").first().css("background", "#eee");
        $(".produkt:hover h3").first().css("color", "#000");
        $(".produkt:hover h3").first().css("text-shadow", "0 0 3px silver");
        $(".kup").first().css("background-color", "#111");
        $("#buttonUczestnikBierny").text("Wybrano");

//odznaczasz 2
        $(".produkt").first().next().css("background", "#eee");
        $("#parametry2Cennika").css("background-color", "#eee");
        $("#parametry2Cennika").css("color", "black");
        $(".kup").first().next().css("background-color", "#eee");
        $("#ButtonUczestnikCzynny").text("Wybierz");
        $("#parametry2Cennika li:nth-child(even)").css("background", "#eee");
        $("#parametry2Cennika li:nth-child(odd)").css("background-color", "silver");

        // chowamy/wysuwamy formularz rejestracyjny
        $("#registration-form").toggle();
        $("#dodatkowyFormularzDlaUczestnikaCzynnego").toggle();
    }

    function wybranoUczestnikaCzynnego() {
        UczestnikBierny = "NIE";
        UczestnikCzynny = "TAK";

        //zaznaczasz 2
        $(".produkt").first().next().css("background", "#111");
        $("#parametry2Cennika li:nth-child(odd)").css("background", "black");
        $("#parametry2Cennika li:nth-child(even)").css("background", "black");
        $("#parametry2Cennika").css("color", "silver");
        $("#parametry2Cennika").css("background-color", "black");
        $(".produkt:hover h3").css("background", "#eee");
        $(".produkt:hover h3").css("color", "#000");
        $(".produkt:hover h3").css("text-shadow", "0 0 3px silver");
        $(".kup").first().next().css("background-color", "#111");
        $("#ButtonUczestnikCzynny").text("Wybrano");

        //odznaczasz 1
        $(".produkt").first().css("background", "#eee");
        $("#parametry1Cennika").css("background-color", "#eee");
        $("#parametry1Cennika").css("color", "black");
        $(".kup").first().css("background-color", "#eee");
        $("#buttonUczestnikBierny").text("Wybierz");
        $("#parametry1Cennika li:nth-child(even)").css("background", "#eee");
        $("#parametry1Cennika li:nth-child(odd)").css("background-color", "silver");

        //chowamy/wysuwamy formularz rejestracyjny
        $("#registration-form").toggle();

    }


    function submitdata() {

        var Imie = document.getElementById("Imie").value;
        var Nazwisko = document.getElementById("Nazwisko").value;
        var Ulica = document.getElementById("Ulica").value;
        var NrBloku = document.getElementById("NrBloku").value;
        var NrMieszkania = document.getElementById("NrMieszkania").value;
        var KodPocztowy = document.getElementById("KodPocztowy").value;
        var Miasto = document.getElementById("Miasto").value;
        var TelKom = document.getElementById("TelKom").value;
        var Email = document.getElementById("Email").value;
        var Uwagi = document.getElementById("Uwagi").value;

        var TematPracy = document.getElementById("TematPracy").value;
        var OpisAbstraktu = document.getElementById("OpisAbstraktu").value;
        var NotkaoSobie = document.getElementById("NotkaoSobie").value;

        WieczorIntegracyjny = document.getElementById("WieczorIntegracyjny").checked;

        PomocAsystenta = document.getElementById("PomocAsystenta").checked;
        WlasnySystemFM = document.getElementById("WlasnySystemFM").checked;
        SpeechToText = document.getElementById("SpeechToText").checked;
        PetlaIndukcyjna = document.getElementById("PetlaIndukcyjna").checked;
        TlumaczaMigowego = document.getElementById("TlumaczaMigowego").checked;
        NiePotrzebuje = document.getElementById("NiePotrzebuje").checked;

//        var UczestnikBierny = document.getElementById("UczestnikBierny").value;
//        var UczestnikCzynny = document.getElementById("UczestnikCzynny").value;

        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'Imie=' + Imie +
            '&Nazwisko=' + Nazwisko +
            '&Ulica=' + Ulica +
            '&NrBloku=' + NrBloku +
            '&NrMieszkania=' + NrMieszkania +
            '&KodPocztowy=' + KodPocztowy +
            '&Miasto=' + Miasto +
            '&TelKom=' + TelKom +
            '&Email=' + Email +
            '&Uwagi=' + Uwagi +
            '&WieczorIntegracyjny=' + WieczorIntegracyjny +

            '&PomocAsystenta=' + PomocAsystenta +
            '&WlasnySystemFM=' + WlasnySystemFM +
            '&SpeechToText=' + SpeechToText +
            '&PetlaIndukcyjna=' + PetlaIndukcyjna +
            '&TlumaczaMigowego=' + TlumaczaMigowego +
            '&NiePotrzebuje=' + NiePotrzebuje +

            '&UczestnikBierny=' + UczestnikBierny +
            '&UczestikCzynny=' + UczestnikCzynny +

            '&TematPracy=' + TematPracy +
            '&OpisAbstraktu=' + OpisAbstraktu +
            '&NotkaoSobie=' + NotkaoSobie;

        if (Imie == '' || Nazwisko == '' || Ulica == '' || NrBloku == '' || NrMieszkania == '' || KodPocztowy == '' || Miasto == '' || TelKom == '' || Email == '') {

            $("#button").off();

            $("#komunikat-wysylania").text("Proszę uzupełnić wszystkie pola.");
        }
        else {
            console.log("Chce wyslac dane do submit.php");

            setTimeout(
                function () {
                    $("#button").prop('disabled', true);
//                    $("#button").hide();
                    $("#komunikat-wysylania").text("Dziękujemy i zapraszamy! :-)");
                }, 4500);

            $.ajax
            ({
                type: "POST",
                url: "submit.php",
                data: dataString,
                cache: false,
                success: function (html) {
//                alert(html);
                }
            });

        }
        return false;

    }
</script>

</body>
</html>