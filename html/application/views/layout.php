<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/meta'); ?>
</head>

<body>

    <?php $this->load->view('partials/top_nav'); ?>

    <div class="container">
        
        <?php $this->load->view($view_file); ?>

        <hr>

        <div id="footer">
            <p> <?php echo '&copy; '. date('Y') . ' '. APP_CLIENT ?></p>
        </div>

    </div>

     <?php $this->load->view('partials/scripts'); ?>

</body>
</html>