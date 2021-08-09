@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Category</h1>

        <form action="{{ route('categories.store') }}" method="POST" >
            @csrf

            <label for="name">Name</label>
            <br />
            <input id="name" type="text" name="name" value=""
                class="form-control"
            >

            <br />
            <input type="submit" class="btn btn-primary" value="Save">
            <br />
        </form>

    </div>
@endsection
