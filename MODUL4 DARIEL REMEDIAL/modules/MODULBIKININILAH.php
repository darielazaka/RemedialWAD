
<?php
$nowDate = time();
if (isset($_POST['submit'])) {
  $nama_mobil = $_POST['nama_mobil'];
  $nama_pemilik = $_POST['nama_pemilik'];
  $Merk = $_POST['Merk'];
  $tanggalbeli = date($_POST['tanggalbeli']);
  $Deskripsi = $_POST['Deskripsi'];
  $Status = $_POST['statusnya'];
  $fileIMG = $_FILES['inputImg'];
  $fileIMGName = $_FILES['inputImg']['name'];
  $fileIMGType = $_FILES['inputImg']['type'];
  $fileIMGSize = $_FILES['inputImg']['size'];
  $fileIMGTempLoc = $_FILES['inputImg']['tmp_name'];
  $filePathLocal = "./assets/img/Gambar/Buku/$nowDate-$nama_mobil" . ".png";
  $saveLocal =  move_uploaded_file($fileIMGTempLoc, $filePathLocal);


$query = "INSERT INTO `my_goods`
    (`Nama_Goods`, `Manufacture`, `Stok`,
     `tanggal_beli`, `deskripsi`, `Foto`,
      `Status`) 
    VALUES ('$nama_mobil','$nama_pemilik','$Merk',
    '$tanggalbeli','$Deskripsi','$filePathLocal','$Status')";

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
    // echo '<br>';
    // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>Gagal Menambah Buku! Karena ' . $mysqli_error($conn) . '</strong>
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div>';
    echo $query;
  }

} else {
  // do nothing
}
