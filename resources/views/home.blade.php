<!DOCTYPE html>
<html lang="pt" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GVB - Home</title>
    <meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
    <meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/modernizr.custom.js"></script>
</head>

<body>
    <div class="container">
        <!-- Codrops top bar -->
        <div class="codrops-top clearfix">
            <a class="codrops-icon codrops-icon-prev" href="#"><span>Grupo Vicoa Brasil</span></a>
            <span class="right"><a class="codrops-icon codrops-icon-drop" href="#"><span>Colocar algum link
                        aqui</span></a></span>
        </div>
        <header>
            <h1>Página Inicial <span>Manusear Adesões, Clientes e Usuários</span></h1>
        </header>
        <div class="main clearfix">
            <nav id="menu" class="nav">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <i aria-hidden="true" class="glyphicon glyphicon-home"></i>
                            </span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i aria-hidden="true" class="glyphicon glyphicon-font"></i>
                            </span>
                            <span>Adesão</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i aria-hidden="true" class="glyphicon glyphicon-user"></i>
                            </span>
                            <span>Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i aria-hidden="true" class="glyphicon glyphicon-user"></i>
                            </span>
                            <span>Usuários</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i aria-hidden="true" class="glyphicon glyphicon-remove"></i>
                            </span>
                            <span>Área Restrita</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i aria-hidden="true" class="glyphicon glyphicon-log-out"></i>
                            </span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /container -->
    <script>
    //  The function to change the class
    var changeClass = function(r, className1, className2) {
        var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
        if (regex.test(r.className)) {
            r.className = r.className.replace(regex, ' ' + className2 + ' ');
        } else {
            r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"), ' ' +
                className1 + ' ');
        }
        return r.className;
    };

    //  Creating our button in JS for smaller screens
    var menuElements = document.getElementById('menu');
    menuElements.insertAdjacentHTML('afterBegin',
        '<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>'
        );

    //  Toggle the class on click to show / hide the menu
    document.getElementById('menutoggle').onclick = function() {
        changeClass(this, 'navtoogle active', 'navtoogle');
    }

    // http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
    document.onclick = function(e) {
        var mobileButton = document.getElementById('menutoggle'),
            buttonStyle = mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(
                mobileButton, null).display;

        if (buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' +
                mobileButton.className + ' ')) {
            changeClass(mobileButton, 'navtoogle active', 'navtoogle');
        }
    }
    </script>
    <footer class="footer">
        <p align = "center">©Grupo Vicoa Brasil - Setor de Tecnologia da Informação <br> 2021</p>
    </footer>
</body>

</html>