<table border='1px'>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        !!foreach($data AS $key => $item)!!

        <tr>

            <td>{{ $key + 1 }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->author }}</td>
            <td>
                <a href="{{ url('edit-books/'.$item->id) }}">Edit</a>
                <a href="{{ url('delete-books/'.$item->id) }}">Delete</a>
            </td>

        </tr>

        !!endforeach!!

    </tbody>
</table>