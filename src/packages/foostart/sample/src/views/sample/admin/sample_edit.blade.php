@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('sample::sample_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($sample->sample_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::sample_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::sample_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('sample_name') )
                    <div class="alert alert-danger">{!! $errors->first('sample_name') !!}</div>
                @endif

                @if($errors->has('name_unvalid_length') )
                    <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <!--SAMPLE TITLE FORM EDIT-->
                            <h4>{!! trans('sample::sample_admin.form_heading') !!}</h4>
                            <!--END SAMPLE TITLE FORM EDIT-->

                            {!! Form::open(['route'=>['admin_sample.post', 'id' => @$sample->sample_id],  'files'=>true, 'method' => 'post'])  !!}

                            <!--QUICK TABS-->
                            <ul class="nav nav-tabs">

                                <!--TAB HOME-->
                                <li class="active">
                                    <a data-toggle="tab" href="#home">
                                        {!! trans('sample::sample_admin.tab_overview') !!}
                                    </a>
                                </li>
                                <!--/END TAB HOME-->

                                <!--TAB ATTRIBUTES-->
                                <li>
                                    <a data-toggle="tab" href="#attributes">
                                        {!! trans('sample::sample_admin.tab_attributes') !!}
                                    </a>
                                </li>
                                <!--/END TAB ATTRIBUTES-->

                                <!--TAB IMAGE-->
                                <li>
                                    <a data-toggle="tab" href="#image">
                                        {!! trans('sample::sample_admin.tab_image') !!}
                                    </a>
                                </li>
                                <!--/END TAB IMAGE-->


                            </ul>
                            <!--/END QUICK TABS-->


                            <div class="tab-content">

                                <!--TAB OVERVIEW-->
                                <div id="home" class="tab-pane fade in active">
                                    <!--INPUT-->
                                    @include('sample::sample.elements.input', ['name' => 'sample_name'])
                                    <!--/END INPUT-->

                                     <!--TEXT-->
                                    @include('sample::sample.elements.text', ['name' => 'sample_name'])
                                    <!--/END TEXT-->
                                </div>
                                <!--/END TAB OVERVIEW-->

                                <!--TAB ATTRIBUTES-->
                                <div id="attributes" class="tab-pane fade">
                                    <!--SELECT-->
                                    @include('sample::sample.elements.select')
                                    <!--/END SELECT-->
                                </div>
                                <!--TAB ATTRIBUTES-->

                                <!--TAB IMAGE-->
                                <div id="image" class="tab-pane fade">
                                    <!--IMAGE-->
                                    @include('sample::sample.elements.image', ['name' => 'sample_image'])
                                    <!--/END IMAGE-->
                                </div>
                                <!--TAB IMAGE-->

                            </div>

                            {!! Form::hidden('id',@$sample->sample_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_sample.delete',['id' => @$sample->sample_id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- DELETE BUTTON -->

                            <!-- SAVE BUTTON -->
                            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                            <!-- /SAVE BUTTON -->

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_scripts_more')

{!! HTML::script('vendor/laravel-filemanager/js/tinymce.min.js') !!}
{!! HTML::script('vendor/laravel-filemanager/js/tinymce-configs.js') !!}
{!! HTML::script('vendor/laravel-filemanager/js/lfm_sample.js') !!}

<script type='text/javascript'>
    $(document).ready(function () {
        $('#lfm').filemanager('image');
    });
</script>
@stop