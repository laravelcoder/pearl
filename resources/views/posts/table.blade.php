<table class="table table-responsive" id="posts-table">
    <thead>
        <th>Image</th>
        {{-- <th>User</th> --}}
        <th>Title</th>
        <th>Category</th>
        {{-- <th>Slug</th> --}}

        <th>View Count</th>
        <th colspan="3">Action</th>
        <th>Is Published</th>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>

            <td>{!! $post->image !!}</td>
            {{-- <td>{!! $post->user_id !!}</td> --}}
            <td>
                <a href="{!! route('posts.edit', [$post->id]) !!}" class=''>
                    {!! $post->title !!}
                </a>
            </td>
            <td>{!! $post->category_id !!}</td>
            {{-- <td>{!! $post->slug !!}</td> --}}

            <td>{!! $post->view_count !!}</td>
            <td>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            <td>{!! $post->is_published !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
