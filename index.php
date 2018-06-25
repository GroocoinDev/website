<!DOCTYPE html>
<html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    height: 100%;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
	background-image: url('assets/img/main_bg_4.jpg');
    background-position: center;
	background-size: 100% 120%; 
	background-repeat: no-repeat;
    animation: scaling 70s infinite alternate; 
    -webkit-animation: scaling 70s infinite alternate;
}
@keyframes scaling {0% {transform: scale(1.0);} 50% {transform: scale(1.3);} 100% {transform: scale(1.0);}}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.overlay {
	position: fixed;
	width: 100%; height: 100%;
	left: 0; top: 0;
	background-color: rgba(0,0,0, 0.4);
	overflow-x: hidden;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
	<div class="overlay"></div>	
	<div class="topleft">
		<p>Groocoin</p>
	</div>
	
	<div class="middle">
		<h1>COMING SOON</h1>
		<hr>
		<p>Stay Tuned</p>
	</div>
	
	<div class="bottomleft">
		<p></p>
	</div>
</div>

</body>
</html>
