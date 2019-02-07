@extends('layouts.admin')
@section('form')
    <br/>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject bold uppercase">بانک اطلاعاتی مدارک بیماران</span>
                </div>

            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                    <tr>
                        <th>شماره پرونده</th>
                        <th>پزشک ارجاع</th>
                        <th>پرشک ریپورت </th>
                        <th>فایل پیوست</th>
                        <th>فایل پکس</th>
                        <th>فایل نسخه</th>
                        <th>فایل نهایی</th>

                    </tr>
                    </thead>
                    @foreach($show as $sho)
                        @if($sho->FileFinal  != "")
                    <tbody>
                    <tr class="odd gradeX">
                        <td>{{$sho->FileNumber}}</td>
                        <td>{{$sho->ReferralPhysician}}</td>
                        <td>{{$sho->ReportDoctor}}</td>
                        <td><a href="{{$sho->AttachedFile}}"><img src="/icon/download.png" title="دریافت فایل پیوست"></a></td>
                        <td><a href="{{$sho->PaksFile}}"><img src="/icon/download.png" title="دریافت فایل پکس"></a></td>
                        <td><a href="{{$sho->VersionFile}}"><img src="/icon/download.png" title="دریافت فایل نسخه"></a></td>
                        <td><a href="{{$sho->FileFinal}}"><img src="/icon/download.png" title="دریافت فایل نهایی"></a></td>

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