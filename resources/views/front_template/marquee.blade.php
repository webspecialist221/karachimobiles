<div class="menubackgroundbottom">
    <div class="TickerNews" id="T1">
        <div class="ti_wrapper">
            <div class="ti_slide">
                <div class="ti_content">
                  @foreach($products as $product)
                    <div class="ti_news">
                      <a style="color:#19c325;margin-left: 20px;" href="{{url('',['singles',$product->pid,$product->cat_id])}}">
                        {{$product->name}}
                      </a>
                    </div>
                  @endforeach
            
            
            
                </div>
            </div>
        </div>
      </div>
</div>


