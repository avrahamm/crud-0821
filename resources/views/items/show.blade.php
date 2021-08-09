@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Item {{ $item->name }}</h1>
        <br>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th></th>
            </tr>
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->category->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('items.edit', $item->id ) }}">Edit</a>

                    <form action="{{ route('items.destroy', $item->id) }}" method="POST"
                          style="display: inline">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete"
                               onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>

        </table>

    </div>
@endsection
