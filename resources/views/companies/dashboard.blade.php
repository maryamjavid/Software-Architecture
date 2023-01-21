@extends('layouts.developer')
<style>
.developers{
    margin-top:70px;
}
.developers .item{
    background: white;
    margin: 25px auto;
padding: 15px 20px;
border-radius: 5px;
position:relative;
box-shadow: 0 6px 16px 0 rgba(0,0,0,.2);
}
.developers .item .name{
    color: #39424e;
font-size: 24px;
margin-bottom: 10px;
}
.developers .item .phone{
    background: #a54343;
    float: left;
    color: white;
    padding: 5px 15px;
    border-radius: 3px;
    margin: 0;
}
.developers .item .hire{
    display: block;
margin-bottom: 10px;
color: white;
background: #1794a8;
}
.developers .item .action{
float:right;
}
.developers .item .action {
float:right;
}
.developers .item .itemChallange{
    width: 100%;
float: left;
margin-top: 30px;
display:none;
}

.item1{
    background: white;
    padding: 25px 15px 1px;
    border-bottom: solid #e9e8e8 1px;
    box-shadow: 3px 6px 15px #adadad;
    margin-bottom: 15px;
}
.item1 h3{
    font-size: 24px;
color: #3a3a3a;
}
.item1 p{
    font-size: 14px;
color: #515151;
}
.item1 p span{
    margin-left:3px;
}
.item1 .difficulty{
    color:green;
}
.item1 .link{
float: right;
/* background: #1ba94c; */
/* color: white; */
padding: 6px 14px;
border-radius: 3px;
font-size: 17px;
box-shadow: 0px 0px 5px gray;
font-weight: bold;
/* marg/in-top:20px; */
border: solid 1px #1ba94c;
color: #1ba94c;
}
.item1 .category{
    display: block;
text-align: center;
margin-top: -15px;
margin-bottom: 8px;
background: #436D86;
color: white;
padding: 5px 0;
border-radius: 4px;
font-size: 16px;
}
</style>
@section('content')
<div class="container">
   <div class="developers">
       <h3>Developers List</h3>
       @foreach($developers as $developer)
       @if($developer->topics != '[]') 
       <div class="item clearfix">
            <div class='clearfix' style='float:left;'>
                <p class=name>{{$developer->name}}</p>
                <p class='phone'>{{$developer->phone}}</p>
            </div>
            <div class='clearfix' style='float:right;'>
                <span class='hire btn btn-info'>Hire Now!</span>
                <span class='action btn btn-success'>See Challanges <i style='margin-left:5px' class="fas fa-caret-down"></i></span>
            </div>
            <div class="itemChallange">
                @php $tt=$developer->topics; @endphp
                @foreach($tt as $t)
                <div class="item1 clearfix">
                    <div style='floaT:left;'>
                        <h3 class="title">{{$t->title}}</h3>
                        <p><span class='difficulty'>{{$t->difficulty}} </span><span> {{$t->category}}({{$t->skill}})</span> </p>
                    </div>
                    <div style="float:right;">
                        <span class='category'>{{ $t->category }}</span>
                        <a  class='link'>Completed</a>
                    </div>
                </div>
                @endforeach
            </div>
       </div>
       @endif 
       @endforeach
   </div>
</div>
 <!-- @foreach($developers as $developer)
 @if($developer->topics != '[]') 
    <P>{{ $developer->name  }}</P>
    @php $tt=$developer->topics; @endphp
    @foreach($tt as $t)
     <p>{{$t->title}}</p>
    @endforeach
 @endif -->
<!-- @endforeach  -->
<script>
  $('.item .action').click(function(){
      $(this).parents('.item').find('.itemChallange').slideToggle();
  })
</script>
@endsection
