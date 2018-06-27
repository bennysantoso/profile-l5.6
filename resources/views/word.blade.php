@extends('layout')

@section('title', 'Word')

@section('content')
    <br/>
    <div class="row">
        <div class="col-md-4">
            <form action="{{ url('sayhello') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="words" placeholder="Say hello here">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>
                    @if(!empty($mywords))
                        {{ $mywords }}
                    @endif
                </label>
            </div>
        </div>
    </div>
@endsection

