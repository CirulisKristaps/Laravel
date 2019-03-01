@extends('layouts/layout')
@section('title', 'Kontakti')

@section('asideLeft')
    <p>Saziņa:</p>
@stop

@section('content')
    <form method="POST" action="/category">
        <div class="form-group">
            {{ csrf_field() }}
        </div>
        <div class="form-group">
            <label for="title">Teksts:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <button type="submit" class="btn btn-success save">Sūtīt</button>
    </form>
@stop

@section('asideRight')
    <p>Sponsori:</p>
@stop