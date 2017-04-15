
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('import::import_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_import','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            
            {!! Form::label('import_name', trans('import::import_admin.import_name_label')) !!}
            {!! 
                Form::text('import_name', @$params['import_name'], 
                    ['class' => 'form-control', 'placeholder' => trans('import::import_admin.import_name_placeholder')])
            !!}
                    
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('import::import_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>


