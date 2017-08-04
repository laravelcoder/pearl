<table class="table table-responsive" id="designs-table">
    <thead>
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th colspan="3">Action</th>
         <th>Published</th>
    </thead>
    <tbody>
    @foreach($designs as $design)
        <tr>
            <td class="media-middle">{!! $design->id !!}</td>

            <td class="media-left">
            @if($design->image)
            
            <img src="{!! url('assets\images\designs\thumb') !!}/{!! unserialize($design->image)[0] !!}" />
           
            @else
            <img src="http://via.placeholder.com/150x150" />
            @endif
            </td>
            <td class="media-middle">{!! $design->name !!}</td>
            <td class="media-middle">{!! $design->price !!}</td>


            <td class="media-middle">
                {!! Form::open(['route' => ['designs.destroy', $design->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('designs.show', [$design->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('designs.edit', [$design->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        <td>{!! $design->published !!}</td>
    @endforeach
    </tbody>
</table>
