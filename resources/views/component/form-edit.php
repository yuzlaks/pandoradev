<form action="{{ url('update-books/'.$data->id) }}" method="POST">

    <label for="">Judul</label>
    <input type="text" name="title" value="{{ $data->title }}"><br>
    <label for="">Deskripsi</label>
    <textarea name="description" id="" cols="30" rows="10">{{ $data->description }}</textarea><br>
    <label for="">Penulis</label>
    <input type="text" name="author" value="{{ $data->author }}"><br>

    <!-- Update button -->
    <button type="submit">Update</button>

</form>