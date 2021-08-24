@extends('template')

@section('content')
    <div class="row pt-5">
        <div class="col-12 mb-3">
            <a href="#" class="btn btn-primary"><i class="fas fa-file-export mr-2"></i>Export</a>
        </div>
        <div class="col-12 d-flex mb-3">
            <select name="" id="" class="form-control mr-3">
                <option value="" selected>ID Mahasiswa</option>
            </select>
            <select name="" id="" class="form-control mr-3">
                <option value="" selected>ID Mahasiswa</option>
            </select>
            <a href="#" class="btn btn-primary">Show</a>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Mahasiswa</th>
                                <th>Other Mahasiswa</th>
                                <th>Comparation</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush