<!-- SAMPLE CATEGORY NAME -->
<div class="form-group"> 
    
    <?php $import_category_name = $request->get('import_category_name') ? $request->get('import_category_name') : @$import_category->import_category_name ?>

    {!! Form::label('import_category_name', trans('import::import_admin.name').':') !!}

    {!! Form::text('import_category_name', $import_category_name, ['class' => 'form-control', 'placeholder' => trans('import::import_admin.name').'']) !!}
     
</div>
<!-- /SAMPLE CATEGORY NAME -->
