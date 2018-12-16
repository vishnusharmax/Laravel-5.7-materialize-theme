@extends('welcome')
@section('content')
    <div class="container">
        <div class="section">
            <h3 class="header center black-text">Favourite Contacts And SMS History</h3>
            <!--   Tab Section   -->
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#test1">Contacts List</a></li>
                        <li class="tab col s6"><a href="#test2">SMS History</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <ul class="collection">
                        @if ( count($contact_array)>0)
                        @foreach( $contact_array as $row )

                        <li class="collection-item avatar">
                            <i class="material-icons circle {{$row['color']}}"><b>{{$row['short_code']}}</b></i>
                            <span class="title">{{$row['name']}}</span>
                            <p>{{$row['phoneNumber']}}
                            </p>
                            <a href="{{ url('/send-message/'.$row['phoneNumber'].'/'.$row['name']) }}" class="secondary-content">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Send Message
                                    <i class="material-icons right">send</i>
                                </button>
                            </a>

                        </li>
                        @endforeach
                        @else
                            <p>No Contact Found</p>
                        @endif

                    </ul>
                </div>
                <div id="test2" class="col s12">
                    <ul class="collection">
                        @if ( count($sms_log_array)>0)
                            @foreach( $sms_log_array as $row )
                        <li class="collection-item avatar">
                            <i class="material-icons circle"><b>{{$row['short_code']}}</b></i>
                            <span class="title">{{$row['name']}}</span>
                            <p>{{$row['phoneNumber']}}<br>
                                {{$row['message']}}
                            </p>
                            <a href="#!" class="secondary-content">{{$row['date_string']}}</a>
                        </li>
                            @endforeach
                        @else
                            <p>No Sms Log Found</p>
                        @endif
                    </ul>

                </div>
            </div>

        </div>
        <br><br>
    </div>
@endsection
