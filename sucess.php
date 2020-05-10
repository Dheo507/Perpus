<html>
<head>
  
  <style type="text/css">
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.email-signup-thankyou{
  font-family:sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background: #333;
  padding:10%;
  
  .content{
    margin: auto;  /* Magic! */
    max-width:700px;
    color:#333;
    box-shadow: 0 3px 6px rgba(0,0,0,0.55), 0 3px 6px rgba(0,0,0,0.23);
    background:url('https://www.crafta.co.il/images/paper-plane.gif') no-repeat #fff;
    background-position: right 5px bottom 5px;
    background-size: 10em;
    text-align:center;
    position: relative;
    padding:10%;
    border-radius:5px;

    .left-hole,.right-hole{
      position: absolute;
      width:20px; height:20px;
      background:#333;
      border-radius:50%;
      top:15px;
    }
    .left-hole{
      left:15px;
      top:10px;
    }
    .right-hole{
      right:15px;
      top:10px;
    }
    h2,h3{
      text-align:left;
      padding:5% 5% 0% 3%;
      color:#333;
      font-weight:900;
    }
    .main-content{
      > h1 {
        color:#333;
        text-transform:uppercase;
        margin-top:-2%;
        font-size:2.5em;
        font-weight:900;
      }
    }
  }
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
</head>
<body>
<div class="header-custom email-signup-thankyou">
  <div class="content">
    <div class="left-hole"></div>
    <div class="right-hole"></div>
    <div class="main-content">
      <h1>Sukses Membeli</h1>
      <p>Terima Kasih Sudah Membeli Di Perpustakaan Online</p>
      <p class="strong">Selamat Membaca</p>

      
<a href="home.php"><button class="button" style="vertical-align:middle"><span>Back Home </span></button></a>

    </div>

  </div>
</div>
</body>