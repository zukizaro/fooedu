<!-- SAMPLE INPUT NAME -->
<div class="form-group">
    <?php $import_name = $request->get('import_name') ? $request->get('import_name') : @$import->import_name ?>
    {!! Form::label($name, trans('import::import_admin.name').':') !!}
    {!! Form::text($name, $import_name, ['class' => 'form-control', 'placeholder' => trans('import::import_admin.name').'']) !!}
</div>
<!-- /END SAMPLE INPUT NAME -->
