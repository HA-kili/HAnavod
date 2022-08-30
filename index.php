<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HA | Návod </title>
    <link rel="shortcuts icon" href="./images/puk.gif">
    <link rel="stylesheet" type="text/css" href="./css/stylemobile10.css">
    <link rel="stylesheet" type="text/css" href="./css/stylenormal10.css">
    <link rel="stylesheet" type="text/css" href="./css/style10.css">
    <link rel="stylesheet" type="text/css" href="./css/pismo10.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

</head>
<body>
    <?php
        include('header.php');
    ?>

    <div class="page">
        <div class="leftCol">
            <script>
            $(function() {
                // alert($(this));

                $('body').on('click', '.dropdown-btn', function() {
                    var cls = $(this).data('submenu');
                    // console.log(cls);

                    if ($('ul.' + cls).css('display') == 'block') {
                        // if the clicked submenu is already active just close it
                        $('ul.' + cls).css({
                            'display': 'none',
                        });
                    } else {
                        // close all submenus
                        $('ul.sub').css({
                            'display': 'none',
                        });
                        // display newly clicked submenu
                        $('ul.' + cls).css({
                            'display': 'block',
                        });
                    }

                });

                     //menuToggle header
                $('[data-toggle=offmenu]').click(function() {
                    $('.leftCol').toggleClass('active');
                });


            });
            </script>
            <?php
                include('menu.php');
            ?>
        </div>

        <div class="contentCol">
            <div class="advTop"></div>
            <?php
                include('menu/' . $_GET['navod'] . '.php');
            ?>
            <a class="post" title="Napíš kili | HLP" href="https://www.hockeyarena.net/sk/index.php?p=manager_mail_new_mail_form.php&whom=kili">
                <img class="icon" src="./images/obalka.png" alt="">
            </a>
        </div>
    </div>
    

    <footer class="footer">
        <div class="copyright">
            <div class="copyright2">
                <a>© 2021 - 2022 HOCKEY ARENA NAVOD
                    <br> created by &nbsp; &nbsp;
                        <a class="znaky" href="https://www.hockeyarena.net/sk/index.php?p=manager_manager_info.php&id=37083"> k&nbsp;i&nbsp;l&nbsp;i&nbsp;|&nbsp;HLP </a>
                    <br> version 2.20
                </a>
            </div>
        </div>

    </footer>
    
<script>
    var icon = document.getElementById("tmavy_rezim");

    icon.onclick = function (){
        document.body.classList.toggle ("tmavy_rezim");
        if (document.body.classList.contains("tmavy_rezim")){
            icon.src = "./images/slnko.png";
        }
        else {
            icon.src = "./images/mesiac.png";
        }
    }
</script>

</body>
</html>

            
      