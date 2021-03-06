@extends('admin.master')
@section('title','Danh sách câu hỏi')
@section('main')

<div class="card">
    <div class="card-header d-flex align-items-center" style="gap: 15px;">
        <a href="{{ route('adminTestGetAdd') }}" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm câu hỏi</a>
        <form id="cate-form" action="{{ route('adminTest') }}" method="get">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Loại Câu hỏi</span>
                </div>
                <select id="cate-input" class="form-control input-group-prepend" name="cate">
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
                <input type="text" class="input-group-prepend form-control" name="k" id="search-input" placeholder="Từ khóa tìm kiếm theo tiêu đề" value="{{ $filter['k'] ?? '' }}">
                <input type="submit" class="btn btn-info" value="Tìm kiếm">
            </div>
        </form>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Mã Câu hỏi</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Loại Câu hỏi</th>
                    <th>Loại Bài</th>
                    <th>Nổi Bật</th>
                    <th>Trạng thái</th>
                    <th>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button  disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-trash"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ substr($item['code'], 5) }}</td>
                    <td>{{ $item['title'] }}</td>
                    <td>{!! $item['content'] !!}</td>
                    <td>{{ $item['type'] == 0 ? "Trắc Nghiệm" : "Tự Luận"}}</td>
                    <td>
                        @isset($CategoryData)
                        @foreach ($CategoryData as $cate_item)
                        @foreach($cate_item->child as $child_item)
                        {{ $child_item->id == substr($item->code ?? '', 3, 2) ? $child_item->title : '' }}
                        @endforeach
                        @endforeach
                        @endisset
                    </td>
                    <td class="text-{{ $item['high_flg'] == 1 ? "success" : "danger" }}">{{ $item['high_flg'] == 1 ? "Có" : "Không" }}</td>
                    <td class="text-{{ $item['status'] == 1 ? "success" : "danger" }}">{{ $item['status'] == 1 ? "Hiện" : "Ẩn" }}</td>
                    <td>
                        <a href="{{ route('adminTestGetEdit', $item['id']) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline" action={{ route('adminTestDelete', $item['id']) }} method="POST">
                            @csrf
                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa !')" type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $data->appends($filter)->links() }}
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
            { className: "text-nowrap text-center", "targets": [ 0, 3, 4, 5, 6 ] },
            { className: "ckeditor-content", "targets": 2 },
            {
                className: "ckeditor-content",
                "render": function ( data, type, row ) {
                    return `<p>${data}</p>`;
                },
                "targets": 1
            }
        ],
        fixedColumns: {
            leftColumns: 0,
            rightColumns: 1
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
