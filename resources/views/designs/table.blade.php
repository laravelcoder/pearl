<table class="table table-responsive" id="designs-table">
    <thead>
        <th>Id</th>
        <th>Image</th>
        <th colspan="2">Name</th>
        <th>Price</th>
        <th>Action</th>
         <th>Published</th>
    </thead>
    <tbody>
    @foreach($designs as $design)
        <tr>
            <td class="media-middle">{!! $design->id !!}</td>

            <td class="media-left" width="150px">
                @if($design->image)
                <img src="{!! url('assets\images\designs\thumb') !!}/{!! $design->image[0] !!}" />
                @else
                <img src="http://via.placeholder.com/150x150" />
                @endif
            </td>
            <td class="media-middle" colspan="2" width="250px"><a href="{!! route('designs.edit', [$design->id]) !!}" class=''>{!! $design->name !!}</a></td>
            <td class="media-middle">{!! $design->price !!}</td>


            <td class="media-middle">
                {!! Form::open(['route' => ['designs.destroy', $design->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a target="_blank" href="{!! route('design', [$design->id]) !!}" class='btn btn-default btn-xs'>
                    <i class="fa fa-lg fa-eye"></i></a>
                    <a href="{!! route('designs.edit', [$design->id]) !!}" class='btn btn-default btn-xs'>
                    <i class="fa fa-pencil fa-lg"></i></a>
                    {!! Form::button('<i class="fa fa-trash-o  fa-lg "></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            {{-- <td>{!! $design->published !!}</td> --}}
            <td class="  media-middle">
                {{-- <a href="#" id="{!! $design->id !!}" class="publish"> --}}
                    {!! ($design->published) ? '<i class="fa fa-check-circle-o fa-lg text-success" style="color:green"></i>' : '<i class="fa fa-times-circle fa-lg text-danger" style="color:red"></i>'  !!}
                {{-- </a> --}}
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
