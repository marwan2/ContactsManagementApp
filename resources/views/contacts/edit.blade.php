@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <section class="content-header">
      <h1>Contacts</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('contacts')}}">Contacts</a></li>
        <li><a href="{{url('contacts/create')}}">Edit contact</a></li>
      </ol>
    </section>
@stop

@section('content')
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit contact #{{ $contact->id }}</h3>
        </div>
        <div class="box-body">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::model($contact, [
                'method' => 'PATCH',
                'url' => ['contacts', $contact->id],
                'class' => 'form-horizontal',
                'id'=>'contactsForm',
            ]) !!}
            @include ('contacts.form', ['submitButtonText' => 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>
@stop