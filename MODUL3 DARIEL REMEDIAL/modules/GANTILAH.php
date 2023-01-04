
<?php
$nowDate = time();
if (isset($_POST['updateEvent'])) {
  $nama_mobil = $_POST['nama_mobil'];
  $nama_pemilik = $_POST['nama_pemilik'];
  $Merk = $_POST['Merk'];
  $tanggalbeli = date($_POST['tanggalbeli']);
  $Deskripsi = $_POST['Deskripsi'];
  $Status = $_POST['statusnya'];
  $id = $_POST['id_mobil'];



  $query ="";
    $query = "UPDATE `my_goods` SET 
    `Nama_Goods`='$nama_mobil',
    `Manufacture`='$nama_pemilik',
    `Stok`='$Merk',
    `tanggal_beli`='$tanggalbeli',
    `deskripsi`='$Deskripsi',
    `Status`='$Status' WHERE `ID_Goods`= '$id'";
  // }

  $sql = mysqli_query($conn, $query);
  if ($sql) {
    echo '<br>';
    echo '<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Dariel Showroom</strong>
      <small>Just Now</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Mobil Berhasil Ditambahkan !! <br>
      Good Luck For New Cars Dariel !!
    </div>
  </div>
</div>

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Dariel Showroom</strong>
      <small>Just Now</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
    Nambah mobil, Pajak jangan lupa dibayar ya ges ya
    </div>
  </div>
</div>';
  } else {
    echo '<br>';
    echo $query;
   }
}
