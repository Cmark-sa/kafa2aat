<form action="{{url('/admin/partners/store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>

    <div class="form-group">

        <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
