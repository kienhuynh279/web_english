@extends('admin.master')
@section('title','Danh sách bài kiểm tra')
@section('main')
<div class="card">
    <div class="card-header d-flex align-items-center" style="gap: 15px;">
        <a href="{{ route('adminMakeTestGetAdd') }}" class="btn btn-primary">Thêm bài kiểm tra</a>
        <form id="cate-form" action="{{ route('adminMakeTest') }}" method="get">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Loại bài</span>
                </div>
                <select id="cate-input" class="form-control" name="cate">
                    <option value="" aria-readonly="true">Tất cả</option>
                    @isset($CategoryData)
                    @foreach ($CategoryData as $item)
                    <optgroup label="{{ $item->title }}">
                        @foreach($item->child as $child_item)
                        <option value="1{{ ($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id)}}" {{ $child_item->id == substr($CategoryData->selected ?? '', 3) ? 'selected' : '' }}>
                            {{ $child_item->title }}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                    @endisset
                </select>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Bài Kiểm Tra</th>
                    <th>Loại bài</th>
                    <th>Trạng thái</th>
                    <th>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-trash"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                <tr>
                    <th>{{ $form->id }}</th>
                    <th>{{ $form->title }}</th>
                    <th>
                        @isset($CategoryData)
                        @foreach ($CategoryData as $cate_item)
                        @foreach($cate_item->child as $child_item)
                        {{ $child_item->id == substr($form->id_theforms_cat ?? '', 3) ? $child_item->title : '' }}
                        @endforeach
                        @endforeach
                        @endisset
                    </th>
                    <td class="text-{{ $form['status'] == 1 ? "success" : "danger" }}">{{ $form['status'] == 1 ? "Hiện" : "Ẩn" }}</td>
                    <th>
                        <a href="{{ route('adminMakeTestGetEdit', $form->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline" action={{ route('adminMakeTestDelete',$form->id) }} method="POST">
                            @csrf
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            @if($CategoryData->selected)
            {{ $forms->appends(['cate' => $CategoryData->selected])->links() }}
            @else
            {{ $forms->links() }}
            @endif
        </div>
    </div>
</div>
<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        // search: false,
        paging: false,
        // searching: false,
        aaSorting: [],
        bInfo : false,
        columnDefs: [
            { className: "text-nowrap text-center", "targets": [ 0, 2 ] }
        ],
        fixedColumns: {
            leftColumns: 0,
            rightColumns: 1
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());

    // filter
    let cateInput = document.getElementById('cate-input');
    let cateForm = document.getElementById('cate-form');

    cateInput.addEventListener('change', function() {
        cateForm.submit();
    })
</script>
@stop
