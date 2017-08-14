
<!-- Name Field -->
<div class="form-group col-sm-10">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

    <div class="form-group col-sm-2 checkbox">
        {{-- {!! Form::label('is_published', 'Published:') !!} --}}
        <label class="checkbox-inline">
           {!! Form::checkbox('is_published', '1', true, ['data-toggle' => 'toggle','data-on'=>'Published   ', 'data-off'=>'  Un-Published', 'data-onstyle'=>'success', 'data-offstyle'=>'danger', 'data-width'=> '150']) !!}
       </label>
    </div>

<!-- Price Field -->
<div class="form-group col-sm-3">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<!-- Availability Field -->
<div class="form-group col-sm-3">
    {!! Form::label('availability', 'Availability:') !!}
    {!! Form::select('availability', ['Available' => 'Available', 'OnBackorder' => 'OnBackorder', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    <small>always add a slug or url will not work</small>
</div>


    <div class="form-group col-sm-3">
        {!! Form::label('order_id', 'Order ID') !!}
        {!! Form::text('order_id', null, ['class' => 'form-control']) !!}
        <small>This is the id you need for ordering </small>
    </div>


<div class="form-group col-sm-10" id="imagedragoverdrop">
    <input id="image" type="file" name="image[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="1" data-src='{!!@$image!!}' data-config='{!!@$image_config!!}' data-upload="{!! url('admin/designs/uploadimage?_token=' . csrf_token()) !!}" >
    <small>For images to look right it needs to be larger then 1024x1024 and the main image should start with 1- </small>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('img', 'Sort Order') !!} ' 0<sup>th</sup> is the main image'<br>
@if(@$design->image)
@foreach(@$design->image as $key=>$img)
<div class="form-group col-sm-2">
    <img src="{!! url('assets/images/designs/thumb/'.$img) !!}" width="100px" style="padding: 10px">        
        {!! Form::text("sort_id[$img]", $key, ['class' => 'form-control input-sm']) !!}
    </div>
@endforeach
@endif
</div>
<!-- Short Details Field -->
<div class="form-group col-sm-8">
    {!! Form::label('short_details', 'Short Details:') !!}
    {!! Form::textarea('short_details', null, ['class' => 'form-control', 'row' => '3']) !!}
    <small>This is the part that is used in meta tags and small about section throughout the site. Do not use more then 105 charicters here. </small>
</div>

<!-- Details Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control summernote']) !!}
    <small>This is where you want to write a min of 300 words this is the main part about the product that google targets. This is the part that will brign you the traffic.</small>
</div>



{{--

<div class="form-group col-sm-6">
</div> --}}

<!-- Button Code Field -->
{{-- <div class="form-group col-sm-4">
    {!! Form::label('button_code', 'Pay Pal Button Code:') !!}
    {!! Form::textarea('button_code', null, ['class' => 'form-control']) !!}
</div> --}}
<hr />

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('designs.index') !!}" class="btn btn-default">Cancel</a>
</div>
