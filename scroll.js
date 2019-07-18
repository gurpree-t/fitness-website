var tags=document.querySelectorAll('.nav-item');
var button=document.getElementsByClassName('
console.log(tags.length);

for(var i=0;i<tags.length;i++){
tags[i].addEventListener('click',function(event){
event.preventDefault();
var targetSectionId=this.textContent.trim();
var target=document.getElementById("targetSectionId");
console.log(targetSectionId);

var interval=setInterval(function(){
var targetCoordinates=target.getBoundingClientRect();
if(targetCoordinates.top <=0)
{ clearInterval(interval);
  return;
}
window.scrollBy(0,50);
},50);
})
}