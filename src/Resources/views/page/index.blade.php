@extends('metrique-building::main')

@section('content')
    @include('metrique-building::partial.header', [
        'heading'=>'Pages',
        'link'=>route($routes['create']),
        'title'=>'New page.',
        'icon'=>'fa-plus'
    ])

    <div class="row">
        <div class="col-sm-12">
            @if(count($data) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Published</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>
                                    <a href="{{ route($routes['edit'], $value->id) }}">{{ $value->title }}</a>
                                </td>

                                <td>{{ $value->slug }}</td>

                                <td>
                                    <i class="fa fa-lg fa-{{ $value->published ? 'check' : 'times' }}"></i>
                                </td>

                                <td class="text-right">
                                    <a href="{{ route($routes['section.index'], $value->id) }}" class="btn btn-default">
                                        <i class="fa fa-pencil"></i> Edit sections
                                    </a>
                                </td>

                                <td class="text-right">
                                    <form method="POST" action="{{ route($routes['destroy'], $value->id) }}">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" data-role="destroy"><i class="fa fa-trash-o"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No pages exist.</p>
            @endif

        </div>
    </div>
@endsection
