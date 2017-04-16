<!--SAMPLE INPUT IMAGE-->

<div class="input-group">
    <span class="input-group-btn">
        <label for="file">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-upload"></i> {{ trans('import::import_admin.import_choose') }}
            </a>
        </label>
    </span>
    
    <input type="text" class="for-file form-control"/>
    <input id="file" class="form-control" type="file"
           onchange="uploadFile(this)"
           accept=".csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
           name="import_file" value="{{$value}}">
</div>

<!--END SAMPLE INPUT IMAGE-->


<style>
    #file{
        display: none;
    }
</style>



