@extends('layouts.app')

@section('content')
    <x-navbar />
    <div class="flex flex-col gap-10 p-10">
        @session('success')
            <x-alert>{{ $value }}</x-alert>
        @endsession
        <div
            class="grid justify-center grid-cols-1 gap-1 gap-y-10 lg:grid-cols-2 xl:grid-cols-3 place-content-center place-items-center">
            @foreach ($amicis as $amici)
                <div class="shadow-xl card bg-base-200 w-96">
                    <div class="card-body">
                        <h2 class="card-title">{{ $amici->product_name }}</h2>
                        <p>{{ $amici->type }}</p>
                        <div class="justify-end card-actions">
                            <a class="btn btn-primary" href="{{ route('amicis.show', $amici) }}">Show</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
