@extends('base')
@push('title')Result @endpush
@section('content')

<div class="container">
    <h1>Result marksheet</h1>
    <div class="card">
        <small>REPORT CARD OF</small>
        <div class="report-name">
            {{ $result->name }}
        </div>
        <div class="title-2">
            <span>
                Group: {{ $result->group }}
            </span>
            <span>
                Year: {{ $result->year }}
            </span>
        </div>
        <table>
            <tr>
                <td>Roll </td>
                <td>{{ $result->roll }}</td>
                <td>Published </td>
                <td>{{ date('d-m-Y', strtotime($result->created_at)); }}</td>
            </tr>
            <tr>
                <td>Registration </td>
                <td>{{ $result->registration }}</td>
                <td>Updated </td>
                <td>{{ date('d-m-Y', strtotime($result->updated_at)); }}</td>
            </tr>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <td colspan="3">Course </td>
                    <td colspan="3"> Grade </td>
                </tr>
                <tr>
                    <td>Code </td>
                    <td colspan="2"> Name </td>
                    <td rowspan="2"> Number </td>
                    <td> Letter </td>
                    <td> Points </td>
                </tr>
            </thead>
            <tbody>
                <!-- bangla -->
                <tr>
                    <td>101</td>
                    <td colspan="2"> Bangla </td>
                    <td> {{ $result->bangla }} </td>
                    <td> {{ $result->bangla_grade }} </td>
                    <td> {{ $result->bangla_gpa }} </td>
                </tr>
                <!-- english -->
                <tr>
                    <td>102</td>
                    <td colspan="2"> English </td>
                    <td> {{ $result->english }} </td>
                    <td> {{ $result->english_grade }} </td>
                    <td> {{ $result->english_gpa }} </td>
                </tr>
                <!-- math -->
                <tr>
                    <td>103</td>
                    <td colspan="2"> Math </td>
                    <td> {{ $result->math }} </td>
                    <td> {{ $result->math_grade }} </td>
                    <td> {{ $result->math_gpa }} </td>
                </tr>
                <!-- ict -->
                <tr>
                    <td>104</td>
                    <td colspan="2"> ICT </td>
                    <td> {{ $result->ict }} </td>
                    <td> {{ $result->ict_grade }} </td>
                    <td> {{ $result->ict_gpa }} </td>
                </tr>
                <!-- physics -->
                <tr>
                    <td>105</td>
                    <td colspan="2"> Physics </td>
                    <td> {{ $result->physics }} </td>
                    <td> {{ $result->physics_grade }} </td>
                    <td> {{ $result->physics_gpa }} </td>
                </tr>
                <!-- chemistry -->
                <tr>
                    <td>106</td>
                    <td colspan="2"> Chemistry </td>
                    <td> {{ $result->chemistry }} </td>
                    <td> {{ $result->chemistry_grade }} </td>
                    <td> {{ $result->chemistry_gpa }} </td>
                </tr>
                <!-- biology -->
                <tr>
                    <td>107</td>
                    <td colspan="2"> Biology </td>
                    <td> {{ $result->biology }} </td>
                    <td> {{ $result->biology_grade }} </td>
                    <td> {{ $result->biology_gpa }} </td>
                </tr>
                <!-- regioanl -->
                <tr>
                    <td>108</td>
                    <td colspan="2"> Regional </td>
                    <td> {{ $result->religion }} </td>
                    <td> {{ $result->religion_grade }} </td>
                    <td> {{ $result->religion_gpa }} </td>
                </tr>
                <!-- social science -->
                <tr>
                    <td>109</td>
                    <td colspan="2"> Social Science </td>
                    <td> {{ $result->social_science }} </td>
                    <td> {{ $result->social_science_grade }} </td>
                    <td> {{ $result->social_science_gpa }} </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="footer">Total</td>
                    <td> {{ $result->grade }} </td>
                    <td colspan="2">{{ $result->gpa }} </td>
                </tr>
                <tr>
                    <td colspan="4" class="footer">GPA</td>
                    <td colspan="3">{{ $result->gpa }} / 5.0 </td>
                </tr>
        </table>
    </div>
<button class="btn" id="download">Download</button>
</div>

@endsection