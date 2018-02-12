@if (Auth::user()->can('create', 'App\Models\Attribute'))
    <p class="text-right">
        <a href="{{ route('entities.attributes.create', ['entity' => $model->entity]) }}" class="btn btn-primary">
            {{ trans('crud.attributes.actions.add') }}
        </a>
    </p>
@endif

<table id="attributes" class="table table-hover">
    <tbody><tr>
        <th>{{ trans('crud.attributes.fields.attribute') }}</th>
        <th>{{ trans('crud.attributes.fields.value') }}</th>
        @if (!Auth::user()->viewer())
            <th>{{ trans('crud.fields.is_private') }}</th>
        @endif
        <th>&nbsp;</th>
    </tr>
    @foreach ($r = $model->entity->attributes()->orderBy('name', 'ASC')->paginate() as $attribute)
        <tr>
            <td>{{ $attribute->name }}</td>
            <td>{{ $attribute->value }}</td>
            @if (!Auth::user()->viewer())
                <td>
                    @if ($attribute->is_private == true)
                        <i class="fa fa-lock" title="{{ trans('crud.is_private') }}"></i>
                    @endif
                </td>
            @endif
            <td class="text-right">
                @if (Auth::user()->can('update', $attribute))
                    <a href="{{ route('entities.attributes.edit', ['entity' => $model->entity, 'attribute' => $attribute]) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> {{ trans('crud.edit') }}</a>
                @endif
                @if (Auth::user()->can('delete', $attribute))
                {!! Form::open(['method' => 'DELETE','route' => ['entities.attributes.destroy', 'entity' => $model->entity, 'attribute' => $attribute],'style'=>'display:inline']) !!}                <button class="btn btn-xs btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i> {{ trans('crud.remove') }}
                </button>
                {!! Form::close() !!}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody></table>

{{ $r->appends('tab', 'attribute')->links() }}