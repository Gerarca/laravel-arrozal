@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nuestrahistoria'
])
@section('title', trans_choice('navigation.nuestra-historia', 1) )
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ trans_choice('navigation.nuestra-historia', 1) }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ trans_choice('sentences.click-on', 1) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('assets_front/images/copylinkyoutube-1.png') }}" alt="Copy 1">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ trans_choice('sentences.click-on-1', 1) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('assets_front/images/copylinkyoutube-2.png') }}" alt="Copy 1">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ trans_choice('sentences.click-on-2', 1) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('assets_front/images/copylinkyoutube-3.png') }}" alt="Copy 1">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ trans_choice('sentences.click-on-3', 1) }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

