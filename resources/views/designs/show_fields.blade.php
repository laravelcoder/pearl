<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $design->id !!}</p>
</div>

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Published:') !!}
    <p>{!! $design->published !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $design->name !!}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{!! $design->slug !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>
    @foreach($design->image as $img)
    <img src="{!! url('assets/images/designs/thumb/'.$img) !!}" width="100px"/>
    @endforeach
    </p>
</div>

<!-- Short Details Field -->
<div class="form-group">
    {!! Form::label('short_details', 'Short Details:') !!}
    <p>{!! $design->short_details !!}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $design->details !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $design->price !!}</p>
</div>

<!-- Availability Field -->
<div class="form-group">
    {!! Form::label('availability', 'Availability:') !!}
    <p>{!! $design->availability !!}</p>
</div>

<!-- Button Code Field -->
<div class="form-group">
    {!! Form::label('button_code', 'Button Code:') !!}
    <p>{!! $design->button_code !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $design->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $design->updated_at !!}</p>
</div>

