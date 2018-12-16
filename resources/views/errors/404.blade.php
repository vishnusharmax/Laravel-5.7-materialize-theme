<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Connect You 404</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:700);

        html {
            height: 100%;
        }

        body {
            background: #0083ff;

            font-family: 'Raleway', sans-serif;
            /*background-color: $color2; */
            height: 100%;
        }

        .text-wrapper {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 6em;
            font-weight: 700;
            color: #fff;
        }

        .subtitle {
            font-size: 40px;
            font-weight: 700;
            color: #fff;
        }

        .home_button {
            margin: 30px;
        }

        a.home_button {
            font-weight: 700;
            border: 2px solid #000;
            text-decoration: none;
            padding: 15px;
            text-transform: uppercase;
            color: #000;
            border-radius: 26px;
            transition: all 0.2s ease-in-out;
        }

        a.home_button:hover {
            background-color: #fff;
            color: #000;
            transition: all 0.2s ease-in-out;
        }


    </style>
</head>
<body>
<div class="text-wrapper">
    <div class="title" data-content="404">
        404
    </div>

    <div class="subtitle">
        <center> {{$error_message or 'N/A'}}
            <br>
            Oops, the page you're looking for doesn't exist.
        </center>
    </div>

    <div class="home_button">
        <a class="home_button" href="{{ url('/') }}">Go to homepage</a>
    </div>
</div>

</body>
</html>
