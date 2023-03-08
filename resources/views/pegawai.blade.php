<table border="1 text-center">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Email</th>
    <th>Jenis Kelamin</th>
  </tr>
  <?php $no = 1; ?>
  @foreach($pegawai as $item)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->jabatan}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->jenis_kelamin}}</td>
  </tr>
  @endforeach
</table>