@extends('layouts.developer')
@section('content')
<style>
.top>p {
background: white;
padding: 15px;
border-bottom: solid #e9e8e8 1px;
box-shadow: 3px 6px 15px #adadad;
margin-bottom: 15px;
margin-top: 50px;
font-size: 17px;
color: #282828;
}
.top>p>span{
font-size:20px;
color:black;
}
.body{
    background: white;
padding: 15px;
border-bottom: solid #e9e8e8 1px;
box-shadow: 3px 6px 15px #adadad;
margin-bottom: 15px;
margin-top: 50px;
font-size: 17px;
color: #282828;
}
.body  img{
    width:100%;
    /* height:100px; */
}
.body .item{
    margin-top:25px;
}
.body  .respond{
    margin-top: 15px;
margin-left: 10px;
}
input[type="submit"]{
display: block;
margin: 30px auto;
padding: 6px 80px;
font-size: 20px;
}
</style>
    <div class='main container'>
        <div class="top">
            <p><span>{{$challange->category}}</span> : {{$challange->title}}</p>
        </div>
        <div class="body">
             @include('partials.errors')
             <form action="" method="post">
                 {{ csrf_field()}}
                <div class="item">
                    <p class='title'>1. What is the output of the following range() function</p>
                    <img src="/files/images/ch1.png" alt="">
                    <div class="respond">
                        <div>
                            <input type="radio" id="option1-1" name="option1" value="option1-1">
                            <label for="option1-1">2,1,0</label>
                        </div>
                        <div>
                            <input type="radio" id="option2-1" name="option1" value="option2-1">
                            <label for="option2-1">2, 1, 0, -1, -2, -3, -4, -5</label>
                        </div>
                        <div>
                            <input type="radio" id="option3-1" name="option1" value="option3-1">
                            <label for="option33-1"> 2, 1, 0, -1, -2, -3, -4</label>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <p class='title'>2. Given the nested if-else below, what will be the value x when the code executed successfully</p>
                    <img src="/files/images/ch2.png" alt="">
                    <div class="respond">
                        <div>
                            <input type="radio" name="option2" id="option1-2" value="option1-2">
                            <label for="option1-2">0</label>
                        </div>
                        <div>
                            <input type="radio" name="option2" id="option2-2" value="option2-2">
                            <label for="option2-2">4</label>
                        </div>
                        <div>
                            <input type="radio" name="option2" id="option3-2" value="option3-2">
                            <label for="option3-2">2</label>
                        </div>
                        <div>
                            <input type="radio" name="option2" id="option4-2" value="option4-2">
                            <label for="option4-2">3</label>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <p class='title'>3. What is the output of the following nested loop?</p>
                    <img src="/files/images/ch3.png" alt="">
                    <div class="respond">
                        <div>
                            <input type="radio" name="option3" id="option1-3" value="option1-3">
                            <label for="option1-3">10 11 12 13</label>
                        </div>
                        <div>
                            <input type="radio"  name="option3" id="option2-3" value="option2-3">
                            <label for="option2-3">11 13</label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Submit">
             </form>
        </div>
    </div>
@endsection