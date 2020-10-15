// var color="red";

// switch(color){
// 	case"bule":
// 	console.log("the sky is blue");
// 	break;
// 	case "red":
// 	console.log("my favorite");
// 	break;
// 	case "green":
// 	console.log("the land is green");
// 	break;
// 	default:
// 	console.log("select a color");
// } 

// var color="red";

// switch(color){
// 	case"bule":
// 	console.log("the sky is");
// 	break;
// 	case "red":
// 	console.log("red");
// 	break;
// 	case "green":
// 	console.log("the land is green");
// 	break;
// 	default:
// 	console.log("select a color");
// } 


// var i = 10;

// while (i <= 20){
// 	document.getElementById("demo").innerHTML +=i+ "","";
// 	console.log(i);
// 	i++;

// }

// var y= 0
// while(y<=100){
// 	document.getElementById("demo").innerHTML +=y + "<br>";
// 	y++; 
// }

// var m=50
// while(m >=0){
// 	document.getElementById("demo").innerHTML+=m + "<br>";
// 	m--;
// }

// var n=70
// while(n >=50){
// 	document.getElementById("demo").innerHTML+=n + "<br>";
// 	n--;
// }

// var i=0
// do{
// 	document.getElementById("demo").innerHTML+= "the number is 20"+ i+ "<br>"; 
// 	i++;                                  
// }
// while(i <=50)

// var e;

// for(e=0; e <=100;	e++){
// 	document.getElementById("demo").innerHTML+= e +"<br>";
// }


// var g= 2
// while(g>=300){
// 	document.getElementById("demo").innerHTML +=g + "<br>";
// 	g++; 
// 

//function

// function greeting(){
// 	alert("Good Morning");
// }

// function sum(a,b) {
// 	var sum = a+b;
// 	console.log(sum);
// 	return sum;
// }

// function userData(name,age,gender,email,){
// 	document.getElementById("demo").innerHTML="my name is"  +name +  "iam" +  age +  "years old. iam a" +  gender +  ".this is my email :"+email;
// }

// var always= new Function("x","y","return x+y;") ;
// function check(){
// 	var checkAways=always(10,20);
// 	alert(checkAways);

// 	return checkAways;
// }


// object

// var laptop = {
// 	camera:"2mp", 
// 	keyboard:"us",
// 	charger:"pin",
// 	amount: 5000,
// };

// // console.log(laptop.camera);
// document.getElementById("demo").innerHTML+=laptop.camera,
// document.getElementById("demo").innerHTML+=laptop["amount"];


// var user={
// 	name:"daniel",
// 	age:27,
// 	hairColor:"brown",
// 	eyeColor:"bule",
// 	dob: "31st feb 1772",
// 	color:function(){
// 		return this.eyeColor +","+ this.hairColor;
// 	},
// };



// var array=["hp", "dell", "mac", "lenovo", "acre", "samsung"];
// document.getElementById("demo").innerHTML+=array[5];

// array[1]="Toshiba";
// document.getElementById("demo").innerHTML+=array.length;

// array.push("Huawei")
// document.getElementById("demo").innerHTML+=array[1];

// for(var i=0; i <array.length; i++){
// document.getElementById("demo").innerHTML+=i + "," + array[i] + "<br>";



// var array=["posh","larry","marcas","car","dell", "Huawei"];
// document.getElementById("demo").innerHTML+=array[5];

// array.join("benzi")
// document.getElementById("demo").innerHTML+=array[1]

// document.getElementById("demo").innerHTML =new Date();

// var d=new Date();
// document.getElementById("demo").innerHTML =d.getDate;

//geeting date using switch


var date=new Date();
// switch(date=new Date()){
// 	case 0:
// 	alert("its sunday");
// 	break;
// 	case 1:
// 	alert("its monday");
// 	break;
// 	case 2:
// 	alert("its Tuesday");
// 	break;

// 	case 3:
// 	alert("its Wensdays");
// 	break;
// 	case 4:
// 	alert("its Thuresday");
// 	break;
// 	case 5:
// 	alert("its friday");
// 	break;

// 	case 6:
// 	alert("its staturday");
// 	break;
// 	default("whats is today");
// }

// switch(date.getDay()) {
// 	case 0 :

// 	document.getElementById("demo"). innerHTML= "Go to church";
// 	break;
// 	case 1:
// 	case 2:
// 	case 3:
// 	case 4:
// 	document.getElementById("demo"). innerHTML= "its is a working day";
// 	break;
//     case 5:
//     document.getElementById("demo"). innerHTML= "TGIF";
//     break;
//     case 6:
//     document.getElementById("demo"). innerHTML= "its is staturday";
//     break;
//     default:
//     document.getElementById("demo"). innerHTML= "What happen";
// }

// document.getElementById("demo").style.color="red";

// var x= document.getElementById("demo");
// x.style.backgroundColor="green";

// // var x=document.getElementById("demo").fontsize=27;
// // x.style.fontSize=:27;

// var img = document.getElementById("img");
// img.src="image/code.jpg";
// img.style.width= "200px"


// function changeBg() {
// 	var body=document.getElementById("body");
// 	body.style.backgroundColor="gray";
// }
// event

// var name=document.quarySelector("#firstname");
// var fname=name.valve;
// function myForm() {
// 	alert("showpassword" + fname);

// }

// var body = document.getElementsByTagName("body");

// var night = document.querySelector(".night");
// night.onclick = function() {
// 	body[0].style.backgroundColor = "#000";
// };

// var day = document.querySelector(".day");
// day.onclick = function() {
// 	body[0].style.backgroundColor="yellow";
// }

// var noon = document.querySelector(".noon");
// noon.onclick = function() {
// 	body[0].style.backgroundColor="blue";
// };

// const buttons =document.querySelectorAll(".mode");
// for(let i = 0; i<= buttons.length; i++) {
// 	buttons[i].style.color = "red";
// }

const par = document.getElementsByTagName("p");
const sel = document.querySelector("#sel")

// sel.onchange = function() {
// 	par[0].style.fontSize = sel.value;
// 	console.log(sel.valve)
// };

// const con = document.querySelector("confirm");
// con onclick = function() {
// if( confirm("Do you lie reading with red text")) {
// 	par[0].style = "red";
// 	else{
// 		par[0].style.color = "bule";
// 	}
// };

// const myText= document .querySelector(".text");

// myText.addEventListener("click", function () {
// 	par[1].innerHTML = "this is me";
// });

// myText.addEventListener("mouseover", function () {
// 	par[1].style.color = "orange";
// });

// myText.addEventListener("click", () => alert("this is daniel"));

// myText.addEventListener("click", () =>{
// alert("i am daniel");
// });
 // const xy = () => prompt("Enter Your Name");

 // myText.addEventListener("click" , xy);

const newsLetter = document.querySelector("#newsletter");
const closeLetter = document.querySelector("#close");

const showLetter = () => {
	newsLetter.style.display = "block";
};

setTimeout(showLetter, 10000);

closeLetter.addEventListener("click" , () => {
	newsLetter.style.display = "none" ;
});