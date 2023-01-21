@extends('layouts.developer')
<style>
    .left{
   /* float:left; */
   /* width:75%; */
   border:solid b lue 2px;
   margin-top:30px;
}
.left > h3{
    margin-top: 50px;
margin-bottom: 20px;
font-size: 23px;
}
 .left .item{
    background: white;
    padding: 25px 15px 1px;
    border-bottom: solid #e9e8e8 1px;
    box-shadow: 3px 6px 15px #adadad;
    margin-bottom: 15px;
}
 .left .item h3{
    font-size: 24px;
color: #3a3a3a;
}
 .left .item p{
    font-size: 14px;
color: #515151;
}
 .left .item p span{
    margin-left:3px;
}
 .left .item .difficulty{
    color:green;
}
 .left .item .link{
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
.left .item .category{
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
    <div class="topics container">
        <h3>select a Topic</h3>
        <table>
            <tr>
                <td><a href="{{ route('topic','python') }}"><i class="fab fa-python"></i>Python </a></td>
                <td><a href="{{ route('topic','vue') }}"><i class="fab fa-vuejs"></i>Vue</a></td>
                <td><a href="{{ route('topic','javascript') }}"><i class="fab fa-angular"></i>Angular</a></td>
                <td><a href="{{ route('topic','php') }}"><i class="fab fa-php"></i>PHP</a></td>
            </tr>
            <tr>
                <td><a href="{{ route('topic','java') }}"><i class="fab fa-java"></i>Java</a></td>
                <td><a href="{{ route('topic','javascript') }}"><i class="fab fa-js-square"></i>Javascript</a></td>
                <td><a href="{{ route('topic','javascript') }}"><i class="fab fa-react"></i>React</a></td>
                <td><a href="{{ route('topic','javascript') }}"><i class="fab fa-css3-alt"></i>CSS3</a></td>
            </tr>
        </table>
    </div>
    <div class="left container">
          <h3>Completed Challange</h3>
          @foreach($topicUser as $topic)
            <div class="item clearfix">
                <div style='floaT:left;'>
                    <h3 class="title">{{$topic->title}}</h3>
                    <p><span class='difficulty'>{{$topic->difficulty}} </span><span> {{$topic->category}}({{$topic->skill}})</span> </p>
                </div>
                <div style="float:right;">
                    <span class='category'>{{ $topic->category }}</span>
                    <a  class='link'>Completed</a>
                </div>
             </div>
          @endforeach
         
     </div>
@endsection