@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('import::import_admin.page_edit') }}
@stop
@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <!--SAMPLE TITLE-->
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($import_category->import_category_id) ? '<i class="fa fa-pencil"></i>'.trans('import::import_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('import::import_admin.form_add') !!}
                    </h3>
                </div>
                <!--/END SAMPLE TITLE-->

                <!-- ERRORS NAME  -->
                {{-- model general errors from the form --}}
                @if($errors->has('import_category_name') )
                    <div class="alert alert-danger">{!! $errors->first('import_category_name') !!}</div>
                @endif
                <!-- /END ERROR NAME -->

                <!-- LENGTH NAME  -->
                @if($errors->has('name_unvalid_length') )
                    <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif
                <!-- /END LENGTH NAME -->

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <!-- SAMPLE CATEGORIES ID -->
                            <h4>{!! trans('import::import_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_import_category.post', 'id' => @$import_category->import_category_id],  'files'=>true, 'method' => 'post'])  !!}

                            <!--END SAMPLE CATEGORIES ID  -->

                            <!-- SAMPLE NAME TEXT-->
                            @include('import::import_category.elements.text', ['name' => 'import_category_name'])
                            <!-- /END SAMPLE NAME TEXT -->

                            {!! Form::hidden('id',@$import_category->import_category_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_import_category.delete',['id' => @$import_category->import_category_id, '_token' => csrf_token()]) !!}"
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

        <!--SAMLE SEARCH-->
        <div class='col-md-4'>
            @include('import::import.admin.import_search')
        </div>
        <!--/END SAMPLE SEARCH-->
    </div>
</div>
@stop
