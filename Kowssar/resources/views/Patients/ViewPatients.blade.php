@extends('layouts.admin')
@section('form')
    <br xmlns="http://www.w3.org/1999/html"/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                ثبت مشخصات بیمار
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action="/AddPatient" method="post" class="mt-repeater form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام ونام خانوادگی</label>
                                    <br/>
                                    <input type="text" name="FullName" class="form-control" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره پرونده</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="FileNumber" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره تماس</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="PhoneNumber" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد ملی</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="NationalCode" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">بیمه</label>
                                    <br/>
                                    <select name="Insurance" class="form-control">
                                        @foreach($insurance as $insuranc)
                                            <option value="{{$insuranc->InsurancePercentage}}">{{$insuranc->NameOfInsurance}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">سرویس</label>
                                    <br/>
                                    <select name="Service" class="form-control">
                                        @foreach($service as $showServic)
                                            <option value="{{$showServic->Price}}">{{$showServic->NameService}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">پزشک ارجاع</label>
                                    <br/>
                                    <select name="ReferralPhysician" class="form-control">
                                        @foreach($user as $use)
                                            @if($use->Side =="پزشک")
                                                <option value="{{$use->name}}">{{$use->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">پزشک ریپورت</label>
                                    <br/>
                                    <select name="ReportDoctor" class="form-control">
                                        @foreach($user as $use)
                                            @if($use->Side =="پزشک")
                                                <option value="{{$use->name}}">{{$use->name}}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">فایل پیوست</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="15" type="file" name="AttachedFile" required/>
                                    </input>
                                </div>

                            </div>
                        </div>
                        <input type="submit" data-repeater-create class="btn btn-success mt-repeater-add" value="ثبت"/>
                        </input>
                    </form>
                </div>

                @if(session()->has('alert'))
                    <script>
                        swal({
                            html: "مشخصات بیمار برای بخش صندوق ارسال شد",
                            confirmButtonText: "تاييد",
                            type: 'success',
                        });

                        @endif
                    </script>

                    <div class="portlet light bordered">

                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                   id="sample_1">
                                <thead>
                                <tr>
                                    <th> نام ونام خانوادگی</th>
                                    <th> شماره پرونده</th>
                                    <th> شماره تماس</th>
                                    <th> کد ملی</th>
                                    <th> ارجاع</th>
                                    <th> ریپورت</th>
                                    <th>مبلغ پرداختی</th>
                                    <th>وضعیت پرداخت</th>
                                    <th>عملیات</th>

                                </tr>

                                </thead>

                                @foreach($patient as $patien)
                                    @if($patien->PaymentStatus == "")
                                        <tbody>

                                        <tr class="odd gradeX">
                                            <td>{{$patien->FullName}}</td>
                                            <td>{{$patien->FileNumber}}</td>
                                            <td>{{$patien->PhoneNumber}}</td>
                                            <td>{{$patien->NationalCode}}</td>
                                            <td>{{$patien->ReferralPhysician}}</td>
                                            <td>{{$patien->ReportDoctor}}</td>
                                            <td>{{number_format($patien->Amount)}} تومان</td>
                                            <td>


                                                <a href="/payment/{{$patien->id}}"><img src="/icon/check.png"
                                                                                        title="پرداخت شده"></a>
                                                {{--<a  id="span"><img src="/icon/credit-card (2).png" title="وضیعت بیمار"></a>--}}



                                                @if(session()->has('alert'))
                                                    <script>
                                                        swal({
                                                            html: "مشخصات بیمار ذخیره شد",
                                                            confirmButtonText: "تاييد",
                                                            type: 'success',
                                                        });

                                                        @endif
                                                    </script>
                                            </td>


                                            <td><a href="/ViewUpdatePatient/{{$patien->id}}"><img src="/icon/edit (1).png"
                                                                 title="ویرایش"> </a>
                                                <a href="/remove/{{$patien->id}}"><img src="/icon/delete (2).png"
                                                                                       title="حذف">


                                                </a>


                                            </td>


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
    </div>

    <!-- BEGIN EXAMPLE TABLE PORTLET-->



@endsection
@section('script')
    <script type="text/javascript">

        $('#span').on('click',function () {
            $('#myModal').modal();


        })
    </script>
@endsection
