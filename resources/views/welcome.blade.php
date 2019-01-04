<!doctype html>
<html lang="ro">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            } 
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
        </div>

        <div id="bg">

        </div>
    <div style="height: 100%" id="header">
        <header>
            <a href="#"> learn-IT </a>
        </header>
    
        <main>
            <section id="card">
                <ul>
                    <li>
                        <span></span>
                        <strong>O platforma pentru elevi si profesori</strong>
                    </li>
                    <li>
                        <span></span>
                        <strong>Pregateste elevii pentru examenele importante din viata</strong>
                    </li>
                    <li>
                        <span></span>
                        <strong>Un loc bun pentru comunicare </strong>
                    </li>
                </ul>
            </section>
            <section id="primary">
                <h1>Learn IT</h1>
                <p>Knowledge is power</p>
    
                <a href="#"> Incepe </a>
            </section>
        </main>
    </div>
        <div id="description" class="container">
            <div id="title">
                <h2>Ce e Learn IT?</h2>
                <p>O aplicatie care incurajeaza colaborarea intre elevi si profesori in mediul online, ajutandu-i pe elevi sa invete mai multe.</p>
            </div>
            <div id="sections">
                <h2>Ce contine site-ul?</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="">
                        <i class="far fa-angry" style="font-size: 100px"></i>
                        <p>Pana si aici gasesti profesori care nu pot sa te ajute cu nimic pentru ca nu au nicio treaba cu ce se intampla in ziua de azi.</p>
                    </div>
                </div>
                
            </div>  
        </div>
    </body>
</html>
