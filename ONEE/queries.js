var left_side = document.getElementById("left-side");
var _bottom = document.querySelector("#right-side #bottom");
var _top = document.querySelector("#right-side #top");
var container = document.getElementById("container");
var width = window.innerWidth || document.documentElement.clientWidth ||
    document.body.clientWidth;
if(width > 1500)
    width=1500;
container.style.width=width+"px";
var browserHeight = window.outerHeight;
container.style.height=browserHeight+"px";
left_side.style.height=(browserHeight-_top.offsetHeight)+"px";
   bottom.style.height=(browserHeight-_top.offsetHeight-100)+"px";
window.addEventListener("resize", function(event){
    var browserHeight = window.outerHeight;
container.style.height=browserHeight+"px";
    left_side.style.height=(browserHeight-_top.offsetHeight)+"px";
    bottom.style.height=(browserHeight-_top.offsetHeight-100)+"px";
    var width = window.innerWidth || document.documentElement.clientWidth ||
    document.body.clientWidth;
if(width > 1500)
    width=1500;
container.style.width=width+"px";
}, true);

var items = document.getElementsByClassName("item");
for(var i=0; i<items.length; i++){
    var main = items[i].getElementsByClassName("sub-item-main")[0];
    var subs = items[i].getElementsByClassName("sub-item");
    for(var j=0;j<subs.length;j++){
        var element = subs[j];
        Do(element);
    }
    var inner = items[i].getElementsByClassName("inner-items")[0];
    var img = items[i].getElementsByTagName("img")[0];
    var height = inner.offsetHeight;
    inner.style.height="0px";
    setClickEvent(main, inner, height, img, subs);
}
function Do(element){
    element.onmouseover=function(){
        element.getElementsByTagName("img")[0].style.marginLeft="13%";
    };
    element.onmouseout=function(){
        element.getElementsByTagName("img")[0].style.marginLeft="10%";
    };
}
function setClickEvent(main, inner, height, img, subs){
    main.onmouseover = function(){
      img.style.marginLeft="10%";  
    };
    main.onmouseout = function(){
      img.style.marginLeft="5%";  
    };
    main.onclick=function(){
        if(inner.style.height!="0px")
      inner.style.height="0px";        
      else inner.style.height=height;  
    };
}

function Show(id){
    loader.style.display="flex";
     container.style.display="none";
    var button = document.getElementById(id);
    setTimeout(function(){
       button.click();
    }, 500);
}

function ShowDiv(element_id, index){

    document.getElementById(element_id).style.display="flex";
    if(index>-1){
     var inner = items[index].getElementsByClassName("inner-items")[0];
    inner.style.height="auto";
    }
    
}

var loader = document.getElementById("loader");
    
     setTimeout(function(){
       loader.style.display="none";
        container.style.opacity="1";
    }, 100);