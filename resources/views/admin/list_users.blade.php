@extends('layouts.backend')
@section('content')
<div class="right_col" role="main" style="min-height: 620px;">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Users<small>List All Users</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($users as $user)  
                <tr>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->email}} </td>
                    <td>{{$user->type}} </td>
                    <td>
                        <a href="{{url('',['admin','users',$user->id,'edit'])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <button type="button" onclick="deleteData('{{url('',['admin','users',$user->id])}}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        {{-- <a href="{{url('',['admin','users',$user->id,'edit'])}}" class="btn btn-success">change Password</a> --}}
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
<script>
    function deleteData(url){
        $.ajax({
            url:url,
            method:'delete',
            data:{
                '_token':'{{csrf_token()}}'
            },
            success:function(response){
                location.reload();
            }
        });
    }
</script>
@stop