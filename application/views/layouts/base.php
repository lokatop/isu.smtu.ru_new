<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public/styles/jquery.fancybox.min.css">

</head>
<body cz-shortcut-listen="true">
<?php include_once 'header.php' ?>

<?php echo $content; ?>

<?php include_once 'footer.php' ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/public/scripts/jquery.fancybox.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".add_mess").fancybox({
            'width'				: '1200px',
            'height'			: 'auto',
            'autoScale'			: true,
            'transitionIn'		: 'none',
            'transitionOut'		: 'none',
            'type'				: 'iframe'		});
        $(".pdf_up").fancybox({
            'width'				: '1200px',
            'height'			: 'auto',
            'autoScale'			: true,
            'transitionIn'		: 'none',
            'transitionOut'		: 'none',
            'type'				: 'iframe'		});
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".card_edit_comment").fancybox({
            'width'				: '1200px',
            'height'			: 'auto',
            'autoScale'			: true,
            'transitionIn'		: 'none',
            'transitionOut'		: 'none',
            'type'				: 'iframe',
            'afterClose' : up_com
        });
    });
    function up_com() {
        location.reload();
    };
    function show_hide(v) {
        $( "#"+v ).toggle("slow", function() {
            // Animation complete.
        });
    };
</script>
</body>
</html>



