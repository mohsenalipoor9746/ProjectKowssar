@extends('layouts.admin')
@section('form')
    <br/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                ثبت مشخصات سرویس جدید
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action="/AddService" method="POST" class="mt-repeater form-horizontal">
                        {{csrf_field()}}

                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام سرویس</label>
                                    <br/>
                                    <input type="text" name="NameService" class="form-control" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">نام کوتاه</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="ShortName" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد بین المللی</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="InternationalCode" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">کد در سازمان</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="CodeInTheOrganization" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">قیمت</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="text" name="Price" required/>
                                </div>
                            </div>
                        </div>
                        <input type="submit" data-repeater-create class="btn btn-success mt-repeater-add" value="ثبت"/>
                    </form>
                </div>
                @if(session()->has('alert'))
                    <script>
                        swal({
                            html: "مشخصات سرویس جدید ثبت شد",
                            confirmButtonText: "تاييد",
                            type: 'success',
                        });


                    </script>




                @endif

                <div class="portlet light bordered">
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th> نام سرویس</th>
                                <th>نام کوتاه </th>
                                <th> کد بین المللی </th>
                                <th>کد در موسسه </th>
                                <th> قیمت </th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            @foreach($Service as $Servic)
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>{{ $Servic->NameService}}</td>
                                    <td>{{ $Servic->ShortName}}</td>
                                    <td>{{ $Servic->InternationalCode}}</td>
                                    <td>{{ $Servic->CodeInTheOrganization}}</td>
                                    <td>{{number_format($Servic->Price) }}  تومان</td>
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