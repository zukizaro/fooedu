<!--SAMPLE INPUT IMAGE-->

<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> {{ trans('import::import_admin.import_image_choose') }}
        </a>
    </span>
    
    <?php $import_image = $request->get('import_image') ? $request->get('import_image') : @$import->import_image ?>
    <input id="thumbnail" class="form-control" type="text" name="import_image" value="{{$import_image}}">
</div>

<?php $import_image = !empty($import_image)?$import_image:'no-image.png' ?>
<img id="holder" style="margin-top:15px;max-height:100px;" src='{{ URL::to('/photos/thumbs/'.$import_image) }}'>

<!--END SAMPLE INPUT IMAGE-->
