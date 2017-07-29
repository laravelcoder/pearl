<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-4">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('image', 'Image:') !!}--}}
    {{--{!! Form::file('image') !!}--}}
{{--</div>--}}
<div class="clearfix"></div>


<hr>
<div class="row">
    <div class=" col-sm-12">
        @if(!empty($design->image))
            <h3>Current Image</h3>
            <span class="fileupload-preview"> <img itemprop="image" src="{!! url('assets/images/designs/hp/'.$design->image) !!}" class="img-responsive" alt="Image"> </span>
        @endif
        <div class="form-group">
            <div class="col-md-8">
                {!! Form::label('image', 'Image') !!}
                {!! Form::file('image',['class' => 'mulit file input-preview']) !!}
                {{--<input id="image" name="image" type="file" class="mulit file input-preview">--}}
            </div>
        </div>
    </div>
</div>

    <div class="col-md-6">

        <button id="add_album_image" class="btn btn-danger" type="button"><i class="fa fa-plus"></i> Add Photo</button>

    </div>

{{--<br style="clear:both" />--}}


<div class="clearfix"></div>
<hr>
<!-- Short Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('short_details', 'Short Details:') !!}
    {!! Form::text('short_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Availability Field -->
<div class="form-group col-sm-6">
    {!! Form::label('availability', 'Availability:') !!}
    {!! Form::select('availability', ['Available' => 'Available', 'OnBackorder' => 'OnBackorder', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('designs.index') !!}" class="btn btn-default">Cancel</a>
</div>
