@extends('admin.layouts')
@section('title', 'new major')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Major</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="form-rest">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="cover" class="custom-file-input" id="cover">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="is_active" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Activate</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a  onclick="storeItem('/majors')" class="btn btn-primary">Submit</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
 function storeItem(url){
    // let data ={
    //     name : document.getElementById('name').value

    // }
    // let formData = new FormData();
    // formData.append('name' ,'yahya');

    axios.post(url ,formData)
    .then(function(responce){
        toastr.success('Created Successfully')
        console.log(responce.data)
    }).catch(function(error){
        toastr.error('error')
        console.log(error)
    })

 }
</script>
@endsection
