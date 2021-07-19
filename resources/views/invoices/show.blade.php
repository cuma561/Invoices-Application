@extends('layouts.app')

@section('content')
<section class="masthead page-section portfolio" id="portfolio">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Szczegóły faktury {{$invoice->id}}</h2>
    <div class="container">
        <div class="row justify-content-center">
            <p>Numer Faktury: {{$invoice->number}}</p> 
            <p>Data Faktury: {{$invoice->date}}</p>
            <p>Kwota Faktury: {{$invoice->total}}</p>
            <p>Opis Faktury: {{$invoice->description}}</p> 
            <p>Właściciel Faktury: {{$invoice->customer->name}}</p> 
        </div>
    </div>
</section>
@endsection