<!-- Name Field -->
<div class="form-group col-sm-10">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Price Field -->
<div class="form-group col-sm-4">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<!-- Availability Field -->
<div class="form-group col-sm-4">
    {!! Form::label('availability', 'Availability:') !!}
    {!! Form::select('availability', ['Available' => 'Available', 'OnBackorder' => 'OnBackorder', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-4">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    <small>always add a slug or url will not work</small>
</div>

<div class="form-group col-sm-10">
    <input id="image" type="file" name="image[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
</div>


<!-- Short Details Field -->
<div class="form-group col-sm-8">
    {!! Form::label('short_details', 'Short Details:') !!}
    {!! Form::textarea('short_details', null, ['class' => 'form-control', 'row' => '3']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control summernote']) !!}
</div>



{{--

<div class="form-group col-sm-6">
</div> --}}

<!-- Button Code Field -->
<div class="form-group col-sm-4">
    {!! Form::label('button_code', 'Pay Pal Button Code:') !!}
    {!! Form::textarea('button_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('designs.index') !!}" class="btn btn-default">Cancel</a>
</div>
