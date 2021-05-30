@extends('layouts.master')

@section('title', 'ContactPage')
@section('page-title', 'Contact Manegement')
@section('card-title', 'All Contact')

@section('content')
 <div class="col-sm-12">


    @if(session()->get('success'))

      <div class="alert alert-success">

        {{ session()->get('success') }}

      </div>
      @endif
    </div>

 <a href="contact/add" class = "btn btn-primary"> ADD </a>

<table class = "table table-dark">
  <th> Id</th>
  <th>Business id</th>
  <th>Type </th>
  <th>Business_Name</th>
  <th>First_name</th>
  <th>Last_name</th>
  <th>Email</th>
  <th>Mobile</th>
  <th>Address</th>
  <th>Action</th>

  @foreach($Contact as $contact)
      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->Business_id}}</td>
        <td>{{$contact->Type}}</td>
        <td>{{$contact->Business_name}}</td>
        <td>{{$contact->First_name}}</td>
        <td>{{$contact->Last_name}}</td>
        <td>{{$contact->Email}}</td>
        <td>{{$contact->Mobile}}</td>
        <td>{{$contact->Address}}</td>
        <td>{{$contact->Action}}</td>

        <td>
            <a href="/updatecontact/{{$contact->id}}" class="btn btn-success">Update</>

            <a href="/deletecontact/{{$contact->id}}" class="btn btn-warning">Delete</>


        </td>
      </tr>

  @endforeach

</table>


@endsection
