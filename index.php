<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>

<?php


// TODO teste layout 2

?>
<div id="div_00" class="div_00">

    <a href="#div_01">home</a>

    <a href="#div_02">sobre</a>

    <a href="#div_03">projetos</a>

    <a href="#div_04">curriculo</a>

    <a href="#div_05">contato</a>

</div>
<div id="div_01" class="div_01">
    <h1 class="text-white">Miguel</h1>

</div>
<div id="div_02" class="div_02"></div>
<div id="div_03" class="div_03"></div>
<div id="div_04" class="div_04"></div>
<div id="div_05" class="div_05"></div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        let div_01 = $(".div_01").height() ;
        console.log(div_01);
    });
</script>

</body>
</html>