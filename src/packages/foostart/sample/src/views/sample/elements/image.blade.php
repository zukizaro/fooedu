<!--SAMPLE INPUT IMAGE-->

<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> {{ trans('sample::sample_admin.sample_image_choose') }}
        </a>
    </span>
    
    <?php $sample_image = $request->get('sample_image') ? $request->get('sample_image') : @$sample->sample_image ?>
    <input id="thumbnail" class="form-control" type="text" name="sample_image" value="{{$sample_image}}">
</div>

<?php $sample_image = !empty($sample_image)?$sample_image:'no-image.png' ?>
<img id="holder" style="margin-top:15px;max-height:100px;" src='{{ URL::to('/photos/thumbs/'.$sample_image) }}'>

<!--END SAMPLE INPUT IMAGE-->
