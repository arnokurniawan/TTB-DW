 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Data</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">  </script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="row mb-9">
      <div class="col-lg-11">
        <button type="button" class="btn btn-primary pull-right tombolTambahData" data-toggle="modal" data-target="#formSuppliers">
          Add Suppliers
        </button>
        <button type="button" class="btn btn-primary pull-right tombolTambahData" data-toggle="modal" data-target="#formProducts">
          Add Products
        </button>
      </div>
    </div>

 
<table class="table table-bordered">
 <thead>
 <tr>
 <th>No</th>
 <th>Product Name</th>
 <th>Company Name</th>
 <th>Address</th>
 <th>Phone</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <tr>

 <?php
 include("koneksi.php");

 $sql = "SELECT * FROM products_tb INNER JOIN suppliers_tb ON products_tb.supplier_id=suppliers_tb.id";
 
 $result = mysqli_query($conn, $sql);
 
 while($row = mysqli_fetch_assoc($result))
 {
 $id = $row['id']; 
 echo"<td>".$row['id']."</td>";
 echo"<td>".$row['product_name']."</td>";
 echo"<td>".$row['supplier_id']."</td>";
 echo"<td>".$row['company_name']."</td>"; 
 echo"<td>".$row['phone']."</td>"; 
 ?>
 <td>
 	 <a href="#" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
     <a href="#" class="badge badge-success float-right " data-toggle="modal" data-target="#formUbah" >ubah</a>

 </td>
 </tr>
 
 <?php
}
 mysqli_close($conn);
 ?>
</table>

</div>
<!-- Modal -->
<div class="modal fade" id="formProducts" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="#" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Product Name</label>
            <input type="text" class="form-control" id="nmproduk" name="nmproduk" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nrp">Supplier ID</label>
            <input type="number" class="form-control" id="idsupplier" name="idsupplier" autocomplete="off">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="formSuppliers" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="#" method="post">

          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Company Name</label>
            <input type="text" class="form-control" id="nmcompany" name="nmcompany" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nrp">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
          </div>

           <div class="form-group">
            <label for="nrp">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" autocomplete="off">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="formUbah" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ubah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="#" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Product Name</label>
            <input type="text" class="form-control" id="nmcompany" name="nmcompany" autocomplete="off" required>
          </div>
			<div class="form-group">
            <label for="nama">Supplier ID</label>
            <input type="text" class="form-control" id="nmcompany" name="nmcompany" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nama">Company Name</label>
            <input type="text" class="form-control" id="nmcompany" name="nmcompany" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nrp">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
          </div>

           <div class="form-group">
            <label for="nrp">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" autocomplete="off">
          </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>



</body>
</html>