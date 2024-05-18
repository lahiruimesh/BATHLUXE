<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*---------- FOOTER STYLES START ----------*/

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


.container{
  width: 100%;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 30px 30px;
    margin-top: 100px;
}
.footer-col{
   width: 47%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #967951;
  height: 3px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
  text-wrap: nowrap;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

#appstore {
  width: 300px;
  height: 120px;
  
}
#playstore {
  width: 230px;
  height: 90px;
}
.download {
  margin-top: -40px;
}

.inline-block {
  display: inline-block;
}

 .copyrights{
  display: flex;
  border-top: 1px solid gray;
  width:100%;
  margin:10px auto 0px auto;
  padding-top: 10px;
  color:gray;
  font-size:0.8em;
  justify-content: space-between;
  }

  .left {
    float: left;
  }
  .right {
    float: right;
  }
  
 .right a {
  text-decoration: none;
  color: gray;
  padding-right: 10px;
 }

/*---------- FOOTER STYLES END ----------*/


    </style>

</head>
<body>
    <!-- FOOTER START -->

    <footer class="footer">
        <div class="container">
         <div class="row">
           <div class="footer-col">
             <h4>Contact Us</h4>
             <ul>
               <li><a href="#">Address: No.325 High Level Road, Nugegoda</a></li>
               <li><a href="#">Mobile: 0777626292</a></li>
               <li><a href="#">E-mail: LearningLinkFoundation@gmail.com</a></li>
               
             </ul>
           </div>
           
           <div class="footer-col">
             <h4>Download now</h4>
                <div  class="download">
                    <div class="inline-block"><a href=""><img id="playstore" src="playstore.png"></a></div> 
                    <div class="inline-block"><a href=""><img  id="appstore" src="appstore.png"></a></div>
                </div>
               
             
           </div>
           <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-tiktok"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
           </div>
         </div>
        </div>
        <div class="copyrights">
            <div class="left">© 2024 LerningLinkFoundation.com Pty Ltd. All rights reserved.</div>
            <div class="right"><a href="">Terms of Service</a>  
                <a href="">Privacy Policy</a> 
            </div>
        </div>
     </footer>
   
    <!-- FOOTER END -->


</body>
</html>