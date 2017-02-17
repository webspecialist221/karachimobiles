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
        <form id="contactForm" action="{{url('',['contact'])}}" method="post">
            {{csrf_field()}}
          <div id="singleParagraphInputs">
            <div>
              <label for="formAuthor">
                Name
              </label>
              <input class="requiredField " type="text" name="name" id="formAuthor" value="" size="40" />
            </div>
            <div>
              <label for="formEmail">
                Email
              </label>
              <input class="requiredField " type="text" name="email" id="formEmail" value="" size="40" />
            </div>
            <div>
              <label for="formSubject">
                Subject
              </label>
              <input class="requiredField " type="text" name="subject" id="formSubject" value="" size="40" />
            </div>
          </div>
          <div id="commentTxt">
            <label for="formContent">
              Message
            </label>
            <textarea class="requiredField " id="formContent" name="message" cols="40" rows="5"></textarea>
          </div>

          <div id="commentTxt">
            <label for="formContent">
              <h2>Question : 3 + 5 = </h2>
            </label>
            <input class="requiredField " type="text" name="anwser"  value="" size="40" placeholder="Please Anwser the Above Question Here" />
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