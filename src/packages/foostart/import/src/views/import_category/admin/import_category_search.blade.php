
<div class="panel panel-info">
    <!--TITLE SAMPLE CATEGORY SEARCH-->
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('import::import_admin.page_search') ?></h3>
    </div>
    <!--/END TITLE SAMPLE CATEGORY SEARCH-->
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_import_category','method' => 'get']) !!}

        <!--SAMPLE CATEGORY SEARCH NAME-->
        <div class="form-group">
            {!! Form::label('import_category_name',trans('import::import_admin.import_category_name_label')) !!}
            {!! Form::text('import_category_name', @$params['import_category_name'], ['class' => 'form-control', 'placeholder' => trans('import::import_admin.import_category_name')]) !!}
        </div>
        <!--/SAMPLE CATEGORY SEARCH NAME-->
        {!! Form::submit(trans('import::import_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>




