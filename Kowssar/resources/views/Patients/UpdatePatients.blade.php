@extends('layouts.admin')
@section('form')

    <br xmlns="http://www.w3.org/1999/html"/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
               ویرایش مشخصات بیمار
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">

                    <form action="/UpdatePatient/{{$patient->id}}" method="post" class="mt-repeater form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}

                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام ونام خانوادگی</label>
                                    <br/>

                                    <input type="text" name="FullName" class="form-control" value="{{$patient->FullName}}" required/>

                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره پرونده</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="FileNumber" value=" {{$patient->FileNumber}}" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">شماره تماس</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="PhoneNumber" value="{{$patient->PhoneNumber}}" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد ملی</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="NationalCode" value=" {{$patient->NationalCode}}" required/>
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
                                        <option value=" {{$patient->ReferralPhysician}}">{{$patient->ReferralPhysician}}</option>

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
                                        <option value=" {{$patient->ReportDoctor}}">{{$patient->ReportDoctor}}</option>

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


            </div>
        </div>
    </div>

    <!-- BEGIN EXAMPLE TABLE PORTLET-->



@endsection
