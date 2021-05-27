@extends('layouts.main-layout')

@section('content')
    <main>
        <ul class="employees-list">
            <li>
                <h4>
                    Employees List:
                </h4>
            </li>
            @foreach ($employees as $employee)
                <li>
                    --- {{$employee -> firstname}} {{$employee -> lastname}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection