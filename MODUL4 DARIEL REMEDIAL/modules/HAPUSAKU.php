
<?php
include 'KONEKSINYAKAKAK.php';
if (isset($_POST['deleteAgenda'])) {
    deleteAgenda($_POST['deleteAgenda'],$conn);
}
function deleteAgenda($ID_Goods,$conn){
   
    $query = "DELETE FROM my_goods where ID_Goods=$ID_Goods"; 
    $sql = mysqli_query($conn,$query);
    if ($sql) {
        echo '<br>';
        echo '';
    } else {
        echo '<br>';
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Gagal Menghapus DATA dengan ID '.$id.' Karena '.mysqli_error($conn).'</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}