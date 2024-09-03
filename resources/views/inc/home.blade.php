@extends('template/template')

@section('content')

<div class="container my-5">
    <div class="bg-body-tertiary p-5 rounded">
        <div class="col-sm-8 py-5 mx-auto">
            <h1 class="display-5 fw-normal">Resposta</h1>
           
            <pre>{{ json_encode($responseBody, JSON_PRETTY_PRINT) }}</pre>
        </div>
    </div>
</div>

@endsection