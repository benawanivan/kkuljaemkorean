@include ('layouts.header')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                @include('alerts.errors')
                @include('alerts.success')
                <h1 class="mt-4">Edit Countdown Clock</h1>
                <br>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="container">
                        <form action="{{url('/editclock')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" value="{{$clock->id}}">
                            <div class="form-group">  
                                <label for="exampleFormControlInput1">Tanggal</label><br>
                                <input type="date" id="date" name="date" value={{$clock->date}}>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jam</label>
                                <input type="time" name="time" class="form-control" id="time" value={{$clock->time}}>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Link Daftar Sekarang</label>
                                <input type="text" name="link" class="form-control" id="link" value={{$clock->link}}>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </main>
    @include('layouts.footer')