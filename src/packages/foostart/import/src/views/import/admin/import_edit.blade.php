@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    Admin area: {{ trans('import::import_admin.page_edit') }}
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin">
                            {!! !empty($import->import_id) ? '<i class="fa fa-pencil"></i>'.trans('import::import_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('import::import_admin.form_add') !!}
                        </h3>
                    </div>

                    {{-- model general errors from the form --}}
                    @if($errors->has('import_name') )
                        <div class="alert alert-danger">{!! $errors->first('import_name') !!}</div>
                    @endif
                    @if($errors->has('import_file') )
                        <div class="alert alert-danger">{!! $errors->first('import_file') !!}</div>
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
                                <h4>{!! trans('import::import_admin.form_heading') !!}</h4>
                                <!--END SAMPLE TITLE FORM EDIT-->

                            {!! Form::open(['route'=>['admin_import.post', 'id' => @$import->import_id],  'files'=>true, 'method' => 'post'])  !!}

                            <!--QUICK TABS-->
                                <ul class="nav nav-tabs">

                                    <!--TAB HOME-->
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            {!! trans('import::import_admin.tab_overview') !!}
                                        </a>
                                    </li>
                                    <!--/END TAB HOME-->

                                    

                                </ul>
                                <!--/END QUICK TABS-->


                                <div class="tab-content">
 

                                    <!--TAB ATTRIBUTE-->
                                    <div id="home" class="tab-pane fade in active">

                                        <!--CHOOOSE-->
                                        <?php $value = $request->get('import_file') ? $request->get('import_file') : @$import->import_file ?>
                                        @include('import::import.elements.file', ['name' => 'import_file','value' => $value])
                                        <!--/END CHOOOSE-->

                                        <!--INPUT-->
                                        <?php $value = $request->get('import_header') ? $request->get('import_header') : '' ?>
                                        @include('import::import.elements.input', ['name' => 'import_header'])
                                        <!--/END INPUT-->
                                        
                                        <!--INPUT-->
                                        <?php $value = $request->get('import_sheet') ? $request->get('import_sheet') : ''?>
                                        @include('import::import.elements.input', ['name' => 'import_sheet'])
                                        <!--/END INPUT-->

                                        <!--INPUT-->
                                        <?php $value = $request->get('import_columns') ? $request->get('import_columns') : ''?>
                                        @include('import::import.elements.input', ['name' => 'import_columns'])
                                        <!--/END INPUT-->

                                        
                                    </div>
                                    <!--/END TAB ATTRIBUTE-->

                                </div>

                            {!! Form::hidden('id',@$import->import_id) !!}

                            <!-- DELETE BUTTON -->
                                <a href="{!! URL::route('admin_import.delete',['id' => @$import->import_id, '_token' => csrf_token()]) !!}"
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

@section('footer_scripts')
    <script>
        function uploadFile(target){
            $('.for-file').val(target.files[0].name);
        }
    </script>
@stop

