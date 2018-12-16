@extends('welcome')
@section('content')
    <div class="container">
        <div class="section">
            <center><img  src="https://www.gstatic.com/policies/privacy/acad335ad7ba163209d8c3e671b2c445.svg"></center>
            <h3 class="header center black-text">New Message</h3>
            <center> @if(Session::has('success'))
                    <div style="color: green;" class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div style="color: red;" class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
            </center>
            <br>
            <!--   New Message form Section   -->
            <center>
                <div class="row">

                    <div class="col s12 l12 m12">
                        <form method="post" action="{{route('send_otp')}}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12 l12 m12">
                                    <input value="{{$mobile}}" id="mobile" name="mobile" type="text" class="validate">
                                    <label for="mobile">To</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l12 m12">
                                    <input value="{{$message}}" id="message" name="message" type="text"
                                           class="validate">
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <input type="hidden" value="{{$name}}" name="name">
                            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Send
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>


                </div>
            </center>

        </div>
    </div>
    <br><br>

@endsection
