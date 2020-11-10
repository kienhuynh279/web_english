@extends('admin.master')
@section('title','Danh sách loại câu hỏi')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminTestCategoryGetAdd') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm loại câu hỏi</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Tiêu Đề bằng tiếng anh</th>
                    <th>Danh mục cha</th>
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
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['title_en'] }}</td>
                    @if ($item->parent_id == 0)
                    <td>Không thuộc danh mục nào</td>
                    @else
                    @foreach ($category_list as $sub_item)
                    @if ($item->parent_id == $sub_item->id)
                    <td>{{ $sub_item->title }}</td>
                    @break
                    @endif
                    @endforeach
                    @endif
                    <td class="text-{{ $item['status'] == "on" ? "success" : "danger" }}">{{ $item['status'] == "on" ? "Hiện" : "Ẩn" }}</td>
                    <td>
                        <a href="{{ route('adminTestCategoryGetEdit', $item['id']) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline" action={{ route('adminTestCategoryDelete', $item['id']) }} method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $data->links() }}
        </div>
    </div>
</div>

<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        search: false,
        paging: false,
        aaSorting: [],
        searching: false,
        bInfo : false,
        fixedColumns: {
            rightColumns: 1,
            leftColumns: 0,
        },
        columnDefs: [
            { className: "text-nowrap text-center", "targets": [ 2, 3 ] }
        ]
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
