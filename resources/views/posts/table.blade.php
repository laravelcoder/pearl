<table class="table table-responsive" id="posts-table">
    <thead>
        <th>Is Published</th>
        <th>Category Id</th>
        <th>User Id</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Content</th>
        <th>Notes</th>
        <th>Slug</th>
        <th>Meta Title</th>
        <th>Fb Title</th>
        <th>Gp Title</th>
        <th>Tw Title</th>
        <th>Meta Keywords</th>
        <th>Meta Description</th>
        <th>Image</th>
        <th>Banner</th>
        <th>View Count</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{!! $post->is_published !!}</td>
            <td>{!! $post->category_id !!}</td>
            <td>{!! $post->user_id !!}</td>
            <td>{!! $post->title !!}</td>
            <td>{!! $post->subtitle !!}</td>
            <td>{!! $post->content !!}</td>
            <td>{!! $post->notes !!}</td>
            <td>{!! $post->slug !!}</td>
            <td>{!! $post->meta_title !!}</td>
            <td>{!! $post->fb_title !!}</td>
            <td>{!! $post->gp_title !!}</td>
            <td>{!! $post->tw_title !!}</td>
            <td>{!! $post->meta_keywords !!}</td>
            <td>{!! $post->meta_description !!}</td>
            <td>{!! $post->image !!}</td>
            <td>{!! $post->banner !!}</td>
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
        </tr>
    @endforeach
    </tbody>
</table>