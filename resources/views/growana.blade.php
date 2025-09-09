<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio</title>
    <!-- <link rel="stylesheet" href="css/style.css">-->
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

html, 
body {
    margin: 0px;
    padding: 0px;
    font-size: 16px;
    font-family: "Lato", sans-serif;
}

.wrapper{
    width: 1024px;
    margin: auto;
    padding: 20px 0px 20px 0px;
}

/*
*menu
*/

nav{
    background-color: #556B2F;
    color: #fff;
}

nav > .wrapper {
    display: flex;
    justify-content: space-between;
    font-size: 1.2rem;
    align-items: center;
}

.menu{
    width: 50%;
    border: 0px solid;
}

.menu > ul{
    display: flex;
    list-style: none;
    margin: 0px;
    padding: 0px;
    justify-content: space-between;
}

.menu> ul > li > a{
    text-decoration: none;
    color: black;
    color: #fff;
    justify-content: space-between;
}

.logo{
    display: flex;
    align-items: center;
}

.logo > img{
    height: 45px;
}
/*
*hero / jumbotroon
*/

header{
    background: url("/image/bg\ header.jpg");
    height: 100vh;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.header--opacity{
    background-color: #556B2F;
    width: 100%;
    height: 100%;
    opacity: 7;
}
     </style>
</head>
<body>
    <!-- menu -->
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="image/growana logo.jpg"></div>
            <div class="menu">
                <ul>
                    <li><a href=''>Premium Course</a></li>
                    <li><a href=''>Tentang Saya</a></li>
                    <li><a href=''>Free Course</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- hero/jumbotroon -->
     <header>
        <div class="header-opacity"></div>
     </header>
</body>
</html>