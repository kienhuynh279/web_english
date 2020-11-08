<h1>Form Controll</h1>
  <div class="form-row">
        <x-input-form type="text" label="Tiêu đề" name="Title" classGroup="col-md" class="" placeholder="Tiêu đề"
            :value="$blog->Title ?? ''" />
    </div>