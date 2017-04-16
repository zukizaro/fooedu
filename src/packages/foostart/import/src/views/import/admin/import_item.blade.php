
@if( ! $imports->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('import::import_admin.order') }}</td>
            <th style='width:10%'>Import ID</th>
            <th style='width:50%'>Import title</th>
            <th style='width:20%'>{{ trans('import::import_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $imports->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($imports as $import)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $import->import_id !!}</td>
            <td>{!! $import->import_name !!}</td>
            <td>
{{--                <a href="{!! URL::route('admin_import.edit', ['id' => $import->import_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>--}}
                <a href="{!! URL::route('admin_import.delete',['id' =>  $import->import_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">
	<h5>
            {{ trans('import::import_admin.message_find_failed') }}
	</h5>
 </span>
@endif
<div class="paginator">
    {!! $imports->appends($request->except(['page']) )->render() !!}
</div>
