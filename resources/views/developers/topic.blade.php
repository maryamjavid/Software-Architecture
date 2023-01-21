@extends('layouts.developer')
@section('content')
<style>
     /* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: #fff;
box-shadow: 0px 0px 7px #b5b5b5;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
} 

</style>
<div class="mainTopic clearfix">
     <div class="left">
          @foreach($topics as $topic)
            <div class="item clearfix">
                <div style='floaT:left;'>
                    <h3 class="title">{{$topic->title}}</h3>
                    <p><span class='difficulty'>{{$topic->difficulty}} </span><span> {{$topic->category}}({{$topic->skill}})</span> </p>
                </div>
                <a href="{{ route('challange',$topic->id) }}" class='link'>Solve Challange</a>
             </div>
          @endforeach
         
     </div>
     <div class="right">
           <div class="skills">
               <p class="title">Skills</p>
                <label class="container1">{{$topic->category}} (Basic)
                    <input name="basic" type="checkbox" check ed="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">{{$topic->category}} (Intermediate)
                    <input name="intermediate" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">{{$topic->category}} (Advanced)
                    <input  name="advanced" type="checkbox">
                    <span class="checkmark"></span>
                </label>
           </div>
           <div class="difficulty">
               <p class="title">difficulty</p>
                <label class="container1">Easy
                    <input name="basic" type="checkbox" check ed="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Medium
                    <input name="intermediate" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container1">Hard
                    <input  name="advanced" type="checkbox">
                    <span class="checkmark"></span>
                </label>
           </div>
           <input type="submit" value="search" class="btn btn-primary" name="search"/>
     </div>
</div>
<script>
 function search(){
          var basic='';
          var intermediate='';
          var advanced='';
          if( $('input[name=basic]').is(':checked') ){basic=1;}else{basic=0;}
          if( $('input[name=intermediate]').is(':checked') ){intermediate=1;}else{intermediate=0;}
          if( $('input[name=advanced]').is(':checked') ){advanced=1;}else{advanced=0;}
          

          $.ajax({
           url:'action',
           type:'POST',
           dataType: 'json',
           data:{basic:basic,intermediate:intermediate,advanced:advanced},
           
           })
          .done(function(msg){
            // $('.search .left .item-wrapper').html('');
            // $('.search .left .item-wrapper').append(msg);
            alert(msg);
          })
 }
 $('input[name="search"]').click(function(){
    alert();
     search();
 })
 
</script>
@endsection
