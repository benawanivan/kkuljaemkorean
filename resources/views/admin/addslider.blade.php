@include ('layouts.header')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Tambah Slider</h1>
                <br>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="container">
                        <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Upload Gambar (Maks. 2MB)</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Deskripsi Gambar</label>
                                <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </main>
    @include('layouts.footer')