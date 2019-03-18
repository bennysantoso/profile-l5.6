@extends('layout')

@section('title', 'Register')

@section('content')
    <br/>
    <div class="row">
        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('registerform') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

