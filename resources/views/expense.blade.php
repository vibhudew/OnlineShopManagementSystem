@extends('layouts.master')
@section('title', 'Home page')
@section('page-title', 'Home')
@section('card-title', 'Dashboard')

@section('content')
{!!$dataTable->table()!!}

{!!$dataTable->scripts() !!}
@endsection
