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
.edit{
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

@media(max-width: 626px){ /** IPHONE 6/7/8 Plus */
  
  .titulo {
  display: flex;
  justify-content: space-around;
  color: #288B3A;
  font-size: 35px;
  letter-spacing: 3px;
  }

  .logo{
  color: #288B3A;
  font-size: 20px;
  letter-spacing: 2px;
  }
  
  .nav-bar li{
  letter-spacing: 1px;
  margin-right: 10px;
  }

} 

@media(max-width: 478px){ /** IPHONE X */
   
   .titulo {
   display: flex;
   justify-content: space-around;
   color: #288B3A;
   font-size: 30px;
   letter-spacing: 3px;
   }
   
   .logo{
   color: #288B3A;
   font-size: 15px;
   letter-spacing: 2px;
   }
   
   .nav-bar li{
   letter-spacing: 1px;
   margin-right: 07px;
   font-size: 10px;
   }

} 

@media(max-width: 339px){ /** MOBILE S */
  
  .titulo {
  display: flex;
  justify-content: space-around;
  color: #288B3A;
  font-size: 20px;
  letter-spacing: 3px;
  }

  .logo{
  color: #288B3A;
  font-size: 13px;
  letter-spacing: 2px;
 }

  .nav-bar li{
  letter-spacing: 1px;
  margin-right: 04px;
  font-size: 09px;
  text-align: center;
  }  

} 