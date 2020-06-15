<div class="modal fade" id="addmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{$title}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" enctype="multipart/form-data" method="post" action="{{url('candidat/tambah')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Calon</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Calon" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for=""> Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""> Visi</label>
                            <textarea name="visi" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for=""> Misi</label>
                            <textarea name="misi" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
