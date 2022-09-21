@extends('base')
@push('title')All Results @endpush
@section('content')

<div class="container">
    <h1>All published results</h1>
    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Roll</th>
                    <th>Registration</th>
                    <th>Name</th>
                    <th>Result</th>
                    <th>Marksheet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                <tr>
                    <td>{{ $result->roll }}</td>
                    <td>{{ $result->registration }}</td>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->grade }}</td>
                    <td>
                        <form action="{{ route('result') }}" method="POST">
                            @csrf
                            <input type="hidden" name="roll" value="{{ $result->roll }}">
                            <input type="hidden" name="registration" value="{{ $result->registration }}">
                            <input type="hidden" name="year" value="{{ $result->year }}">
                            <button type="submit" class="btn btn-sm">View</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection