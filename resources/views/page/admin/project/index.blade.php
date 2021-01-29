@extends('layouts.admin')
@section('content')
    <style>
        button{
            width: 100px;
        }
        a{
            width: 100px;
        }
    </style>
    <div class="container pt-3">
        <table class="table" style="background: #e1e1e1;">
            <div class="ml-auto p-2">
            <button type="button" class="btn btn-info" href="{{route('project.create')}}" style="margin-left: 785px;">Create</button>
            </div>
            <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Project Detail</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($items as $no => $item)
                <tr>
                    <th scope="row">{{$no+1}}</th>
                    <td>
                        <img src="{{Storage::url($item->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                    <td>{{$item->detail}}</td>
                    <td>{{$item->content}}</td>                >
                    <td>
                        <a href="{{ route('project.edit' ,$item->id)}}"
                        class="btn btn-outline-primary">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin untuk menghapus ini?')">
                        <form action="{{ route('project.destroy', $item->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-primary">Delete</button>
                        </form>
                        </a>
                    </td>
                </tr>
                @empty

                @endforelse

            </tbody>
        </table>
    </div>

@endsection
