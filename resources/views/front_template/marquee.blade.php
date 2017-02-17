<div class="menubackgroundbottom">
                    <b style="width: 15%;float: right;background: black;color: white;height: 28px;text-align: center;line-height: 27px;font-size: 14px;">
                        Latest Mobile & Price
                    </b>
    <div class="TickerNews" id="T1" style="width:85%">
        <div class="ti_wrapper">
            <div class="ti_slide">
                <div class="ti_content">
                  @foreach($products as $product)
                    <div class="ti_news">
                      <a style="color:#19c325;margin-left: 20px;" href="{{url('',['singles',$product->pid,$product->cat_id])}}">
                        {{$product->name}} , <small style="color: black;font-size: 12px;">(
                              @if($product->price)
                              {{$product->price}}
                              @else
                                Comming Soon
                              @endif
                            )</small> 
                      </a>
                    </div>
                  @endforeach
            
            
            
                </div>
            </div>
        </div>
      </div>
</div>


