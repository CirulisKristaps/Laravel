@extends('layouts/layout')
@section('title', 'Pievienot')

@section('asideLeft')
    <p>Saziņa:</p>
@stop

@section('content')
    <form method="POST" action="/article">
        <div class="form-group">
            {{ csrf_field() }}
        </div>
        <div class="form-group">
            <label for="title">Virsraksts:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="text">Raksts:</label>
            <input type="text" class="form-control" id="text" name="text" value="{{old('text')}}">
        </div>
        <button type="submit" class="btn btn-success save">Sūtīt</button>
    </form>
@stop

@section('asideRight')
    <p>Sponsori:</p>
@stop