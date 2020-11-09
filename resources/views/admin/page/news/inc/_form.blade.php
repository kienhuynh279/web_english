<div class="form-group">
  <x-input-form type="text" label="Tiêu đề" name="Title" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->title ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Tiêu đề English:" name="Title_en" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->title_en ?? ''" />
</div>

{{-- <div class="form-group">
  <x-input-form type="text" label="Tiêu đề English:" name="Status" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->status ?? ''" />
</div> --}}

<div class="form-group">
  <label for="example-select">Chọn loại tin tức</label>
    <select class="form-control" id="example-select" name="Cate_Id">
       @foreach ($cate as $cate)
        <option value="{{ $cate->id_blog_cat }}"> {{ $cate->title }}</option>
      @endforeach
    </select>
</div>

<div class="form-group">
  <label>Ảnh Đại Diện :</label>
  <input required id="img" type="file" name="Avatar" class="form-control hidden" onchange="changeImg(this)">
  <img id="avatar" class="thumbnail" width="200px" src="{{ asset('/dist/img/imgdefault.png') }}">
</div>

{{-- <div class="form-group">
  <label for="">Ảnh đại diện</label>
    <div class="input-group">
      <input type="text" class="form-control @error("Image") is-invalid @enderror" id="Image" name="Avatar"
        placeholder="Hình ảnh" value="{{!old("avatar") ? $blog->avtar ?? false ? $blog->Image : old("avatar") : old("avatar") }}">
      <div class="input-group-append">
      <button type="button" class="btn btn-dark" onclick="selectFileCKFinder('Image')">Chọn ảnh</button>
    </div>
  </div>
</div> --}}


<div class="form-group">
  <x-input-form type="text" label="Mô tả ngắn" name="Summary" classGroup="col-md" class="" placeholder="Mô tả ngắn"
    :value="$blog->summary ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Mô tả ngắn English:" name="Summary_en" classGroup="col-md" class="" placeholder="Mô tả ngắn"
    :value="$blog->summary_en ?? ''" />
</div>

<div class="form-group">
  <x-input-form type="text" label="Nội dung" name="Content" classGroup="col-md" class="" placeholder="Nội dung"
    :value="$blog->content ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Nội dung" name="Content_en" classGroup="col-md" class="" placeholder="Nội dung"
    :value="$blog->content_en ?? ''" />
</div>

<div class="form-group">
  <x-input-form type="text" label="Description Meta:" name="Meta_Desc" classGroup="col-md" class="" placeholder="Checked"
    :value="$blog->meta_description ?? ''" />
</div>

<div class="form-group">
  <x-input-form type="text" label="Title Meta:" name="Meta_Title" classGroup="col-md" class="" placeholder="Checked"
    :value="$blog->meta_title ?? ''" />
</div>

<div class="form-group">
  <x-input-form type="text" label="Checked" name="Checked" classGroup="col-md" class="" placeholder="Checked"
    :value="$blog->checked ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Del_FLg" name="Del_FLg" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->del_flg ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Hight_Flg" name="Hight_Flg" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->high_flg ?? ''" />
</div>
<div class="form-group">
  <x-input-form type="text" label="Slug" name="Slug" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->slug ?? ''" />
</div>

<div class="form-group">
  <x-input-form type="text" label="Chức vụ" name="Position" classGroup="col-md" class="" placeholder="Tiêu đề"
    :value="$blog->position ?? ''" />
</div>
