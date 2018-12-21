@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <section class="content-header">
      <h1>View Contact: #{{ $contact->id }}</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('contacts')}}">Contacts</a></li>
        <li><a href="{{url('contacts/show')}}">Show Contact</a></li>
      </ol>
    </section>
@stop

@section('content')
    <section class="content">
      <div class="box">
        <div class="box-body">
            <a href="{{ url('contacts/'.$contact->id.'/edit') }}" class="btn btn-warning btn-sm"><span class="fa fa-pencil" aria-hidden="true"/></a>
            {!! Form::open([
                'method'=>'DELETE', 'url' => ['contacts', $contact->id], 'style'=>'display:inline'
            ]) !!}
                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-sm',
                    'onclick'=>'return confirm("Confirm delete?")'
                ))!!}
            {!! Form::close() !!}

            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr><th style="width:120px;"> ID </th><td>{{ $contact->id }}</td></tr>
                        <tr><th> Name </th><td> {{ $contact->name }} </td></tr>
                        <tr><th> Email </th><td> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a> </td></tr>
                        <tr><th> Created at </th><td>{{Carbon\Carbon::parse($contact->created_at)->diffForHumans()}}</td></tr>
                        <tr><th> Updated at </th><td>{{Carbon\Carbon::parse($contact->updated_at)->diffForHumans()}}</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            <a href="{!!url('contacts')!!}" class="btn btn-default">Go Back</a>
        </div>
    </div>
@stop