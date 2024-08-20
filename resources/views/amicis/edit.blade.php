@extends('layouts.app')

@section('content')
    <div class="flex flex-col h-screen">
        <x-navbar />
        <div class="flex items-center justify-center flex-grow px-3">
            <div class="w-full max-w-md p-5 rounded-lg px-7 bg-base-200">
                <form class="w-full" action="{{ route('amicis.update', $amici) }}" method="POST">
                    @csrf
                    @method('patch')
                    <x-input name="product_name" data="{{ $amici->product_name }}">Product Name</x-input>
                    <x-input name="type" data="{{ $amici->type }}">Type</x-input>
                    <x-input name="price" type="number" data="{{ $amici->price }}">Price</x-input>
                    <x-text-area name="description" data="{{ $amici->description }}">Description</x-text-area>
                    <div class="flex justify-center w-full mt-4">
                        <button class="mx-auto btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
