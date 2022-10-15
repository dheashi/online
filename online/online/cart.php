<?php
    if (isset($_GET['id_barang']) && isset($_GET['jumlah'])) {

        $id_barang=$_GET['id_barang'];
        $jumlah=$_GET['jumlah'];

        $view = mysqli_query($dbconnect, "SELECT * FROM barang where id_barang='$id_barang'");

        $data = $view->fetch_array();

        $id_barang=$data['id_barang'];
        $nama_barang=$data['nama_barang'];
        $harga_barang=$data['harga_barang'];
        $stok=$data['stok'];
    }else {
        $id_barang="";
        $jumlah=0;
    }

    if (isset($_GET['action'])) {
        $action=$_GET['action'];
    }else {
        $action="";
    }
    switch($action){  
        //Fungsi untuk menambah penyewaan kedalam cart
        case "tambah_produk":
        $itemArray = array($id_barang=>array('id_barang'=>$id_barang,'nama_barang'=>$nama_barang,'jumlah'=>$jumlah,'harga_barang'=>$harga_barang,'stok'=>$stok));
        if(!empty($_SESSION["keranjang_belanja"])) {
            if(in_array($data['id_barang'],array_keys($_SESSION["keranjang_belanja"]))) {
                foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                    if($data['id_barang'] == $k) {
                        $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
                    }
                }
            } else {
                $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
            }
        } else {
            $_SESSION["keranjang_belanja"] = $itemArray;
        }
        break;
        //Fungsi untuk menghapus item dalam cart
        case "hapus":

            if(!empty($_SESSION["keranjang_belanja"])) {
                foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                        if($_GET["id_barang"] == $k)
                            unset($_SESSION["keranjang_belanja"][$k]);
                        if(empty($_SESSION["keranjang_belanja"]))
                            unset($_SESSION["keranjang_belanja"]);
                }
            }
        break;

        case "update":
            $itemArray = array($id_barang=>array('id_barang'=>$id_barang,'nama_barang'=>$nama_barang,'jumlah'=>$jumlah,'harga_barang'=>$harga_barang));
            if(!empty($_SESSION["keranjang_belanja"])) {
                foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                    if($_GET["id_barang"] == $k)
                    $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
                }
            }
        break;
    }
?>
<div class="row">
    <h2  style="margin-bottom:30px;">Keranjang Belanja</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th width="40%">Nama</th>
            <th>harga_barang</th>
            <th width="10%">QTY</th>
            <th>Sub Total</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=0;
            $sub_total=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["keranjang_belanja"])):
            foreach ($_SESSION["keranjang_belanja"] as $item):
                $no++;
                $sub_total = $item["jumlah"]*$item['harga_barang'];
                $total+=$sub_total;
        ?>
            <input type="hidden" name="id_barang[]" class="id_barang" value="<?php echo $item["id_barang"]; ?>"/>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item["id_barang"]; ?></td>
                <td><?php echo $item["nama_barang"]; ?></td>
                <td>Rp. <?php echo number_format($item["harga_barang"],0,',','.');?> </td>
                <td>
                <input type="number" min="1" value="<?php echo $item["jumlah"]; ?>" class="form-control" id="jumlah<?php echo $no; ?>" name="jumlah[]" >
                <script>
                    $("#jumlah<?php echo $no; ?>").bind('change', function () {
                        var jumlah<?php echo $no; ?>=$("#jumlah<?php echo $no; ?>").val();
                        $("#jumlaha<?php echo $no; ?>").val(jumlah<?php echo $no; ?>);
                    });
                    $("#jumlah<?php echo $no; ?>").keydown(function(event) { 
                        return false;
                    });
                    
                </script>

                </td>
                <td>Rp. <?php echo number_format($sub_total,0,',','.');?> </td>

                <td>
                    <form method="get">
                        <input type="hidden" name="halaman"  value="cart" class="form-control">
                        <input type="hidden" name="id_barang"  value="<?php echo $item['id_barang']; ?>" class="form-control">
                        <input type="hidden" name="action"  value="update" class="form-control">
                        <input type="hidden" name="jumlah" value="<?php echo $item["jumlah"]; ?>" id="jumlaha<?php echo $no; ?>" value="" class="form-control">
                        <input type="submit" class="btn btn-warning btn-xs" value="Update">
                    </form>
                    <a href="?halaman=cart&id_barang=<?php echo $item['id_barang']; ?>&action=hapus" class="btn btn-danger btn-xs" role="button">Delete</a>
                </td>
            </tr>
        <?php 
            endforeach;
            endif;
        ?>            
        </tbody>
    </table>
    <h3>Total Pembayaran Rp. <?php echo number_format($total,0,',','.');?> </h3>
</div>