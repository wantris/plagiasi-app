@extends('template')

@section('content')
    <div class="row pt-5">
        <div class="col-lg-6 col-12 pr-2">
           <div class="testing-container shadow py-3 px-3">
               <p class="h4">Life Code Testing</p>
               <div class="d-flex mt-3">
                   <select name="" id="" class="form-control mr-3">
                       <option value="">ID Mahasiswa</option>
                   </select>
                   <select name="" id="" class="form-control">
                        <option value="">ID Submission</option>
                    </select>
               </div>
               <div class="mt-3">
                   <textarea name="" id="" cols="30" rows="10" class="form-control">

                   </textarea>
               </div>
               <div class="mt-3">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
           </div>
        </div>
        <div class="col-lg-6 col-12 pl-2">
            <div class="testing-container shadow py-3 px-3">
                <p class="h4">Upload File Testing</p>
                <div class="d-flex mt-3">
                    <select name="" id="" class="form-control mr-3">
                        <option value="">ID Mahasiswa</option>
                    </select>
                    <select name="" id="" class="form-control">
                        <option value="">ID Submission</option>
                    </select>
                </div>
                <form action="{{route('comparation.uploadFile')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mt-3">
                        <input type="file" name="file" id="" class="form-control">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection