@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Items</h1>

        <a href="{{ route('items.create') }}" class="btn btn-info">New Item</a>
        <br>
        <br>
        <br>

        <table class="table">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->description }}</td>
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
            @endforeach
        </table>

        {{ $items->links() }}
    </div>
@endsection
