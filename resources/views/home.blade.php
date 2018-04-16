@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="color:red;" class="card">
                <p>
                    <h3>Veiligheid voor op:</h3>
                    <ul>
                        <li>
                            Denk om de veiligheid van jezelf en de omstanders.
                        </li>

                        <li>                        
                            Zet het storingsgebied af en neem contact op met afdeling storingen van het PWN via het storingsnummer of het rechtstreekse nummer van Intake.
                        </li>                        
                        <li>                        
                            Storing : Groot direct actie ondernemen via Opdrachtgever en Uitvoerder.
                        </li>                        
                        <li>                        
                            Storing : Klein overleg met Opdrachtgever en Uitvoerder.
                        </li>                        
                        <li>                        
                            Storing : Gecontroleerd niet spoedeisend Inplannen in overleg met Opdrachtgever en uitvoerder.
                        </li>                        
                        Indien de media vragenstelt:
                        Altijd verwijzen naar de Persvoorlichter
                    </ul>
                </p>
            </div>
            <div class="col-md-8">
                <h5 >I heb de hieboven informatie gelezen</h5>
                <input type="checkbox" name="gereed" id="readCB">
                <input class="btn button" type="button" id="readButton" value="volgende" disabled="false" >
            </div>
        </div>
    </div>
</div>
@endsection
