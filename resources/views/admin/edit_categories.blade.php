@extends('layouts.backend')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Categories <small>Add Categories</small></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('',['admin','categories',$category->id])}}">
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="title" value="{{$category->title}}">
                    </div>
                </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required="required">{{$category->description}}</textarea>
            </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input type="submit" class="btn btn-success" name="submit" value="submit">
        </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
@stop