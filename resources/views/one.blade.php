@extends('layouts.main')

@section('content')
    <table class="table-auto w-full text-xs sm:text-sm md:text-base rounded-lg">
        <thead>
        <tr class="bg-slate-900 rounded-lg">
            <th class="border-b font-medium p-2 text-white rounded text-left">Name</th>
            <th class="border-b font-medium p-2 text-white rounded text-left">eMail</th>
            <th class="border-b font-medium p-2 text-white rounded text-left">House Type</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b border-slate-100 p-2 text-slate-500">{{ $firstUser->name ?? ''}}</td>
                <td class="border-b border-slate-100 p-2 text-slate-500">{{ $firstUser->email ?? ''}}</td>
                <td class="border-b border-slate-100 p-2 text-slate-500">{{ $firstUser->house->type ?? '' }}</td>
            </tr>
        </tbody>
    </table>


@endsection
