<div class="form-group col-sm-6">
    {{-- <label>Tên tin tức : </label>
    <input type="text" id="title" name="Title" class="form-control" placeholder="Tên tin tức" value="{{ !old(title) ? $blog['title'] ?? "" ? $blog['title'] }}"> --}}
    <x-input-form type="text" id="title" label="Tiêu đề:" name="Title_en" classGroup="col-md" class="" placeholder="Tiêu đề" :value="$blog->title ?? ''" />
</div>
<div class="form-group col-sm-6">
    <x-input-form type="text" id="title_en" label="Tiêu đề English:" name="Title_en" classGroup="col-md" class="" placeholder="Tiêu đề" :value="$blog->title_en ?? ''" />
</div>

<div class="form-group col-sm-6">
    <label for="example-select">Chọn loại tin tức</label>
    <select class="form-control" name="Cate_Id" id="code">
        <option value="" aria-readonly="true">Ấn để chọn</option>
        @foreach ($cate as $item)
        <optgroup label="{{ $item->title }}">
            @foreach($item->child as $child_item)
            <option value="1{{ ($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id)}}">
                {{ $child_item->title }}</option>
            @endforeach
        </optgroup>
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
    <x-input-form type="text" label="Description Meta:" name="Meta_Desc" classGroup="col-md" class="" placeholder="Checked" :value="$blog->meta_description ?? ''" />
</div>

<div class="form-group col-sm-6">
    <x-input-form type="text" label="Title Meta:" name="Meta_Title" classGroup="col-md" class="" placeholder="Checked" :value="$blog->meta_title ?? ''" />
</div>

{{-- <div class="form-group col-sm-6">
  <label for="example-select">Nổi Bật (Client): </label>
  <select class="form-control" id="example-select" name="Del_Flg">
    <option value="1" {{ ($blog->Del_flg ?? '') === 1 ? '' : '' }}>Nổi bật</option>
<option value="1" {{ ($blog->Del_flg ?? '') === 0 ? '' : '' }}>Không nổi bật</option>
</select>
</div> --}}

<div class="form-group col-sm-6">
    <label for="example-select">Nổi Bật (Admin): </label>
    <select class="form-control" id="example-select" name="Hight_Flg">
        <option value="1" {{ ($blog->Hight_Flg ?? '') === 1 ? '' : '' }}>Nổi bật</option>
        <option value="1" {{ ($blog->Hight_Flg ?? '') === 0 ? '' : '' }}>Không nổi bật</option>
    </select>
</div>

<div class="form-group col-sm-3">
    <x-input-form type="text" label="Checked" name="Checked" classGroup="col-md" class="" placeholder="Checked" :value="$blog->checked ?? ''" />
</div>

<div class="form-group col-sm-3">
    <x-input-form type="text" label="Chức vụ" name="Position" classGroup="col-md" class="" placeholder="Tiêu đề" :value="$blog->position ?? ''" />
</div>

<div class="form-group col-sm-12">
    <label>Slug : </label>
    <input required type="text" id="slug" name="Slug" class="form-control" placeholder="Slug..." value="{{ $blog['slug'] }}"2>
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
    // create slug
        $('#title').keyup(function(event) {
            /* Act on the event */
            var title, slug;
            //Lấy text từ thẻ input title
            title = $(this).val();
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            $('#slug').val(slug);
        });
</script>
