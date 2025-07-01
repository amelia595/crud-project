@extends('layouts.main')

@section('title', 'Attendance')

@section('content')
    <h2>Attendance</h2>
    <input type="text" placeholder="Search..." />

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Clock In</th>
                <th>Clock Out</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Wkdyksuasdykdgsaiudhf</td>
                <td>08:30</td>
                <td>17:05</td>
            </tr>
        </tbody>
    </table>
@endsection
