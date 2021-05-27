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
                    <a href="{{route('employeeLink', $employee -> id)}}">
                        {{$employee -> firstname}} {{$employee -> lastname}}
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection