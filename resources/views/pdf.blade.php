<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Arial|Arial' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="styles/main.css" media="screen" charset="utf-8"/> -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>

<style>
    body {
        margin: 0;
        color: #494140;
        font-family: "Arial", serif;
        font-weight: 400;
        font-size: 25px;
    }

    .container {
        width: 795px;
        margin: 0 auto;
    }

    section {
        position: relative;
        float: left;
        width: 685px;
    }

    section .special {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
        height: 47px;
        padding: 10px 150px 0;
        background-color: #494140;
        color: #fff;
        text-align: center;
    }

    section .special:nth-child(2n+1) {
        background-color: #93ACA2;
    }

    section .special:nth-child(6),
    section .special:nth-child(7) {
        z-index: 1;
    }

    section .circle {
        position: absolute;
        top: 10px;
        left: 215px;
        width: 300px;
        height: 150px;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: 0px 10px 4px 0px rgba(0, 0, 0, 0.5);
        text-align: center;
        line-height: 30px;
        z-index: 1;
    }

    section .circle .event {
        width: 150px;
        margin: 25px auto 25px;
        font-size: 1.12em;
        font-weight: 700;
        text-transform: uppercase;
    }

    section .circle .title {
        color: #93ACA2;
        font-family: "Lobster", cursive;
        font-size: 2.48em;
    }

    section .seats {
        position: absolute;
        top: 10px;
        left: 30px;
        color: #fff;
        font-weight: 350;
    }

    section .seats span {
        display: inline-block;
    }

    section .seats .label {
        width: 40px;
        margin-right: 20px;
        padding-top: 8px;
        font-size: 0.36em;
        font-weight: 400;
        text-align: right;
        text-transform: uppercase;
        vertical-align: top;
    }

    aside {
        float: right;
        width: 110px;
    }

    aside figure {
        height: 100%;
        margin: 0;
        text-align: center;
    }

    aside figure img {
        margin-top: 25px;
    }
</style>

<body>
    <div class="container">
        <section>
            <div class="circle">
                <div class="event">Cinema</div>
                <div class="title">CINEMAX</div>
            </div>
            
            <div class="special"></div>
            <div class="special"></div>
            <div class="special"></div>
            <div class="special">
                <div class="seats">
                    <span class="label">Order ID:</span><span>{{$buying->id}}</span> <span class="label">Type:</span><span>{{$buying->buyingseats()->first()->seat->row->hall->type->name}}</span> <span class="label">Film:</span><span>{{$buying->session->film->name}}</span>
                </div>
            </div>
            <div class="special"></div>
            <hr/>
            @foreach ($buying->buyingseats()->get() as $buyingseat)
            
            <div class="special">
                <div class="seats">
                    <span class="label">Hall</span><span>{{$buyingseat->seat->row->hall->name}}</span> <span class="label">Date</span><span>{{$buying->session->date}}</span><span class="label">Time</span><span>{{Str::substr($buying->session->time,0,5)}}</span>
                </div>
            </div>
            <div class="special">
                <div class="seats">
                    <span class="label">Row</span><span>{{$buyingseat->seat->row->number}}</span>
                </div>
            </div>
            <div class="special">
                <div class="seats">
                    <span class="label">Seat</span><span>{{$buyingseat->seat->number}}</span>
                </div>
            </div>
            <hr/>
            @endforeach

        </section>


    </div>

</body>

</html>