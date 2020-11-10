<div class="container">
  <h2>Title Test</h2>
  <p>Summary <code>.needs-validation</code>, which will add the validation effect AFTER the form has been submitting (if there's anything missing).</p>
  <p>Try to submit this form before filling out the input fields, to see the effect.</p>
  <form action="/action_page.php" class="needs-validation" novalidate>
    <h4>Dạng trắc nghiệm</h4>
    <div>
        <h6>Câu hỏi</h6>
        <div class="custom-control custom-radio custom-control-inline">
            <p>Tài liệu bao gồm các bài tập chuyên đề hoàn thành đoạn văn được</p>
                <select id="example-select" name="Cate_Id">
                    <option value="">test</option>
                </select>
            <p>chọn lọc từ các đề thi thử Tiếng Anh các năm 2015 – 2016, mỗi bài tập có đáp án giúp giúp các bạn học sinh lớp 12 tự ôn luyện</p>
            <select class="form-control" id="example-select" name="Cate_Id">
                    <option value="">Chọn đáp án</option>
            </select>
        </div>
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
