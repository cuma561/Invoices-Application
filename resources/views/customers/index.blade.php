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

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista klientów</h2>
                
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
                            <th scope="col">Nazwa klienta</th>
                            <th scope="col">Adres klienta</th>
                            <th scope="col">Nip klienta</th>
                            <th scope="col">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->adres}}</td>
                            <td>{{$customer->nip}}</td>
                            <td>
                            <a href="{{ route('customers.show', ['klienci' => $customer->id]) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('customers.edit', ['klienci' => $customer->id]) }}" class="btn btn-warning">Edit</a>
                                <form method="POST" action="{{ route('customers.destroy', ['klienci' => $customer->id]) }}">
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
