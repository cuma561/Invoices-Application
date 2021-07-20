@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="contact">
            <div class="container">
                
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Klienta {{$customer->id}}</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('customers.update',['klienci' => $customer->id]) }}" method="POST" id="contactForm" name="sendMessage" novalidate="novalidate">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->name }}" class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nazwa klienta</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->adres }}" class="form-control" name="adres" id="adres" type="text" placeholder="Enter your adres..." data-sb-validations="required" />
                                <label for="adres">Adres klienta</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->nip }}" class="form-control" name="nip" id="nip" type="text" placeholder="Enter your nip..." data-sb-validations="required" />
                                <label for="nip">NIP klienta</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Zmień klienta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection