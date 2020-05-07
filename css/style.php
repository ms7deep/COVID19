<style type="text/css">

html{
  scroll-behavior: smooth;
}

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli' ,sans-serif;}

.nav-style{
  background-color: #a29bfe;
}

.nav-style a{
  color: white;
}

a:hover{
  color: blue;
}

/*main-header*/
.main-header{
  height: 450px;
  width: 100%;
}

.rightside h1{
  font-size: 3rem;
}

.cviru img{
  animation: gocorona 3s linear infinite;
}

@keyframes gocorona {
  0% { transform: rotate(0);}
  100% { transform:rotate(360deg); }

}

.leftside img{
  animation: heart 5s linear infinite;
}

@keyframes heart {
  0%{
    transform: scale(.75);
  }

  20%{
    transform: scale(1);
  }

  40%{
    transform: scale(.75);
  }

  60%{
    transform: scale(1);
  }

  80%{
    transform: scale(.75);
  }

  100%{
    transform: scale(.75);
  }
}

/* corona update */

.corona-update{
  margin: 0 0 30px 0;
}

.corona-update h3 {color: #ff7675;}

.corona-update h1 {font-size: 2rem; text-align: center;}

/* about section */

.sub-section{
  background-color: #fbfafd;

}

/*footer*/

.footer-style{
  background-color: #a29bfe!important;
}

.footer-style p{
  margin-bottom: 0!important;
}

/*top btn*/
#myBtn{
  display: none;
  position: fixed;
  bottom: 30px;
  right: 40px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #00A8FF;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 10px;
}

#myBtn:hover{
  background: #606060;
}

/*responsive*/
@media(max-width: 768px)
{
  .main-header{height: 700px; text-align: center}

  .main-header h1{
    text-align: center;
    padding: 0;
    width: 100%;
    font-size: 34px;
  }
}
</style>
