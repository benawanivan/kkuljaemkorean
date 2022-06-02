@include ('layouts.header')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @include('alerts.errors')
                        @include('alerts.success')
                        <h1 class="mt-4">Slider Menu</h1>
                        <br>
                        <a class="btn btn-primary" href="{{ url('/addslider')}}" role="button" style="margin-bottom: 1rem;">
                            <i class="fas fa-plus" aria-hidden="true" ></i> Tambah Slider Baru</button>
                        </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Image List
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image Preview</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($images as $img)
                                            <tr>
                                                <td style="width:20px">{{$loop->iteration}}</td>
                                                <td style="text-align: center; width: 350px;"><img src="data_slider/{{ $img->nama }}" style="width:300px"></td>
                                                <td>{{ $img->deskripsi}}</td> 
                                                <td>
                                                    <div class="row" style="justify-content:center">
                                                        <form action="/delete/{{$img->id}}" method="get" style="padding-right:2px;padding-left:2px">
                                                            @csrf
                                                            <div class="">
                                                                <input class="" type="hidden" name="id" value="">
                                                            </div>
                                                            <button type="submit" class="btn  btn-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                                            <i class="fas fa-times" aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>     
                                                </td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@include('layouts.footer')
