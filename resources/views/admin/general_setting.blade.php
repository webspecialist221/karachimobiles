@extends('layouts.backend')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Setting<small>General Setting</small></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('',['admin','general-setting'])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo <span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="file">
                    </div>
                </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Header Ad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control" name="header_ad" id="" cols="30" rows="4" required="required"></textarea>
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

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>General Setting<small>List All General Setting</small></h2>
          <div class="clearfix"></div>
        </div>
    <div class="x_content">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
              <th>Logo</th>
              <th>Header Ad</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($generalSettings as $setting)
         <tr>
            <th><img src="{{asset($setting->logo_img)}}" alt="" style="width: 100px;height: 100px;"></th>
            <th>{{$setting->header_ad}}</th>
            <th>
              <a href="" class="btn btn-danger"><span class="fa fa-trash "></span></a>
            </th>
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
@stop