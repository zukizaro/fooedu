<!-- SAMPLE INPUT NAME -->
<div class="form-group">
    {!! Form::label($name, trans('import::import_admin.'.$name).':') !!}
    {!! Form::text($name, $value, ['class' => 'form-control', 'placeholder' => trans('import::import_admin.name').'']) !!}
</div>
<!-- /END SAMPLE INPUT NAME -->
