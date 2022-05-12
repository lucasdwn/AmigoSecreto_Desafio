div{
    justify-content: space-around;
    display: flex;
    flex-direction: column;
}
.titulo {
    display: flex;
    justify-content: space-around;
    color: #288B3A;
    font-size: 50px;
    letter-spacing: 3px;
    text-align: center;
}
div{
    border-radius: 20px;
    color: #fff;
    margin: auto;
    margin-top: 10px;
    width: 90%;
    display: flex;
    flex-direction: column;
    background: #1c1c31a8;
}
.cad{
    margint-top: 10px;
    margin-bottom: 10px;
    border: 1px solid #fff;
    text-align: center;
}
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text], input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

.text{
    font-size: 30px;
}

@media(max-width: 498px){
  
  .titulo {
  display: flex;
  justify-content: space-around;
  color: #288B3A;
  font-size: 35px;
  letter-spacing: 1px;
  text-align: center;
  }

  .logo{
  color: #288B3A;
  font-size: 15px;
  letter-spacing: 2px;
  text-align: center;
  }
  
  .nav-bar li{
  letter-spacing: 1px;
  margin-right: 10px;
  font-size: 15px;
  text-align: center;
  }

} 

@media(max-width: 414px){ /** IPHONE 6/7/8 Plus */
  
  .titulo {
  display: flex;
  justify-content: space-around;
  color: #288B3A;
  font-size: 35px;
  letter-spacing: 1px;
  text-align: center;
  }

  .logo{
  color: #288B3A;
  font-size: 15px;
  letter-spacing: 2px;
  text-align: center;
  }
  
  .nav-bar li{
  letter-spacing: 1px;
  margin-right: 10px;
  font-size: 15px;
  text-align: center;
  }

} 

@media(max-width: 375px){ /** IPHONE X */
   
   .titulo {
   display: flex;
   justify-content: space-around;
   color: #288B3A;
   font-size: 30px;
   letter-spacing: 3px;
   text-align: center;
   
   }
   
   .logo {
   color: #blue;
   font-size: 15px;
   letter-spacing: 1px;
   text-align: center;

   }
   
   .nav-bar li {
   letter-spacing: 1px;
   margin-right: 10px;
   font-size: 15px;
   text-align: center;
   }

} 


@media(max-width: 320px){ /** MOBILE S */
  
  .titulo {
  display: flex;
  justify-content: space-around;
  color: #288B3A;
  font-size: 25px;
  letter-spacing: 3px;
  text-align: center;
  }

  .logo{
  color: #288B3A;
  font-size: 13px;
  letter-spacing: 2px;
  }

  .nav-bar li{
  letter-spacing: 1px;
  margin-right: 10px;
  font-size: 10px;
  text-align: center;
  }  

} 