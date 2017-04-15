<!-- SAMPLE OVERVIEW -->
<div class="form-group">
    {!! Form::label('sample_overview', trans('sample::sample_admin.sample_overview').':') !!}
    {!! Form::textarea ('sample_overview', @$sample->sample_overview, ['class' => 'form-control tinymce my-editor', 'rows' => 5, 'placeholder' => trans('tasks.task_overview')]) !!}

</div> 
<!--/END SAMPLE OVERVIEW-->

<!-- SAMPLE DESCRIPTION -->
<div class="form-group">
    {!! Form::label('sample_description', trans('sample::sample_admin.sample_description').':') !!}
    {!! Form::textarea ('sample_description', @$sample->sample_description, ['class' => 'form-control tinymce my-editor', 'rows' => 20, 'placeholder' => trans('tasks.task_description')]) !!}
</div>
<!--/END SAMPLE DESCRIPTION-->