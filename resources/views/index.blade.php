@extends('base')
@push('title')Home @endpush
@section('content')

<div class="container">
    <h1>Result Publisher BD</h1>
    <div class="card">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/result" method="POST">
            @csrf
            <div class="form-section my-2">
                <label for="roll">Roll Number</label>
                <input type="number" name="roll" class="form-area" placeholder="Roll" required>
            </div>
            <div class="form-section my-2">
                <label for="registration">Registration Number</label>
                <input type="number" name="registration" class="form-area" placeholder="Registration" required>
            </div>
            <div class="form-section my-2">
                <label for="year">Year</label>
                <select name="year" class="form-area" required>
                    <option value="">Select Year</option>
                    @for ($i = 2000; $i <= 2030; $i++) <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                </select>
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>

</div>

@endsection