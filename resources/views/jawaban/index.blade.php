
@extends('master')

@section('content')


<table class="table">
  <tr>
    <th scope="col">id_tanya</th>
    <th scope="col">judul</th>
    <th scope="col">isi</th>
  </tr>
  @foreach($items as $key => $item)
 <tr>
 <td>{{$item -> id_tanya }}</td>
 <td>{{$item->judul}}</td>
 <td>{{$item -> isi}}</td>
 </tr>
 @endforeach
</table>

@endsection

