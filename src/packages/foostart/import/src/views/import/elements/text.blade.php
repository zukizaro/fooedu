<!-- SAMPLE OVERVIEW -->
<div class="form-group">
    {!! Form::label('import_overview', trans('import::import_admin.import_overview').':') !!}
    {!! Form::textarea ('import_overview', @$import->import_overview, ['class' => 'form-control tinymce my-editor', 'rows' => 5, 'placeholder' => trans('import::import_admin.import_overview')]) !!}

</div> 
<!--/END SAMPLE OVERVIEW-->

<!-- SAMPLE DESCRIPTION -->
<div class="form-group">
    {!! Form::label('import_description', trans('import::import_admin.import_description').':') !!}
    {!! Form::textarea ('import_description', @$import->import_description, ['class' => 'form-control tinymce my-editor', 'rows' => 20, 'placeholder' => trans('import::import_admin.import_description')]) !!}
</div>
<!--/END SAMPLE DESCRIPTION-->
