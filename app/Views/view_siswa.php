<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Pendaftaran siswa</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
 <h1><center>Pendaftaran Siswa</center></h1>
 <div class="container">

  <a href="<?= base_url('view_create_siswa')?>" class="btn btn-primary">Daftar</a>
  <table class="table">
   <thead>
    <tr>
     <th scope="col"><center>No.</center></th>
     <th scope="col"><center>Nama Siswa</center></th>
     <th scope="col"><center>Alamat Lengkap</center></th>
     <th scope="col"><center>Jenis Kelamin</center></th>
     <th scope="col"><center>Agama</center></th>
     <th scope="col"><center>Sekolah Asal</center></th>
     <th scope="col"><center>Aksi</center></th>
    </tr>
   </thead>
   <tbody>

    <?php $no =1;?>
    <?php foreach ($data as $item) : ?>
     
     <tr>
     <th scope="row"><center><?= $no++?></center></th>
     <td><?= $item->nama?></td>
     <td><center><?= $item->alamat?></center></td>
     <td><center><?= $item->jenis_kelamin?></center></td>
     <td><center><?= $item->agama?></center></td>
     <td><center><?= $item->sekolah_asal?></center></td>
     <td><center><a href="<?= base_url('view_edit_siswa').'/'.$item->id?>" class="btn btn-warning">Edit</a>
    <a href="<?= base_url('delete').'/'.$item->id;?>" type="button" class="btn btn-danger">Delete</a></center></td>
     
    </tr>
    <?php endforeach ?>
   
   </tbody>
  </table>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>