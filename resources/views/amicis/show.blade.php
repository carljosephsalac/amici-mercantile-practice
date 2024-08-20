@extends('layouts.app')

@section('content')
    <div class="flex flex-col h-screen">
        <x-navbar />
        <div class="flex flex-col items-center justify-center flex-grow gap-5 px-3">
            @session('success')
                <x-alert>{{ $value }}</x-alert>
            @endsession
            <div class="shadow-xl card bg-base-200 w-96">
                <div class="card-body">
                    <h2 class="card-title">Product : {{ $amici->product_name }}</h2>
                    <p><strong>Type : </strong>{{ $amici->type }}</p>
                    <p><strong>Price : </strong>{{ $amici->price }}</p>
                    <p><strong>Description : </strong>{{ $amici->description }}</p>
                    <div class="justify-end card-actions">
                        <a class="btn btn-info" href="{{ route('amicis.edit', $amici) }}">Edit</a>
                        <button class="btn btn-error" onclick="my_modal_1.showModal()">Delete</button>

                        <!-- Open the modal using ID.showModal() method -->
                        <dialog id="my_modal_1" class="modal">
                            <div class="modal-box">
                                <h3 class="text-lg font-bold">Are you sure you want to delete this product?</h3>
                                <div class="modal-action">
                                    <form action="{{ route('amicis.destroy', $amici) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-error">Yes</button>
                                    </form>
                                    <form method="dialog">
                                        <button class="btn">No</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
