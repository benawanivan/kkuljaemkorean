@include ('layouts.header')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
            @include('alerts.errors')
                <h1 class="mt-4">Edit Profile</h1>
                <br>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="container">
                        <form action="{{route('edit')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" value="{{$data->id}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" value="{{$data->username}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">New Password</label>
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </main>
    @include('layouts.footer')