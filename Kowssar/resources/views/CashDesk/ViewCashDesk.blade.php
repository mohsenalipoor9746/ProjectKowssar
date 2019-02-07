@extends('layouts.admin')
@section('form')
    <br/>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject bold uppercase">لیست بیماران موجود در موسسه</span>
                </div>

            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                    <tr>
                        <th>نام بیمار</th>
                        <th>شماره پرونده</th>
                        <th>هزینه سرویس</th>
                        <th>درصد بیمه</th>
                        <th>هزینه پرداختی</th>
                        <th>وضعیت پرداخت</th>
                    </tr>
                    </thead>
                    @foreach($patient as $patien)
                        @if($patien->PaymentStatus == "icon/check.png")
                    <tbody>
                    <tr class="odd gradeX">
                        <td>{{$patien->FullName}}</td>
                        <td>{{$patien->FileNumber}}</td>
                        <td>{{number_format($patien->Service) }}  تومان</td>
                        <td>{{$patien->Insurance}}%</td>
                        <td>{{number_format($patien->Amount) }}  تومان</td>
                        <td><img src="{{$patien->PaymentStatus}}"></td>
                    </tr>
                    </tbody>

                        @endif
                        @endforeach
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
    @endsection