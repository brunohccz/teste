<form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
    @csrf
    <label>
        <input type="file" name="avatar"/>
    </label>
    <label>
        <input type="text" name="name"/>
    </label>
    <button type="submit">Submit</button>
</form>
