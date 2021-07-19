@extends('layouts.app')

@section('content')
<section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
            
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista faktur</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="row justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Numer Faktury</th>
                            <th scope="col">Data Faktury</th>
                            <th scope="col">Kwota Faktury</th>
                            <th scope="col">Właściciel Faktury</th>
                            <th scope="col">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoices as $invoice)
                        <tr>
                            <td>{{$invoice->id}}</td>
                            <td>{{$invoice->number}}</td>
                            <td>{{$invoice->date}}</td>
                            <td>{{$invoice->total}}</td>
                            <td>{{$invoice->customer->name}}</td>
                            <td>
                            <a href="{{ route('invoices.show', ['id' => $invoice->id]) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('invoices.edit', ['id' => $invoice->id]) }}" class="btn btn-warning">Edit</a>
                                <form method="POST" action="{{ route('invoices.delete', ['id' => $invoice->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </section>
@endsection
