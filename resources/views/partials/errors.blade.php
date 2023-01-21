@if($errors->any())
    <div class="">
    @foreach($errors->all() as $error) 
    <p class="alert alert-danger" style="border-bottom:solid white 2px;pad ding-bottom:3px;margin-bottom:5px;">
     {{$error}}
    </p>
    @endforeach
    </div>
@endif