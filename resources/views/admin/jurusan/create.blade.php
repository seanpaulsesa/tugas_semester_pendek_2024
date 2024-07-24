@extends('admin.layout.tamplate')
@section('title')
    Jurusan
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                @include('admin.layout.breadcump')

                <div class="row">
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">  {{$caption ??'Tambah Data Jurusan'}} </h4>


                     @if(Request::segment(4) == 'ubah')
                         <form action="{{route('admin.jurusan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                         @method('PUT')
                     @else
                         <form action="{{route('admin.jurusan.store')}}" method="post" enctype="multipart/form-data">
                     @endif
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="jurusan"> Jurusan <span class="text-danger">*</span> </label>
                                                <input type="text" id="jurusan" @if((Request::segment(3)) == 'detail') {{'disabled'}} @endif value="{{old('jurusan') ??  $data->jurusan ?? ''}}" name="jurusan" placeholder="" class="form-control">
                                                @if($errors->has('jurusan'))
                                                    <label class="text-danger"> {{ $errors->first('jurusan') }} </label>
                                                @endif
                                            </div>
                                        </div>
</div>
<div class="row">






                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="keterangan"> Keterangan </label>
                                                <textarea id="keterangan" @if((Request::segment(3)) == 'detail') disabled @endif name="keterangan" placeholder="Masukan keterangan" rows="5" class="form-control">{{old('keterangan') ??  $data->keterangan ?? ''}} </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    @if((Request::segment(3)) == 'detail')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a  class="btn btn-primary" href="{{route('admin.jurusan')}}">Kembali</a>
                                            <a  class="btn btn-primary" href="{{route('admin.jurusan.ubah',$data->id)}}">Ubah  <i class="fas fa-edit"></i> </a>
                                        </div>
                                    </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">Simpan  <i data-feather="save"></i></button>
                                            </div>
                                        </div>
                                    @endif



                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                     </form>




                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
