@extends('layouts.main-layout')

@section('content')
    <main>
        <ul class="employees-list">
            <li>
                <h4>
                    Employee #{{$employee -> id}} Details:
                </h4>
            </li>
            <li>
                Firstname: {{$employee -> firstname}}
            </li>
            <li>
                Lastname: {{$employee -> lastname}}
            </li>
            <li>
                Role: {{$employee -> role}}
            </li>
            <li>
                Ral: {{$employee -> ral}}
            </li>
        </ul>
    </main>
@endsection