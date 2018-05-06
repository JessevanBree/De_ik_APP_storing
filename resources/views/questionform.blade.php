@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
                <p>
                    <h3>1.</h3>

                </p>
            </div>
            </div>
            {{--  <div class="col-md-8">  --}}
                <input class="btn button" type="button" value="vorige">
                <input class="btn button" type="button" value="volgende">
            {{--  </div>  --}}
        </div>
    </div>
</div>
@endsection