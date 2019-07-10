@extends('layout.master')
@section('content')
<form class="form-horizontal" action = "/message" method = "post">
    @csrf
    <fieldset>
    <!-- Form Name -->
    <legend><h1>新增留言</h1></legend>
    
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="title">Title</label>  
        <div class="col-md-4">
        <input id="title" name="title" type="text" placeholder="" class="form-control input-md" required="">
        </div>
    </div>
    
    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="content">content</label>
        <div class="col-md-4">                     
        <textarea class="form-control" id="content" name="content"></textarea>
        </div>
    </div>
    
    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-8">
        <button class="btn btn-default">reset</button>
        <button id="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
    
    </fieldset>
    </form>
@endsection

    