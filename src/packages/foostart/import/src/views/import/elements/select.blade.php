<!-- SAMPLE CATEGORY LIST -->
<div class="form-group">
    <?php $category_id = $request->get('category_id') ? $request->get('category_id') : @$import->category_id ?>

    {!! Form::label('category_id', trans('import::import_admin.import_categoty_name').':') !!}

    {!! Form::select('category_id', @$categories, $category_id, ['class' => 'form-control']) !!}
</div>
<!-- /END SAMPLE CATEGORY LIST -->


<!-- SLIDESHOW LIST -->
<div class="form-group">
    <?php $slideshow_id = $request->get('slideshow_id') ? $request->get('slideshow_id') : @$import->slideshow_id ?>

    {!! Form::label('slideshow_id', trans('import::import_admin.slideshow_name').':') !!}

    {!! Form::select('slideshow_id', @$slideshows, @$slideshow_id, ['class' => 'form-control']) !!}
</div>
<!-- /END SLIDESHOW LIST -->
