@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> Welcome back, <u>{{ Auth::user()->name }}</u>!</div>
        </div>
    </div>
</div>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <div class="col-lg-12">
            <div class="row">

                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Heroes</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-video2"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Table Heroes</p>
                                    <a href="/heroes" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="card-body">
                            <h5 class="card-title">Hero's Role</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-gear"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Table Role</p>
                                    <a href="/roles" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Hero's Specialty</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-vcard"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Table Specialties</p>
                                    <a href="/specialties" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Hero's Difficulty</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-speedometer"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Table Difficulties</p>
                                    <a href="/difficulties" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">User's Favorite Hero</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-hearts"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Table Favorite Heroes</p>
                                    <a href="/favoriteheroes" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Table Users</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <p>Data Users</p>
                                    <a href="/users" class="btn btn-primary">Details <i
                                            class="bi bi-box-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection