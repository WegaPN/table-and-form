!DOCTYPE html>
<html lang="en">
<head>
  <title>YANG AKU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
	table, th, td{
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center;
	}
</style>
</head>
<body style="height:1500px">

<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> 
      <img src="one.png" alt="Logo" style="width:40px;" class="rounded-pill">
      </a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link" href="#">Table </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php" >Form</a>
          </ul>
        </li>
      </ul>
    </div>
</nav>

<div class="container-fluid" style="margin-top:80px" align="center">
  Faktur penjualan
 <table width="75%">
 	<tr>
		<th colspan="3">No.#123456</th>
		<th colspan="1">01 Januari 2022</th>
 	</tr>
 	<tr>
 		<td colspan="2" align="left"><b> Dibayarkan ke:</b><br>
 			Pt.Untung terus<br>
 			jalan beruang<br>
 			bandung<br>
 			</td>
 		<td colspan="2"><b>Customer : </b><br>
 			asep<br>
 			jalan terus<br>
 			bandung <br>
 		</td>
 	</tr>
 	<tr>
 		<th>barang/deskripsi</th>
 		<th>Qty</th>
 		<th>@</th>
 		<th>Harga</th>
 	</tr>
 	<tr>
 		<td>Buku</td>
 		<td>2</td>
 		<td>5.000</td>
 		<td>10.000</td>
 	</tr>
 	<tr>
 		<td>Pulpen</td>
 		<td>3</td>
 		<td>1.000</td>
 		<td>3.000</td>
 	</tr>
 	<tr>
 		<th colspan="3">Subtotal</th>
 		<td>13.000</td>
 	</tr>
 	<tr>
 		<th colspan="2">PPN</th>
 		<td>11%</td>
 		<td>1.430</td>
 	</tr>
 	<tr>
 		<th colspan="3"> Total</th>
 		<td colspan="2">14.430</td>
 	</tr>
 </table>
</div>

</body>
</html>

