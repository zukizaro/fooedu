
<div class="panel panel-info">
    <!--TITLE SAMPLE CATEGORY SEARCH-->
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('sample::sample_admin.page_search') ?></h3>
    </div>
    <!--/END TITLE SAMPLE CATEGORY SEARCH-->
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_sample_category','method' => 'get']) !!}

        <!--SAMPLE CATEGORY SEARCH NAME-->
        <div class="form-group">
            {!! Form::label('sample_category_name',trans('sample::sample_admin.sample_category_name_label')) !!}
            {!! Form::text('sample_category_name', @$params['sample_category_name'], ['class' => 'form-control', 'placeholder' => trans('sample::sample_admin.sample_category_name')]) !!}
        </div>
        <!--/SAMPLE CATEGORY SEARCH NAME-->
        {!! Form::submit(trans('sample::sample_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>




