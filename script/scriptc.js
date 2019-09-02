console.log(window.innerWidth);
console.log(window.innerHeight);
let shirt = document.getElementById('shirt');
let grijs = document.getElementById('grijs');
let geel = document.getElementById('geel');
let groen = document.getElementById('groen');
let rood = document.getElementById('rood');

let imageNames = ["grijsc.png",
  "geelc.png",
  "blauwc.png",
  "roodc.png"
 ];

grijs.addEventListener("click",function(e){
      selectImage(0);    
  });
geel.addEventListener("click",function(e){
      selectImage(1);    
  });
groen.addEventListener("click",function(e){
      selectImage(2);    
  });
rood.addEventListener("click",function(e){
      selectImage(3);    
  });
function selectImage(id){
  shirt.src = "img/crewneck/" + imageNames[id];
  console.log(id);
}