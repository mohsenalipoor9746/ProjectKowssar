@extends('layouts.admin')
@section('form')
    <br/>
    @if(session()->has('alert'))
            <script>
                swal({
                    title: "موفق باشید",
                    html: "نظر شما ثبت شد و برای پزشک ارجاع ارسال شد",
                    confirmButtonText: "تاييد",
                    type: 'success',
                });
            </script>
    @endif
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <span class="caption-subject bold uppercase">لیست بیماران شما</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="sample_1">
                        <thead>
                        <tr>
                            <th>نام بیمار</th>
                            <th>شماره پرونده</th>
                            <th>فایل پیوست</th>
                            <th>عملیات ریپورت</th>

                        </tr>
                        </thead>
                        @foreach($show as $sho)
                            @if(auth()->user()->name == $sho->ReportDoctor)
                                @if($sho->PaksFile == "" and  $sho->VersionFile  == "" )
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>{{$sho->FullName}}</td>
                                    <td>{{$sho->FileNumber}}</td>
                                    <td><a href="{{$sho->AttachedFile}}"><img src="/icon/download.png"
                                                                              title="دریافت فایل پیوست"></a></td>
                                    <td><a href="/ViewAddDoctorReport/{{$sho->id}}"><img src="/icon/chat (1).png"
                                                                                         title="ثبت نظر پزشک ریپورت"></a>
                                    </td>
                                </tr>
                                </tbody>
                                    @endif
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection