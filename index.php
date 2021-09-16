<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Data Siswa</title>
</head>
<body>
<div class="container">
  <!-- Content here -->
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar navbar-dark bg-dark"> 
      </ul>
    </div>
  </div>
</nav>
<form method="post">
<div class="card shadow mb-4">
<div class="card-header py-3">

</div>
    <div class="card-body">
    <div class="table-responsive">
    <table id="example" class="display" style="width:100%">
    <div class= "col">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="option1">
    <label class="form-check-label" for="flexRadioDefault1">NIS</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="option2">
    <label class="form-check-label" for="flexRadioDefault2">Nama</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="option3">
    <label class="form-check-label" for="flexRadioDefault3">Tempat Tanggal Lahir</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="option3">
    <label class="form-check-label" for="flexRadioDefault3">Semua </label>
    </div>
    </div>
    <br>
                        <thead>
                        <tr>
                        <th>No.</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Rombel</th>
                        <th>Tempat Tanggal Lahir</th>
                        </tr>
                        </thead>
            
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>11907276</td>
                        <td>Mira Nur Aulia</td>
                        <td>RPL</td>
                        <td>Bogor, 27 Juni 2004</td>
                        </tr>

                        <tr>
                        <td>2</td>
                        <td>11906547</td>
                        <td>Akila</td>
                        <td>MMD</td>
                        <td>Jakarta, 18 Oktober 2004</td>
                        </tr>

                        <tr>
                        <td>3</td>
                        <td>11905879</td>
                        <td>Razi Alif</td>
                        <td>TKJ</td>
                        <td>Garut, 10 januari 2003</td>
                        </tr>

                        <tr>
                        <td>4</td>
                        <td>11909865</td>
                        <td>Resti</td>
                        <td>OTKP</td>
                        <td>Bandung, 06 Agustus 2002</td>
                        </tr>

                        <tr>
                        <td>5</td>
                        <td>11909876</td>
                        <td>Dina</td>
                        <td>BDP</td>
                        <td>Bogor, 02 Februari 2004</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script src= https://code.jquery.com/jquery-3.5.1.js></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </body>
</html>