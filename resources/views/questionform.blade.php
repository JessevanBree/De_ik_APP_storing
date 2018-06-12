@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vragen</h5>
                        <form method="POST" action="{{ route('register') }}">
                            {{--{{dump($questions)}}--}}
                            @foreach($questions as $question)
                                <h6> {{$question->question}} </h6>
                            @if($question->boolanswer == true)
                                {{$question->boolanswer}}

                            @endif
                            @endforeach
                        </form>
                </div>
            </div>
            {{--  <div class="col-md-8">  --}}
                {{--  <input class="btn button" type="button" value="vorige">  --}}
                {{--  <input class="btn button" type="button" value="volgende">  --}}
            {{--  </div>  --}}
        </div>
    </div>
</div>
@endsection