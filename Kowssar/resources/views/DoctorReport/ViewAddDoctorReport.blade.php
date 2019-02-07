@extends('layouts.admin')
@section('form')
    <br/>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                ثبت نظر ریپورت در مورد بیمار
            </div>

        </div>
        <div class="portlet-body form">
            <div class="form-body">
                <div class="form-group">
                    <form action="/AddReport/{{$patient->id}}" method="post" class="mt-repeater form-horizontal" enctype="multipart/form-data">
                      {{csrf_field()}}
                        {{method_field('PATCH')}}
                       <div data-repeater-list="group-a">

                            <div data-repeater-item class="mt-repeater-item">
                                <!-- jQuery Repeater Container -->
                                <div class="mt-repeater-input">
                                    <label class="control-label">فایل پکس</label>
                                    <br/>
                                    <input type="file" name="PaksFile" class="form-control" required/>
                                </div>
                                <div class="mt-repeater-input">
                                    <label class="control-label">فایل نسخه</label>
                                    <br/>
                                    <input class="input-group form-control form-control-inline date date-picker"
                                           size="16" type="file" name="VersionFile" required/>
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