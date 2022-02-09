@extends('layouts.app')

@section('content')

    <section class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-3">
                <h1 class="fw-bolder">Контакти</h1>
                <p class="lead mb-0">На цій сторінці ви можете знайти контакти співробітників Чаплинської майстерні</p>
            </div>
        </div>
    </section>

    <section class="contact-page mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-5">
                    <div class="row g-3 contact-form">
                        <h3 class="text-center pb-5">Інформація для зв'язку</h3>
                        @foreach($contacts as $contact)
                            <p><span class="fw-bold">{{ $contact->title }} </span> {{ $contact->description }}</p>
                        @endforeach
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <form method="POST" class="row g-3 contact-form">
                        @csrf
                        <h3 class="text-center">Форма зворотного зв'язку</h3>
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">Ім'я</label>
                            <input type="text" class="form-control" id="first_name" placeholder="Іван">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Прізвище</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Іванов">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email (пошта)</label>
                            <input type="email" class="form-control" id="email" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Номер телефону</label>
                            <input type="number" class="form-control" id="phone" placeholder="+380999999999">
                        </div>
                        <div class="col-12">
                            <label for="company_name" class="form-label">Назва підприємства</label>
                            <input type="text" class="form-control" id="company_name" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-12">
                            <label for="contact_message">Ваше повідомлення</label>
                            <textarea class="form-control" id="contact_message" rows="2"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Відправити</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
