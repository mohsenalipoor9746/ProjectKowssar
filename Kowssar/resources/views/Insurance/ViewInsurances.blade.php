@extends('layouts.admin')
@section('form')
    <br/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                ثبت مشخصات بیمه درمانی جدید
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action="/AddInsurance" method="post" class="mt-repeater form-horizontal">
                        {{csrf_field()}}
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام بیمه</label>
                                    <br/>
                                    <input type="text" name="NameOfInsurance" class="form-control" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد بیمه</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="InsuranceCode" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام سازمان</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="NameOfOrganization" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">درصد بیمه</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="InsurancePercentage" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">نوع بیمه</label>
                                    <br/>
                                    <select name="KindOfInsurance" class="form-control">
                                        <option value="تکمیلی">تکمیلی</option>
                                        <option value="درمانی">درمانی</option>
                                    </select>
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
                            html: "مشخصات بیمه جدید ثبت شد",
                            confirmButtonText: "تاييد",
                            type: 'success',
                        });


                    </script>




                    @endif
                <div class="portlet light bordered">
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="sample_1">
                            <thead>
                            <tr>
                                <th> نام بیمه</th>
                                <th> کد بیمه</th>
                                <th> نام سازمان</th>
                                <th> درصد بیمه</th>
                                <th> نوع بیمه</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
@foreach($insurance as $insuranc)
                            <tbody>
                            <tr class="odd gradeX">
                                <td>{{$insuranc->NameOfInsurance}}</td>
                                <td>{{$insuranc->InsuranceCode}}</td>
                                <td>{{$insuranc->NameOfOrganization}}</td>
                                <td>{{$insuranc->InsurancePercentage}}%</td>
                                <td>{{$insuranc->KindOfInsurance}}</td>
                                <td><a href="#"><img src="/icon/edit (1).png"
                                                                                      title="ویرایش"></a>
                            </tr>

                            </tbody>
@endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection