<!-- SAMPLE CATEGORY NAME -->
<div class="form-group"> 
    
    <?php $sample_category_name = $request->get('sample_category_name') ? $request->get('sample_category_name') : @$sample_category->sample_category_name ?>

    {!! Form::label('sample_category_name', trans('sample::sample_admin.name').':') !!}

    {!! Form::text('sample_category_name', $sample_category_name, ['class' => 'form-control', 'placeholder' => trans('sample::sample_admin.name').'']) !!}
     
</div>
<!-- /SAMPLE CATEGORY NAME -->