@extends('admin.master')
@section('title','Danh sách câu hỏi')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminTestGetAdd') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm câu hỏi</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Mã Câu hỏi</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Loại Câu hỏi</th>
                    <th>Nổi Bật</th>
                    <th>Độ Khó</th>
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
                    <td class="text-{{ $item['high_flg'] == 1 ? "success" : "danger" }}">{{ $item['high_flg'] == 1 ? "Có" : "Không" }}</td>
                    <td>{{ $item['rank'] }}</td>
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
            {{ $data->links() }}
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
            { className: "text-nowrap text-center", "targets": [ 0, 3, 4, 5, 6 ] }
        ],
        fixedColumns: {
            leftColumns: 0,
            rightColumns: 1
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
