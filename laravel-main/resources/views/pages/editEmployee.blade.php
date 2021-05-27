@extends('layouts.main-layout')

@section('content')
    <main>
        <form action="{{route('updateEmployeeLink', $employee -> id)}}" method="POST">
            @method('POST')
            @csrf

            <ul class="employees-list">
                <li>
                    <h4>
                        Employee #{{$employee -> id}} Edit:
                    </h4>
                </li>
                <li>
                    <label for="firstname">
                        Firstname: 
                    </label>
                    <input type="text" name="firstname" value="{{$employee -> firstname}}">
                </li>
                <li>
                    <label for="firstname">
                        Lastname: 
                    </label>
                    <input type="text" name="lastname" value="{{$employee -> lastname}}">
                </li>
                <li>
                    <label for="firstname">
                        Role: 
                    </label>
                    <input type="text" name="role" value="{{$employee -> role}}">
                </li>
                <li>
                    <label for="firstname">
                        Ral: 
                    </label>
                    <input type="text" name="ral" value="{{$employee -> ral}}">
                </li>
            </ul>
            <button type="submit">
                UPDATE
            </button>
        </form>
    </main>
@endsection