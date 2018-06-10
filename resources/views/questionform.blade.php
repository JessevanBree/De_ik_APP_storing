@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vragen</h5>
                    <p>
                    {{ print_r($questions, true) }}
                        @foreach($questions as $question)
                            <h3> {{$question}} </h3>
                         @endforeach

                    </p>
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