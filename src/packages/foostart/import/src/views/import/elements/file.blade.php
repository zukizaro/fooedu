<!--SAMPLE INPUT FILE-->

<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> {{ trans('import::import_admin.import_file_choose') }}
        </a>
    </span>
    
    <?php $import_name = $request->get('import_file') ? $request->get('import_file') : @$import->import_name ?>
    <input id="thumbnail" class="form-control" type="text" name="import_file" value="{{$import_name}}">
</div>
 

<!--END SAMPLE INPUT FILE-->
