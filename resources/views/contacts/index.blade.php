@extends('adminlte::page')

@section('title', 'Contacts')

@section('content_header')
    <section class="content-header">
      <h1>Contacts</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('contacts')}}">Contacts</a></li>
      </ol>
    </section>
@stop

@section('content')
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="{{ url('contacts/create') }}" class="btn btn-primary btn-sm">+ Add new contact</a></h3>
        </div>
        <div class="box-body">
            <div class="table">
                <table class="table table-striped table-hover datatables">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created since</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
                            <td>{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                            <td>
                                <a href="{{ url('contacts/'.$item->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ url('contacts/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                {!! Form::open([
                                    'method'=>'DELETE', 'url'=>['contacts', $item->id], 'style'=>'display:inline'
                                ]) !!}
                                {!! Form::button('Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick'=>'return confirm("Delete contact: are you sure?")'
                                )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
@stop

@section('js')
    <script type="text/javascript">
        $(function () {
          $('.datatables').DataTable({
            "order": [[ 0, "desc" ]],
          });
        });
    </script>
@stop