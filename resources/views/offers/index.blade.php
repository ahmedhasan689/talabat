@extends('layouts.master')

@section('title', __('lang.offers'))

@section('sub_title',  __('lang.offer_management'))

@section('subheader_title', __('lang.offers') )
@section('subheader_subtitle', __('lang.offer_management') )
@section('subheader_subtitle_two', __('lang.index') )

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    {{ __('lang.offer_management') }}
                    <span class="d-block text-muted pt-2 font-size-sm">
                        {{ __('lang.offer_text') }}
                    </span>
                </h3>
            </div>
            <div class="card-toolbar">

                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    {{ __('lang.add_offer') }}
                </a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable_2">
                <thead>
                <tr>
                    <th>Record ID</th>
                    <th>Order ID</th>
                    <th>Country</th>
                    <th>Ship City</th>
                    <th>Ship Address</th>
                    <th>Company Agent</th>
                    <th>Company Name</th>
                    <th>Ship Date</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>64616-103</td>
                    <td>Brazil</td>
                    <td>São Félix do Xingu</td>
                    <td>698 Oriole Pass</td>
                    <td>Hayes Boule</td>
                    <td>Casper-Kerluke</td>
                    <td>10/15/2017</td>
                    <td>5</td>
                    <td>1</td>
                    <td nowrap="nowrap"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>54868-3377</td>
                    <td>Vietnam</td>
                    <td>Bình Minh</td>
                    <td>8998 Delaware Court</td>
                    <td>Humbert Bresnen</td>
                    <td>Hodkiewicz and Sons</td>
                    <td>4/24/2016</td>
                    <td>2</td>
                    <td>2</td>
                    <td nowrap="nowrap"></td>
                </tr>

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.5') }}"></script>
@endsection
