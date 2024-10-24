@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <div>
        <label for="message">Descp :</label>
        <textarea name="descp" id="descp" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
    
</form>
@endsection