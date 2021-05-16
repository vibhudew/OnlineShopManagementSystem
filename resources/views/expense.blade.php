@extends('layouts.master')
@section('title', 'Home page')
@section('page-title', 'Home')
@section('card-title', 'Dashboard')

<link src='https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css'>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
@section('content')
{!!$dataTable->table()!!}

{!!$dataTable->scripts() !!}
@endsection
