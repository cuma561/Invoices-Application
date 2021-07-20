@extends('layouts.app')

@section('content')
<section class="masthead page-section portfolio" id="portfolio">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Szczegóły klienta {{$customer->id}}</h2>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Dane Klienta:</h3>
            <p>Nazwa Klienta: {{$customer->name}}</p> 
            <p>Adres Klienta: {{$customer->adres}}</p>
            <p>NIP Klienta: {{$customer->nip}}</p> 
            <h3>Lista Faktur Klienta:</h3>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Numer Faktury</th>
                            <th scope="col">Data Faktury</th>
                            <th scope="col">Kwota Faktury</th>
                            <th scope="col">Opis Faktury</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customer->invoices as $invoice)
                        <tr>
                            <td>{{$invoice->number}}</td>
                            <td>{{$invoice->date}}</td>
                            <td>{{$invoice->total}}</td>
                            <td>{{$invoice->description}}</td>
                        </tr>
                    @endforeach
                    </tbody>  
            </table>
        </div>
    </div>
</section>
@endsection