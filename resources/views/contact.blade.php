@extends('layout')

@section('title', 'Me contacter')
@section('pageClassName', 'Contact')

@section('content')
    <form action="" class="Contact__form">
        <h1 class="Contact__header">Travaillons ensemble !</h1>
        <label for="firstName" class="Contact__label">
            Prénom
            <input type="text" class="Contact__input" name="firstName">
        </label>
        <label class="Contact__label" for="lastName">
            Nom
            <input type="text" class="Contact__input" name="lastName">
        </label>
        <label class="Contact__label" for="email">
            E-mail
            <input type="text" class="Contact__input" name="email">
        </label>
        <label class="Contact__label" for="message">
            Message
            <input type="text" class="Contact__input" name="message"/>
        </label>
        <div class="Contact__submit-container">
            <button class="Contact__submit-button">
                Envoyer
            </button>
        </div>
    </form>
    <div class="Contact__illustration-container">
        <img class="Contact__illustration" src="{{asset('/images/contact_illustration.svg')}}" alt="Contact">
    </div>
@endsection
