@extends('layouts.admin')

@section('title')
Issued Letters
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/admin">Admin</a></li>
<li class="breadcrumb-item">Issued Letters</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table id="issuedLettersTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reference</th>
                    <th>Student</th>
                    <th>Reg. No</th>
                    <th>Type</th>
                    <th>Issued By</th>
                    <th>Issued At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
 </div>
@endsection

@section('custom-js')
<script>
$(function(){
    $('#issuedLettersTable').DataTable({
        ajax: '{{ url("/admin/letters/issued-list") }}',
        columns: [
            { data: 0 },
            { data: 1 },
            { data: 2 },
            { data: 3 },
            { data: 4 },
            { data: 5 },
            { data: 6 },
            { data: 7 }
        ],
        order: [[6,'desc']]
    });
});
</script>
@endsection
