@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Item</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('items.store') }}" method="POST" >
            @csrf

            <label for="name">Name</label>
            <br />
            <input id="name" type="text" name="name" value="{{ old('name') }}"
                class="form-control"
            >

            <br />

            <label for="description">Description</label>
            <br />
            <textarea id="description" name="description" class="form-control" rows="3"
            >{{ old('description') }}</textarea>

            <br />
            <label for="categories">Categories</label>
            <br />
            <select name="category_id" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if ( $category->id === (int)(old('category_id')) )
                                selected
                            @endif
                    >{{ $category->name }}
                    </option>
                @endforeach
            </select>

            <br />
            <br />
            <br />
            <input type="submit" class="btn btn-primary" value="Save">
            <br />
        </form>

    </div>
@endsection
