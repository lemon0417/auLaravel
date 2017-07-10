@extends('layouts.master')

@section('css')
    <style>
      body > .container {
        padding-top: 80px;
      }
    </style>
@endsection

@section('content')
    <h2>Laravel {{$name}}</h2>
@endsection