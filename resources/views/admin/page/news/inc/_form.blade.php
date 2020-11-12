
  <div class="form-group col-sm-6">
    <x-input-form type="text" id="Title" label="Tiêu đề" name="Title" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->title ?? ''" />
      <div class="col-lg-12 messages text-danger"></div>
  </div>
  <div class="form-group col-sm-6">
    <x-input-form type="text" id="title_en" label="Tiêu đề English:" name="Title_en" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->title_en ?? ''" />
  </div>

  <div class="form-group col-sm-6">
    <label for="example-select">Chọn loại tin tức</label>
      <select class="form-control" id="example-select" name="Cate_Id">
        @foreach ($cate as $cate)
          <option value="{{ $cate->id_blog_cat }}"> {{ $cate->title }}</option>
        @endforeach
      </select>
  </div>

  <div class="form-group col-sm-6">
    <label>Ảnh Đại Diện :</label>
    <input required id="img" type="file" name="Avatar" class="form-control hidden" onchange="changeImg(this)">
    <img id="avatar" class="thumbnail" width="200px" src="{{ asset('/dist/img/imgdefault.png') }}">
  </div>


    <div class="form-group col-sm-6 px-3">
      <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt</label>
          <div class="md-form">
            <textarea id="summary" name="Summary" class="md-textarea form-control">{{ $blog->summary ?? old('summary') }}</textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>

    <div class="form-group col-sm-6 px-3">
      <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt bằng tiếng anh:</label>
          <div class="md-form">
            <textarea id="summary_en" name="Summary_en" class="md-textarea form-control">{{ $blog->summary_en ?? old('summary_en') }}</textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>

    <div class="form-group col-sm-6 px-3">
      <label class="w-100" for="summary" style="padding-top: 7px;">Nội dung bằng tiếng anh:</label>
          <div class="md-form">
            <textarea id="content" name="Content" class="md-textarea form-control">{{ $blog->content ?? old('content') }}</textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>
    <div class="form-group col-sm-6 px-3">
      <label class="w-100" for="summary" style="padding-top: 7px;">Nội dung bằng tiếng anh:</label>
          <div class="md-form">
            <textarea id="content_en" name="Content_en" class="md-textarea form-control">{{ $blog->content_en ?? old('content_en') }}</textarea>
          </div>
      <div class="col-lg-12 messages text-danger"></div>
    </div>

  <div class="form-group col-sm-6">
    <x-input-form type="text" label="Description Meta:" name="Meta_Desc" classGroup="col-md" class="" placeholder="Checked"
      :value="$blog->meta_description ?? ''" />
  </div>

  <div class="form-group col-sm-6">
    <x-input-form type="text" label="Title Meta:" name="Meta_Title" classGroup="col-md" class="" placeholder="Checked"
      :value="$blog->meta_title ?? ''" />
  </div>

  <div class="form-group col-sm-6">
    <label for="example-select">Nổi Bật (Client): </label>
      <select class="form-control" id="example-select" name="Del_Flg">
          <option value="1" {{ ($blog->Del_flg ?? '') === 1 ? '' : '' }}>Nổi bật</option>
          <option value="1" {{ ($blog->Del_flg ?? '') === 0 ? '' : '' }}>Không nổi bật</option>
      </select>
  </div>

  <div class="form-group col-sm-6">
    <label for="example-select">Nổi Bật (Admin): </label>
      <select class="form-control" id="example-select" name="Hight_Flg">
          <option value="1" {{ ($blog->Hight_Flg ?? '') === 1 ? '' : '' }}>Nổi bật</option>
          <option value="1" {{ ($blog->Hight_Flg ?? '') === 0 ? '' : '' }}>Không nổi bật</option>
      </select>
  </div>

  <div class="form-group col-sm-3">
    <x-input-form type="text" label="Checked" name="Checked" classGroup="col-md" class="" placeholder="Checked"
      :value="$blog->checked ?? ''" />
  </div>

  <div class="form-group col-sm-3">
    <x-input-form type="text" label="Chức vụ" name="Position" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->position ?? ''" />
  </div>

  <div class="form-group col-sm-6">
    <x-input-form type="text" label="Slug" name="Slug" classGroup="col-md" class="" placeholder="Tiêu đề"
      :value="$blog->slug ?? ''" />
  </div>
</form>

 <script>
    
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    CKEDITOR.replace('content', { height: '150px' });
    CKEDITOR.replace('content_en', { height: '150px' });


    // Validate
    let constraints = {
        Title: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        tittle_en: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        slug: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        code: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        answer: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        }
    };

    validateData('#main', constraints);
    // End Validate

    function pushQuestionDataToSelectAnswer() {
        let html = `<option value="" aria-readonly="true">Ấn để chọn</option>`;

        question.map(i => html += `<option value="${i.content}">${i.content}</option>`)

        $('#answer').html(html);
    }

</script>