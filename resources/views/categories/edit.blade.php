@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Category Edit</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST"  >
            @method('PUT')
            @csrf
            <label for="name">Name</label>
            <br />
            <input id="name" type="text" name="name" value="{{ $category->name }}"
                class="form-control"
            >

            <br />

            <input type="submit" class="btn btn-primary" value="Update">
            <br />
        </form>


    </div>
@endsection
