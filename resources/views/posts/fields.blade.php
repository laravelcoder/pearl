<!-- Is Published Field -->
<div class="col-sm-1">

</div>

<div class="form-group col-sm-2 checkbox">
    {{-- {!! Form::label('is_published', 'Published:') !!} --}}
    <label class="checkbox-inline">
       {!! Form::checkbox('is_published', '1', true, ['data-toggle' => 'toggle','data-on'=>'Published   ', 'data-off'=>'  Un-Published', 'data-onstyle'=>'success', 'data-offstyle'=>'danger', 'data-width'=> '150']) !!}
   </label>
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('category_id', 'Category:') !!}
    {{--{!! Form::select('category_id', $categories, ['class' => 'form-control']) !!}--}}
    {!! Form::select('category', $categories, null, ['class' => 'form-control']) !!}
    {{-- {!! Form::select('category', (['0' => 'Select a Category'] + $categories), null, ['class' => 'form-control']) !!}  --}}

</div>

<!-- User Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('user_id', 'Author:') !!}
    {!! Form::select('user_id', $users, ['class' => 'form-control']) !!}

</div>

<!-- Title Field -->
<div class="form-group col-sm-10">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control']) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-8">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-10">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner[]', ['id' => 'banner', 'class' => 'form-control file', 'data-overwrite-initial' => 'false','multiple']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control summernote']) !!}
</div>

<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Fb Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fb_title', 'Fb Title:') !!}
    {!! Form::text('fb_title', null, ['id' => 'fb_title', 'class' => 'form-control']) !!}
</div>

<!-- Gp Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gp_title', 'Gp Title:') !!}
    {!! Form::text('gp_title', null, ['id' => 'gp_title', 'class' => 'form-control']) !!}
</div>

<!-- Tw Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tw_title', 'Tw Title:') !!}
    {!! Form::text('tw_title', null, ['id' => 'tw_title', 'class' => 'form-control']) !!}
</div>

<!-- Meta Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image[]', ['id' => 'image', 'class' => 'form-control file', 'data-overwrite-initial' => 'false','multiple']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
<div class="form-group col-sm-3">
    {!! Form::label('view_count', 'View Count:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
</div>


<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
