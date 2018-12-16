@section('header')
    <!--   Nav Section   -->
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a href="{{ url('/') }}" class="brand-logo"><i class="material-icons"><img
                            src="{{asset('website/img/connect_logo.png')}}"></i></a>

            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><div class="user-view">
                        <div class="background">
                            <img src="https://materializecss.com/images/office.jpg">
                        </div>
                        <a href="#user"><img class="circle" src="http://connectyou.tryfcomet.com/website/img/connect_banner.jpg"></a>
                        <a href="#name"><span class="white-text name">Vishnu Sharma</span></a>
                        <a href="#email"><span class="white-text email">vishnusharmax@gmail.com</span></a>
                    </div></li>
                <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!--   Nav Section End  -->
    <!--   Banner Section   -->
    <div class="section no-pad-bot" id="index-banner" style="background: url('./../../website/img/connect_banner.jpg'); background-repeat: no-repeat;
    background-size: 1444px 343px;">
        <div class="container">
            <br><br>
            <h1 class="header center white-text">Programmable SMS</h1>
            <div class="row center">
                <h5 class="header col s12 white-text"><b>Connect You</b> The Most Secure Messaging Application.
                </h5>
            </div>
            <br><br>

        </div>
    </div>
    <!--   Banner Section End  -->
@endsection
@yield('header')
