<h2>{{ $judul }}</h2>

<table border="1" width="100%" class="tables">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Kepala Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1; ?>
        @foreach($list_prodi as $prodi)
        <tr>
            <td>{{ $count }}</td>
            <td>{{ $prodi->kode }}</td>
            <td>{{ $prodi->nama }}</td>
            <td>{{ $prodi->kaprodi }}</td>
        </tr>
        <?php $count++ ?>
        @endforeach
    </tbody>
</table>
