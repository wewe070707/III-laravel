@extends('layout.master')
@section('content')
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<p>Welcome {{ Session::get('username')}}</p> 
<h2>留言板<a href = "/message/create" class = "btn btn-primary btn-lg pull-right">新增</a></h2>
           
<table class="table table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      @foreach ($messageList as $message)
        <tr>
            <td>{{$message->title}}</td>
            <td>{{$message->content}}</td>
            <td>
            <form action = "/message/{{$message->id}}" method = "post">
                    @csrf
                    @method('delete')
                    <input class = "btn btn-danger pull-right" type = "submit"  value = "刪除" >
                    <a href = "/message/{{$message->id}}/edit" class = "btn btn-info pull-right">編輯</a>
                </form>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
@endsection