<div class="card-body d-flex flex-wrap">
  <div class="form-group">
    <x-input-form type="text" label="Tiêu đề" name="Title" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->title ?? ''" />
  </div>
  <div class="form-group">
    <x-input-form type="text" label="Tiêu đề English:" name="Title_en" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->title_en ?? ''" />
  </div>

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
  <div class="col-md-12">
    <div class="form-group col-md-6">
      <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt</label>
          <div class="md-form">
            <textarea id="summary" name="Summary" class="md-textarea form-control"></textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>
    <div class="form-group col-md-6">
      <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt bằng tiếng anh:</label>
          <div class="md-form">
            <textarea id="summary_en" name="Summary_en" class="md-textarea form-control"></textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>
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
</div>
