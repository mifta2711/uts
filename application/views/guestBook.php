<html>

<head>
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
</head>

<body>
    <?php
	  $nama = 'isikan nama anda';
	  $email = 'isikan Email';
	  $komentar = 'Silahkan isi komentar anda';
	?>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td> : </td>
            <td><input type="text" name="komentar" value="<?php echo $komentar;?>"></td>
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