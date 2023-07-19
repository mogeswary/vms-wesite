<!DOCTYPE html>
<html lang="en">
<!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8">
    <title>Animated Background using HTML and CSS | No Javascript</title>

<style>
	body{
    background: radial-gradient(circle,#24246e,#06051f);
    height: 100vh;
}
.wrapper span{
    position: fixed;
    top: -120px;
    height: 50px;
    width: 50px;
    z-index: -1;
    animation: animate 10s linear infinite;    
}
.wrapper span:nth-child(1){
    left: 60px;
    animation-delay:0.6s;
    border: 5px solid cyan;
}
.wrapper span:nth-child(2){
    left: 60%;
    animation-delay: 3s;
    width: 60px;
    height: 60px;
    background: #ff4293;
}
.wrapper span:nth-child(3){
    left: 20%;
    animation-delay: 2s;
    border: 5px solid #fff;    
}
.wrapper span:nth-child(4){
    left: 30%;
    animation-delay: 5s;
    width: 80px;
    height: 80px;
    background: #befb46;
}
.wrapper span:nth-child(5){
    left: 40%;
    animation-delay: 1s;
    border: 5px solid #ff4293;
}
.wrapper span:nth-child(6){
    left: 50%;
    animation-delay: 7s;
    border: 5px solid deepskyblue;
}
.wrapper span:nth-child(7){
    left: 60%;
    animation-delay: 6s;
    width: 100px;
    height: 100px;
    background: #ffd59e;
}
.wrapper span:nth-child(8){
    left: 70%;
    animation-delay: 8s;
    border: 5px solid #befb46;
}
.wrapper span:nth-child(9){
    left: 80%;
    animation-delay: 6s;
    width: 90px;
    height: 90px;
    background: cyan;
}
.wrapper span:nth-child(10){
    left: 90%;
    animation-delay: 4s;
    border: 5px solid #fff;    
}
.banner{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.content h2{
    -webkit-text-fill-color: #fff;
    -webkit-text-stroke-width: 3px;
    -webkit-text-stroke-color: #fff;
    font-family: montserrat;
    font-size: 80px;
    text-transform: uppercase;
    letter-spacing: 12px;
    text-align: center;
    line-height: 0.9;
}
.content h2 b{
    -webkit-text-fill-color: transparent;
    font-size: 65px;
}
@keyframes animate{
    0%{
        transform: translateY(0);
        opacity: 1;
    }
    80%{
        opacity: 0.7;
    }
    100%{
        transform: translateY(800px) rotate(360deg);
        opacity: 0;
    }
}

	
</style>
</head>
<body>
    <div class="wrapper">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
</div>
<div class="banner">
	<div class="content">
		<h2>Animated <br>
            <b>background</b>
        </h2>
	</div>
</div>

</body>
</html>
