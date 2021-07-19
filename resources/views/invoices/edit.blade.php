@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="contact">
            <div class="container">
                
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Fakture {{$invoice->id}}</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('invoices.update',['id' => $invoice->id]) }}" method="POST" id="contactForm" name="sendMessage" novalidate="novalidate">
                            {{csrf_field()}}
                            @method('PUT')

                            <div class="form-floating mb-3">
                                <input value="{{ $invoice->number }}" class="form-control" name="number" id="number" type="text" placeholder="Enter your number..." data-sb-validations="required" />
                                <label for="number">Numer Faktury</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input value="{{ $invoice->date }}" class="form-control" name="date" id="date" type="text" placeholder="Enter your date..." data-sb-validations="required" />
                                <label for="date">Data faktury</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input value="{{ $invoice->total }}" class="form-control" name="total" id="total" type="text" placeholder="Enter your total..." data-sb-validations="required" />
                                <label for="total">Kwota faktury</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input value="{{ $invoice->description }}" class="form-control" name="description" id="description" type="text" placeholder="Enter your description..." style="height: 10rem" data-sb-validations="required" />
                                <label for="description">Opis Faktury</label>
                                <p class="help-block text-danger"></p>
                            </div>
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Zmień fakture</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection