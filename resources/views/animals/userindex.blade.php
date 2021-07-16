@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
  <h1 class="display-3" style="margin: 20px 0 20px 30%;">動物資料表</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ani_id</td>
          <td>ani_name</td>
          <td>ani_info</td>
          <td>ani_gentle</td>
        </tr>
    </thead>
    <tbody>
        @foreach($animals as $animal)
        <tr>
            <td>{{$animal->ani_id}}</td>
            <td>{{$animal->ani_name}}</td>
            <td>{{$animal->ani_info}}</td>
            <td>{{$animal->ani_gentle}}</td>
        </tr>
        @endforeach
    </tbody>
    <a href="{{ url('animals/create') }}">前往新增</a>
  </table>
<div>
</div>
@endsection