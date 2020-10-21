<?php
?>
<html>
<head>
<title>
<?php echo $title?>
</title>
</head>
<body>
<style>
.header {
  background-color: plum;
  text-align: right;
  padding: 15px;
}
</style>
<div class="header">
  <div class="header-right">
  <a href="<?php echo site_url('home')?>">HOME</a>
  <a href="<?php echo site_url('about')?>">ABOUT</a>
  <a href="<?php echo site_url('contact')?>">CONTACT</a>
  <a href="<?php echo site_url('guestBook')?>">GUEST BOOK</a>
  </div> 
</div>
<style>
        table {
            border-collapse: collapse;
            border-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Contact</h1>
<table border="1" >
    <tr>
        <td>Nama</td>
        <td>Miftahul Rohmah</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>Jl. Laks Martadinata 1/42 Malang</td>
    </tr>
    <tr>
    	<td>Telepon</td>
    	<td> 085230401176</td>
    </tr>
    <tr>
    	<td>Email</td>
    	<td>miftarohma2711@gmail.com</td>
    </tr>

</table>	
<!-- Footer -->
<style>
.footer {
  background-color: plum;
  text-align: center;
  padding: 30px;
}
</style>
<footer class="footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; MIFTAHUL ROHMAH_181116064</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
</body>
</html>