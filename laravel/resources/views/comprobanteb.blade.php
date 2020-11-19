<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comprobante B</title>
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <style>
  *{
padding: 0;
margin: 0;
list-style-type: none;
box-sizing: border-box;
text-decoration: none;
}

.logo{
float: left;
margin-left: 10px;
margin-top: 2px;
}
.ham{
float: right;
}

#hamur{
color: white;
font-size: 40px;
margin-right: 10px;
margin-top: 2px;
}

header{
background-color: #df5838;
overflow: hidden;
position: fixed;
top: 0;
margin: 0 -10px;
width: 100%;
}

article{
padding:10px;
}

.menu{
display: none;
}
section.productos{
background-color: #fff;
margin: 10px;
}
article.producto img{
width: 100%;
}
.link{
background-color: red;
text-decoration: none;
color: #fff;
font-size: 20px;
padding: 5px;
display: inline-block;
}

main{
margin-top: 50px;
}

body{
background: url('../img/bg-2.png');


}


aside{
margin: 10px;
}

aside h2{
background-color: #fff;
padding: 10px;
margin-bottom: 10px;
margin-top: 10px;
}

aside article{
background-color: #fff;
padding: 10px;
}
.imgtuto{width: 50%;}
.tutorial h3{width: 40%; }

section publicidades{
margin-top: 10px;

}

.publicidad img{
width: 100%;
}


@media (min-width: 480px){
section.productos{
overflow: hidden;
}
article.producto{
width: 50%;
float: left;
}
aside{
overflow: hidden;
}
section.tutoriales{
width: 48%;
float: left;
}
section.publicidades{
width: 48%;
float: right;
}
.tutorial h3{
float: right;
font-size: 20px;
}
}

@media (max-width: 480px){
.tutorial h3{
float: right;
font-size: 20px;


}
}

@media (min-width: 900px){
main{display: flex;margin-right: 50px;margin-left: 50px;}
section.productos{
overflow: hidden;
width: 150%;
}
article.producto{
  width: 50%;
  float: left;
}
aside{
  overflow: hidden;
}
section.tutoriales{
  width: 100%;
  float: right;
  overflow: hidden;


}
section.publicidades{
width: 100%;


}
.tutorial h3{
float: right;
font-size: 20px;
}
.ham{display: none;}
.menu{
display: inline;
}
.izq{
float: left;
text-decoration: none;
margin-top: 10px;
margin-left: 20px;
font-size: 20px;

}
.der{float: right;
text-decoration: none;
margin-top: 10px;
margin-right: 20px;
font-size: 20px;

}
.menu a{color: white;margin-left: 10px;}
}

      }
  </style>
  <body>
    <div class="contenedor">
      <header>
        <div class="logo">
          <img src="img/logo.png" alt="Crftty">
        </div>
        <div class="ham">
          <i id="hamur"class="fas fa-bars"></i>
        </div>
        <div class="menu">
          <div class="izq">
            <a href="#">SMARTPHONES</a>
            <a href="#">TABLES</a>
            <a href="#">COMPUTADORAS</a>

          </div>
          <div class="der">
            <a href="#">LOGIN</a>
            <a href="#">REGRISTRO</a>
          </div>
        </div>

      </header>
      <main>
        <section class="productos">
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
          <article class="producto">
            <img src="img/img-phone-01.jpg" alt="">
            <h2>Telefono</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="link" href="#">Ver mas</a>
          </article>
        </section>
        <aside class="">
          <section class="tutoriales">
            <h2>Tutoriales</h2>
            <article class="tutorial">
              <img class="imgtuto"src="img/aside-01.jpg" alt="">
              <h3>Tuto del tutorial <br> de reparacion</h3>
            </article>
            <article class="tutorial">
              <img class="imgtuto"src="img/aside-02.jpg" alt="">
              <h3>Tuto del tutorial <br> de reparacion</h3>
            </article>
            <article class="tutorial">
              <img class="imgtuto"src="img/aside-03.jpg" alt="">
              <h3>Tuto del tutorial <br> de reparacion</h3>
            </article>
            <article class="tutorial">
              <img class="imgtuto"src="img/aside-04.jpg" alt="">
              <h3>Tuto del tutorial <br> de reparacion</h3>
            </article>
          </section>
          <section class="publicidades">
            <h2>Publicidad</h2>
            <article class="publicidad">
              <img src="img/ad-01.jpg" alt="">
              <h3>publicidad 1</h3>
            </article>
            <article class="publicidad">
              <img src="img/ad-02.jpg" alt="">
              <h3>publicidad 2</h3>
            </article>

          </section>

        </aside>
      </main>
    </div>
  </body>
</html>
