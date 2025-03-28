@extends('layouts.main')

@section('container')

<h3>Data Kategori</h3>
<hr>

<a  class="btn btn-primary mb-4" href="/kategori/create">+ Tambah Data Kategori</a>
<div class="row">
  <div class="col-md-5">

    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Action</th>
      </tr>
      
      @php
        $i = 1;
      @endphp
    
      @foreach ($categories as $category)
        <tr>
          <td>{{ $i }}</td>
          <td>{{ $category->nama }}</td>
          <td>
            <a class="btn btn-warning btn-sm" href="/kategori/{{ $category->idkategori }}/edit">Edit</a>
            <form action="/kategori/{{ $category->idkategori }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                Delete
              </button>
            </form>
          </td>
        </tr>
        @php
          $i++;
        @endphp
      @endforeach
    </table>
    <br>
    <p>Total Rows = {{ $i-1 }}</p>
  </div>
</div>


@endsection

