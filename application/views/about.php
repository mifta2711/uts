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
    <h1><?php echo $title ?></h1>
    <p><?php echo $page ?></p>

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