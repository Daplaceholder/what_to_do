<template>
    <div style="width:100%;">
        <div>
            <header>
                <div class="main">
                    <img src="(../assets/photos/shlg.png)" class="logo" >
                    <nav class="navigation menu">
                        <ul>
                            <li><a href="/ships/" >Ships</a></li>
                            <li><a href="/crew/">Crew</a></li>
                            <li><a href="/routes/">routes</a></li>
                            <li><a href="/works/">works</a></li>
                            <li><a href="/duty/">duty</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
       
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>ABOUT US</h4>
                        <ul>
                            <P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>INFORMATION</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>CONTACT US</h4>
                        <ul>
                            <p>Call us at 800-123-4567
                            123 New Lenox, Chicago, IL 60606
                            info@yoursite.com

                            </p>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>SOCIALS</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</template>

<script >

import Vue from 'vue'
import ships from "./ships.vue" 
import crew from "./crew.vue" 
import routes from "./routes.vue" 
import works from "./works.vue" 
import duty from "./duty.vue" 

export default ({
    components:{
        ships,
        crew,
        routes,
        works,
        duty
    },
    computed: {
        isShip() {
            if (window.location.pathname =='/ships/'){
                return true;
            }
            
        },
        isCrew() {
            if (window.location.pathname =='/crew/'){
                return true;
            }
            
        },
        isRoutes() {
            if (window.location.pathname =='/routes/'){
                return true;
            }
            
        },
        isWorks() {
            if (window.location.pathname =='/works/'){
                return true;
            }
            
        },
        isDuty() {
            if (window.location.pathname =='/duty/'){
                return true;
            }
            
        },
    }
})

</script>
<style scoped>
.mainBody{
text-align: center;
}
.menu{
width: 450px;
display: flex;
flex-direction: row;
justify-content: space-evenly;
margin-left: auto;
padding: 0 0 50px 0;

}
.main {
	max-width: 1200px;
	margin: auto;
}
header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	box-sizing: border-box;
	background-color: gray;
}
.logo {
	width: 140px;
	float: left;
	padding: 10px 0px 0px 0px;
}

nav ul{
	list-style: none;
	float: right;
	display: flex;
	margin: 0;
	padding: 0;
}

nav ul li a {
	color: #fff;
	padding: 12px 30px;
	text-decoration: none;
	line-height: 130px;
	font-size: 16px;
}

nav ul li a:hover {
	background: rgba(0,0,0,0.2);
	border-radius: 6px;
}

nav ul li a.active {
	background: red;
	color: #fff;
	border-radius: 6px;
}
.container{
	max-width: 1170px;
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
	background-color: #232a34;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
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
.footer-col p{
	font-size: 10px;
	color: #ffffff;
	
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #ffffff;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 10px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color:  #ffffff;
	display: block;
	transition: all 0.3s ease;
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

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}


</style>