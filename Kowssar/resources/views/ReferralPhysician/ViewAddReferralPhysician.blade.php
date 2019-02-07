@extends('layouts.admin')
@section('form')
    <br/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                ثبت نظر نظر نهایی در مورد بیمار
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action="/AddReferralPhysician/{{$patient->id}}" method="post" class="mt-repeater form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">فایل نهایی</label>
                                    <br/>
                                    <input type="file" name="FileFinal" class="form-control" required/>
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
@endsection