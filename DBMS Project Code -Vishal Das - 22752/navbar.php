<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Railway Reservation System</title>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    /* font-family: 'Inconsolata', monospace; */
    font-family: 'Shippori Mincho B1', serif;
}

.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/bg.jpg);
    /* border: 2px solid red; */
    background-position: center;
    background-size: cover;
    position: relative;
}

nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}

nav a img{
    width: 150px;
    /* height: ; */
}

.nav-links{
    flex: 1;
    text-align: right;
}

.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}

.nav-links ul li a{
    color: white;
    text-decoration: none;
    font-size: 15px;
}

.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background-color: #03e9f4;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav-links ul li:hover::after{
    width: 100%;
}

.text-box{
    width: 90%;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.text-box h1{
    font-size: 62px;
}

.text-box p{
    margin: 10px 0px 40px;
    font-size: 14px;
    color: #e3e3e3;
}

.visit-know{
    display: inline-block;
    text-decoration: none;
    color: white;
    border: 1px solid white;
    padding: 12px 34px;
    font-size: 14px;
    background-color: transparent;
    position: relative;
    cursor: pointer;
}

.visit-know:hover{
    border: 1px solid #243b55;
    background-color: #243b55;
    transition: 1s;
}

nav .fa{
    display: none;
}

@media(max-width: 700px){

    .text-box h1{
        font-size: 20px;
    }
    
    .nav-links ul li{
        display: block;
    }

    .nav-links{
        position: absolute;
        background-color: #f44336;
        height: 100vh;
        width: 200px;
        top: 0px;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color: white;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
    .nav-links ul{
        padding: 30px;
    }
}

/* -----Course---- */
.course{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}

h1{
    font-size: 36px;
    font-weight: bold;
}

p{
    color: #777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}

.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}

.course-column{
    flex-basis: 31%;
    background-color: rgb(251 222 222);
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

h3{
    text-align: center;
    font-weight: 900;
    margin: 10px 0px;
}

.course-column:hover{
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);

}

@media (max-width: 700px){
    .row{
        flex-direction: column;
    }
}


/* -----campus----- */

.campus{

    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;

}

.campus-column{
flex-basis: 32%;
border-radius: 10px;
margin-bottom: 30px;
position: relative;
overflow: hidden;
}

.campus-column img{
    width: 100%;
    display: block;
}

.layer{
    background-color:transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    transition: 0.5s;
}

.layer:hover{
    background-color: rgba(226,0,0,0.7);
}

.layer h3{
    width: 100%;
    font-weight: 900;
    color: white;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}

.layer:hover h3{
    bottom: 50%;
    opacity: 1;
}

/* ----------facilities--------- */

.facilities{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}

.facilities-col{
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    flex-direction: column;

    /* box-shadow: green; */
}
.facilities-col img{
    width: 100%;
    border-radius: 10px;
}

.facilities-col p{
    padding: 0px;
}

.facilities-col h3{
    margin-top: 16px;
    margin-bottom: 15px;
    text-align: left;
    font-weight: bolder;
}

.facilities-col:hover{
    transform: scale(1.4);
}

/* ------Testinomials------ */

.testinomails{
    width: 80%;
    margin: auto;
    padding-top: 100px;
    text-align: center;
}
.testinomail-col{
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background-color: #fff3f3;
    padding: 25px;
    cursor: pointer;
    display: flex;
}

.testinomail-col img{
    height: 40px;
    margin-left: 5px;
    margin-right: 30px;
    border-radius: 50%;
}

.testinomail-col p{
    padding: 0px;
}

.testinomail-col h3{
    margin-top: 15px;
    text-align: left;
    /* padding: px; */
}

/* -----call to action---- */
.cta{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/banner2.jpg);
    /* url(images/banner2.jpg); */
    /* background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7),url(images/banner2.jpg)); */
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0px;
}

.cta h1{
    color: white;
    margin-bottom: 40px;
    padding: 0px;
}

/* ----Footer---- */
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0px;
}

.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}


    </style>
</head>
<body>
    <nav>
                    <a href="index.html"><img src="images/logo2.png"></a>
                    <div class="nav-links" id="navLinks">
                        <ul>
    
                            <li><a href="https://railwayreservationsystemvishal.000webhostapp.com/">Home</a></li>
                            <li><a href="https://railwayreservationsystemvishal.000webhostapp.com/displayTrain.php">Show Trains</a></li>
                            <li><a href="https://railwayreservationsystemvishal.000webhostapp.com/insert01.php">Book Ticket</a></li>
                            <li><a href="https://railwayreservationsystemvishal.000webhostapp.com/canelForm.php">Cancel Ticket</a></li>
                            <li><a href="https://railwayreservationsystemvishal.000webhostapp.com/showTicket.php">View Ticket</a></li>
                            
                        </ul>
                    </div>
    </nav>
    
</body>
</html>
