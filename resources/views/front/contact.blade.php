@extends('layouts.front')
@section('content')
<div class="main_container">
  <div class="cell_phones">
    <div class="breadcrumb">
      <a href="index.html" title="Home Page">Home</a>&nbsp;<span>&raquo;</span>&nbsp; Latest Mobile Phones in Pakistan
      
    </div>
    <div class="clear"></div>
    <h1>Contact Us</h1>
    <div class="list_cellphone">
      <ul>
        <form id="contactForm" action="email.php" method="post">
          <div id="singleParagraphInputs">
            <div>
              <label for="formAuthor">
                Name
              </label>
              <input class="requiredField " type="text" name="formAuthor" id="formAuthor" value="" size="40" />
            </div>
            <div>
              <label for="formEmail">
                Email
              </label>
              <input class="requiredField " type="text" name="formEmail" id="formEmail" value="" size="40" />
            </div>
            <div>
              <label for="formSubject">
                Subject
              </label>
              <input class="requiredField " type="text" name="formSubject" id="formSubject" value="" size="40" />
            </div>
          </div>
          <div id="commentTxt">
            <label for="formContent">
              Message
            </label>
            <textarea class="requiredField " id="formContent" name="formContent" cols="40" rows="5"></textarea>
            
            <div id="screenReader">
              <label for="checking">
                If you want to submit this form, do not enter anything in this field
              </label>
              <input type="text" name="checking" id="checking" value="" />
            </div>
          </div>
          
          
          <input type="submit" value="Send Message" class="submit_btn" tabindex="5" id="submit" name="submit">
        </form>
        
      </ul>
    </div>
  </div>
  <div class="right_bar" style="float: left;margin-left: 10px;margin-top: 10px;" >
    <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
      <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
    </div>
    <br />
    <div style="border:1px solid #ccc;height:600px;width:160px;" class="hide_sidebar">
      <img src="{{asset('assets/images/ads2.jpg')}}" alt="" />
    </div>
    
  </div>
  <div
    style="width:460px;height:40px;border:2px solid;
    float:right; background:#fff;display:none;" class="hide_sidebar" >
    
    1st Google here hhe
  </div>
  <div
    style="width:460px;height:40px;border:2px solid;
    float:right; background:#fff;display:none;" class="hide_sidebar" >
    
    2nd google ads here
  </div>
</div>
@stop