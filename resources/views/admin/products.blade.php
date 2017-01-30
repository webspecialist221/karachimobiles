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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('',['admin','products'])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="cat_id" id="" class="form-control">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->title}}</option>
                          @endforeach()
                        </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product <span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Description<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="description" id="" cols="30" rows="4" required="required"></textarea>
                    </div>
                </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Image <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="file" class="form-control" required="required">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="price" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Dimension <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="" name="dimensions_length" required="required" class="form-control col-sm-4" style="width:160px" placeholder="Length">
                <input type="text" id="" name="dimensions_width" required="required" class="form-control col-sm-4" style="width:160px;margin-left:5px;" placeholder="Width">
                <input type="text" id="" name="dimensions_depth" required="required" class="form-control col-sm-4" style="width:160px;margin-left:5px;" placeholder="Depth">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Network <span class="required">*</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">3g <span class="required">*</span>
              </label>
                <input type="checkbox" name="three_g" value="1" class="">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">4g <span class="required">*</span>
              </label>
                <input type="checkbox" name="four_g" value="1" class="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Network Type<span class="required">*</span>
              </label>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Camera <span class="required">*</span>
              </label>
                <input type="checkbox" name="camera" value="1" class="">
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Wifi <span class="required">*</span>
              </label>
                <input type="checkbox" name="wifi" value="1" class="">
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Bluetooth <span class="required">*</span>
              </label>
                <input type="checkbox" name="bluetooth" value="1" class="">
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Fm Radio <span class="required">*</span>
              </label>
                <input type="checkbox" name="fm_radio" value="1" class="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product weight <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="weight" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Display Color <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="color" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Screen Size<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="" name="scree_width" required="required" class="form-control col-sm-4" style="width:245px" placeholder="Width">
                <input type="number" id="" name="screen_height" required="required" class="form-control col-sm-4" style="width:245px;margin-left:5px;" placeholder="Height">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Display Size <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="size" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ringtones <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="ringtone" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Technology <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="technology" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SIM <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="sim" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resoultion <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="resolutions" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="status" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Internal Memory<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="" name="ram" required="required" class="form-control col-md-12 col-xs-12" style="width:235px" placeholder="Ram">
              <input type="text" id="" name="ram_unit" required="required" class="form-control col-md-12 col-xs-12" style="width:250px;margin-left:10px;" placeholder="e.g GB">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Connectivity <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="connectivity" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Primary camera <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="primary_camera" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Secondary camera <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="secondary_camera" class="form-control">
              </div>
            </div>

            <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">OS<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="os" required="required" class="form-control col-md-7 col-xs-12" style="width:200px;">

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="roles" style="width:90px;">
                       Os Type<span class="required">*</span>
                      </label>
                      <select name="os_type" id="" class="form-control" required="required" style="width:200px;">
                      <option value="Android">Android Phones</option>
                      <option value="Symbian">Symbian Phones</option>
                      <option value="Windows">Windows Phones</option>
                      <option value="Bada">Bada Phones</option>
                      
                    </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Processor<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="processor" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Battery<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="battery" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Frequency<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="frequency" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Browser<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="browser" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Colors<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="colors" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Entertainment<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="entertainment" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Other Features<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="" name="other" required="required" class="form-control col-md-7 col-xs-12"></textarea><grammarly-btn><div style="visibility: hidden; z-index: 2;" class="_e725ae-textarea_btn _e725ae-not_focused" data-grammarly-reactid=".3"><div class="_e725ae-transform_wrap" data-grammarly-reactid=".3.0"><div title="Protected by Grammarly" class="_e725ae-status" data-grammarly-reactid=".3.0.0">&nbsp;</div></div></div></grammarly-btn>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Messaging<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="messaging" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <br>
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

<script type="text/javascript">
    $(document).ready(function() {
      $('#birthday').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
  });
</script>
</div>
</div>
@stop