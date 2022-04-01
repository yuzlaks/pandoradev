<form action="{{ url('store-books') }}" method="POST">

    <label for="">Judul</label>
    <input type="text" name="title"><br>
    <label for="">Deskripsi</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea><br>
    <label for="">Penulis</label>
    <input type="text" name="author"><br>

    <!-- Save button -->
    <button type="submit">Simpan</button>

</form>