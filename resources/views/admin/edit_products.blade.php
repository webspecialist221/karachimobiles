@extends('layouts.backend')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Products <small>Edit Product</small></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('',['admin','products',$product[0]->pid])}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="cat_id" id="" class="form-control">
                          <option value="{{$product[0]->cid}}" style="color: #FFD7D7;">{{$product[0]->title}}</option>
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
                        <input type="text" name="name" class="form-control" value="{{$product[0]->name}}">
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Description<span class="required">*</span>
                  </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="description" id="" cols="30" rows="4" required="required">{{$product[0]->description}}</textarea>
                    </div>
                </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Image <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="file" class="form-control" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="price" class="form-control" value="{{$product[0]->price}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Dimension <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="" name="dimensions_length" required="required" class="form-control col-sm-4" style="width:160px" placeholder="Length" value="{{$product[0]->dimensions_length}}">
                <input type="text" id="" name="dimensions_width" required="required" class="form-control col-sm-4" style="width:160px;margin-left:5px;" placeholder="Width" value="{{$product[0]->dimensions_width}}">
                <input type="text" id="" name="dimensions_depth" required="required" class="form-control col-sm-4" style="width:160px;margin-left:5px;" placeholder="Depth" value="{{$product[0]->dimensions_depth}}">
              </div>
            </div>

            <div class="form-group" >
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Network <span class="required">*</span>
              </label>
                @if($product[0]->three_g != '1')
              <div class="col-md-4 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">3g <span class="required">*</span>
              </label>
                <input type="checkbox" name="three_g" value="1" class="" >
              </div>
              @else
                <div class="col-md-4 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">3g <span class="required">*</span>
              </label>
                <input type="checkbox" name="three_g" value="1" class="" checked>
              </div>
              @endif
              @if($product[0]->three_g != '1')
              <div class="col-md-4 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">4g <span class="required">*</span>
              </label>
                <input type="checkbox" name="four_g" value="1" class="">
              </div>
              @else
                <div class="col-md-4 col-sm-3 col-xs-12">
                <label class="control-label" for="first-name">4g <span class="required">*</span>
              </label>
                <input type="checkbox" name="four_g" value="1" class="" checked>
              </div>
              @endif
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Network Type<span class="required">*</span>
              </label>

              @if($product[0]->camera != '1')
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Camera <span class="required">*</span>
              </label>
                <input type="checkbox" name="camera" value="1" class="">
              </div>
              @else
                <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Camera <span class="required">*</span>
              </label>
                <input type="checkbox" name="camera" value="1" class="" checked>
              </div>
              @endif
              
              @if($product[0]->wifi != '1')
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Wifi <span class="required">*</span>
              </label>
                <input type="checkbox" name="wifi" value="1" class="">
              </div>
              @else
                <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Wifi <span class="required">*</span>
              </label>
                <input type="checkbox" name="wifi" value="1" class="" checked>
              </div>
              @endif

              @if($product[0]->bluetooth != '1')
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Bluetooth <span class="required">*</span>
              </label>
                <input type="checkbox" name="bluetooth" value="1" class="">
              </div>
              @else
                <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Bluetooth <span class="required">*</span>
              </label>
                <input type="checkbox" name="bluetooth" value="1" class="" checked>
              </div>
              @endif

              @if($product[0]->fm_radio != '1')
              <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Fm Radio <span class="required">*</span>
              </label>
                <input type="checkbox" name="fm_radio" value="1" class="">
              </div>
              @else
                <div class="col-md-2 col-sm-2 col-xs-12">
                <label class="control-label" for="first-name">Fm Radio <span class="required">*</span>
              </label>
                <input type="checkbox" name="fm_radio" value="1" class="" checked>
              </div>
              @endif
              </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product weight <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="weight" class="form-control" value="{{$product[0]->weight}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product color <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="color" class="form-control" value="{{$product[0]->color}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Display Size <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="size" class="form-control" value="{{$product[0]->display_size}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ringtones <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="ringtone" class="form-control" value="{{$product[0]->ringtones}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Internal Memory<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="" name="ram" required="required" class="form-control col-md-12 col-xs-12" style="width:235px" placeholder="Ram" value="{{$product[0]->ram}}">
              <input type="text" id="" name="ram_unit" required="required" class="form-control col-md-12 col-xs-12" style="width:250px;margin-left:10px;" placeholder="e.g GB" value="{{$product[0]->ram_unit}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Connectivity <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="connectivity" class="form-control" value="{{$product[0]->connectivity}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Primary camera <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="primary_camera" class="form-control" value="{{$product[0]->primary_camera}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Secondary camera <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="secondary_camera" class="form-control" value="{{$product[0]->secondary_camera}}">
              </div>
            </div>

            <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">OS<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="os"  class="form-control col-md-7 col-xs-12" style="width:200px;" value="{{$product[0]->os_name}}">

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="roles" style="width:90px;">
                       Os Type<span class="required">*</span>
                      </label>
                      <select name="os_type" id="" class="form-control" required="required" style="width:200px;">
                      <option value="{{$product[0]->os_version}}">{{$product[0]->os_version}}</option>
                      <option value="N/A">N/A</option>
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
                        <input type="text" id="" name="processor" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->processor}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Battery<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="battery" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->battery}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Frequency<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="frequency" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->frequency}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Browser<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="browser" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->browser}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Colors<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="colors" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->colors}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Entertainment<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="entertainment" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->entertainment}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Other Features<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="" name="other" required="required" class="form-control col-md-7 col-xs-12">{{$product[0]->other_features}}</textarea>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Messaging<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="messaging" required="required" class="form-control col-md-7 col-xs-12" value="{{$product[0]->messaging}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Technology<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="technology"  class="form-control col-md-7 col-xs-12" value="{{$product[0]->technology}}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Resolution<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="resolution"  class="form-control col-md-7 col-xs-12" value="{{$product[0]->resolution}}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Sim<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="sim"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Status<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="" name="status"  class="form-control col-md-7 col-xs-12" value="{{$product[0]->status}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Meta Keyword<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="meta_keyword" cols="30" rows="4">{{$product[0]->meta_keyword}}</textarea>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Meta Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="meta_description" cols="30" rows="4">{{$product[0]->meta_description}}</textarea>
                      </div>
                    </div>
                    <br>
                </div>





        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input type="hidden" name="product_feature_id" value="{{$product[0]->pfid}}">
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