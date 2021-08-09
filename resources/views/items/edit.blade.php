@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Edit Item</h1>

        <form action="{{ route('items.update', $item->id) }}" method="POST" >
            @method('PUT')
            @csrf
            <label for="name">Name</label>
            <br />
            <input id="name" type="text" name="name"
                   value="{{  $item->name }}"
                   class="form-control"
            >

            <br />
            <label for="description">Description</label>
            <br />
            <textarea id="description" name="description"
                      class="form-control" rows="3"
            >{{ $item->description}}</textarea>

            <br />
            <label for="categories">Categories</label>
            <br />
            <select name="category_id" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @if ($category->id === $item->category_id)
                        selected
                    @endif
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <br />
            <input type="submit" class="btn btn-primary" value="Update">
            <br />
        </form>

    </div>
@endsection
