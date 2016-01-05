
@extends('welcome')
@foreach ($users as $user)
    <tr>
        <td>
            {{$user->User}}

        </td>
        <td>
            {{$user->Password}}
        </td>

    </tr>

@endforeach
