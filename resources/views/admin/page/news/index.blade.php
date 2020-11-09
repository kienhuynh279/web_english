@extends('admin.master')
@section('title','Danh sách tin tuc')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminNewGetAdd') }}" class="btn btn-sm btn-primary">Thêm tin tức</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                    <th>
                        <button class="btn btn-sm btn-secondary">
                            <a href="{{ route("adminNewGetEdit") }}"><i class="fas fa-edit"></i></a> 
                        </button>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-trash"></i>
                        </button>
                    </th>
                </tr>
                
                {{-- <td>Ashton</td>
                    <td>Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>1562</td>
                    <td>a.cox@datatables.net</td>
                    <td>
                        <a href="{{ route('adminTestGetEdit', 1) }}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"></i>
                </a>
                <form class="d-inline" action={{ route('adminTestDelete', 1) }} method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                    </button>
                </form>
                </td>
                </tr> -}}
                {{-- @foreach ($data['street_list'] as $item)
                <tr>
                    <td>{{ $item->StreetId }}</td>

                @foreach ($data['area_list'] as $area_item)
                @if ($item->AreaId === $area_item->AreaId)
                <td>{{ $area_item->Name }}</td>
                @break
                @endif
                @endforeach
                <td>{{ $item->Name }}</td>
                <td>
                    <a href="{{ route('adminStreetGetEdit', $item->StreetId) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </a>
                    <form class="d-inline" action={{ route('adminStreetDelete', $item->StreetId) }} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                    </form>
                </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        search: false,
        paging: false,
        searching: false,
        bInfo : false,
        fixedColumns: {
            rightColumns: 1,
            leftColumns: 0,
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
