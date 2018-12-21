@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
      <h1>Contacts</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('contacts')}}">Contacts</a></li>
        <li><a href="{{url('contacts/create')}}">Add new contact</a></li>
      </ol>
    </section>
@stop

@section('content')
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add new contact</h3>
        </div>
        <div class="box-body">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['url' => 'contacts', 'class' => 'form-horizontal', 'id'=>'contactsForm']) !!}
            @include ('contacts.form')
            {!! Form::close() !!}
        </div>
    </div>
@stop