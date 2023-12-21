@extends('admin.layout.home')
@section('mainContent')
<style>
    .div_center{
        text-align: center;
    }
    .input_color{
        color: black;
    }
    .center{
        margin: auto;
        width: 60%;
        text-align: center;
        border: 1px solid green;
    }
</style>
    <div class="content-wrapper">
        @if (session()->has('message'))
        <div class="alert alert-success"> 
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
        @endif
      <div class="div_center">

        <h2>Add Language</h2>
        <form action="{{route('add_language')}}" method="POST">
            @csrf
            <input type="text" name="language" class="input_color" placeholder="Write Language Name">
            <input type="submit" name="submit" class="btn btn-primary" value="Add Language" placeholder="Write Language Name">
        </form>
      </div>
      <table class="center">
        <tr>
            <td>Language Name</td>
            <td>Action</td>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->language_name}}</td>
          <td>  <a onclick="return confirm ('Are you sure to delete this?')" class="btn btn-danger" href="{{route('delete_language',$data->id)}}" >Delete</a></td>
        </tr>
        @endforeach
        
      </table>
    </div>
@endsection
