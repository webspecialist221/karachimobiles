@extends('layouts.backend')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Categories<small>List All Categories</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)  
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{url('',['admin','categories',$category->id,'edit'])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <button type="button" onclick="deleteData('{{url('',['admin','categories',$category->id])}}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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