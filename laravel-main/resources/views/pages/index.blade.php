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

                    <div>
                        <a href="{{route('deleteEmployeeLink', $employee -> id)}}" class="icon delete">
                            <i class="fas fa-times-circle"></i>
                        </a>
                        <a href="" class="icon edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
@endsection