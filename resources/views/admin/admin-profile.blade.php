@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">

                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Profile</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-profile">
                            <div class="row">
                                <div class="col-lg-12 col-12 mb-3">
                                    <h6>General</h6>
                                </div>

                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block-profile-image-wrap">
                                        <img src="{{ asset('assets/images/medium-shot-happy-man-smiling.jpg') }}" class="custom-block-profile-image img-fluid" alt="">

                                        <a href="{{ route('admin.profile.edit') }}" class="bi-pencil-square custom-block-edit-icon"></a>
                                    </div>
                                </div>

                                <div class="col-lg-9 col-12">
                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Name:</strong>

                                        <span>{{ $user->name }}</span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Email:</strong>

                                        <a href="#">
                                            {{ $user->email }}
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Phone:</strong>

                                        <a href="#">
                                            falta adicionar na tabela
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Birthday:</strong>

                                        <span>falta adicionar na tabela</span>
                                    </p>

                                    <p class="d-flex flex-wrap">
                                        <strong>Address:</strong>

                                        <span>falta adicionar na tabela</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="custom-block custom-block-profile bg-white">
                            <h6 class="mb-4">Card Information</h6>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>User ID:</strong>

                                <span>{{ $user->id }}</span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Type:</strong>

                                <span>{{ $user->utype }}</span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Created:</strong>

                                <span>{{ $user->created_at }}</span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Valid Date:</strong>

                                <span>July 18, 2032</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-contact">
                            <h6 class="mb-4">Still can’t find what you looking for?</h6>

                            <p>
                                <strong>Call us:</strong>
                                <a href="tel: 305-240-9671" class="ms-2">
                                    (60)
                                    305-240-9671
                                </a>
                            </p>

                            <a href="#" class="btn custom-btn custom-btn-bg-white mt-3">
                                Chat with us
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
