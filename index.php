<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Transaksi</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
  <div class="w-75 w-md-50 mx-auto container-fluid">
    <h3 class="text-center my-3">Form Transaksi Toko Elektronik</h3>

    <form id="form1" name="form1" method="post">
      <div class="mb-3 form-group">
        <label for="name">Nama Pembeli</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="mb-3 form-group">
      <label>Item</label>
        <select class="form-select" id="item" name="item">
          <option selected>Pilih item</option>
          <option value="PC">PC</option>
          <option value="Laptop">Laptop</option>
          <option value="Playstation">Playstation</option>
        </select>
      </div>
      <div class="mb-3 form-group">
      <label>Kondisi</label>
        <select class="form-select" id="condition" name="condition">
          <option selected>Pilih Kondisi</option>
          <option value="Baru">Baru</option>
          <option value="Bekas">Bekas</option>
        </select>
      </div>
      <div class="mb-3 d-flex space">
        <input type="button" name="send" class="btn btn-primary me-3" value="Tambah Item" id="addRow">
        <input type="button" name="save" class="btn btn-primary" value="Simpan Transaksi" id="saveTable">
      </div>
    </form>

    <table id="table1" name="table1" class="table text-center table-bordered">
      <tbody>
        <tr>
          <th>Nama Pembeli</th>
          <th>Item</th>
          <th>Kondisi</th>
          <th>Aksi</th>
        <tr>

      </tbody>
    </table>


  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>