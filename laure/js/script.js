// Created for codepad.co
// https://codepad.co/snippet/aSiGmsBE

var audio = new Audio('../laure/mp3/haude.mp3');
audio.volume = 0.1;
audio.play();

$('.trigger').click(function() {
  if (audio.paused == false) {
      audio.pause();
      $('.fa-play').show();
      $('.fa-pause').hide();
      $('.music-card').removeClass('playing');
  } else {
      audio.play();
      $('.fa-pause').show();
      $('.fa-play').hide();
      $('.music-card').addClass('playing');
  }
});

var imgs= document.getElementById('images1');

var element = document.getElementsByClassName('item');
console.log(imgs.children.length);
for (var i=0; i<imgs.children.length ;i++)
{
  if(i % 2 == 0)
  {
    var overlay = document.createElement('div');
    overlay.setAttribute("class","overlay1");
    // document.getElementsByClassName("overlay1").style.pos;
    element[i].appendChild(overlay);
  }
}

var imgs2= document.getElementById('images2');
var element = document.getElementsByClassName('follow-item');
for (var i=0; i<imgs2.children.length ;i++)
{
  if(i % 2 == 0)
  {
    var overlay = document.createElement('div');
    overlay.setAttribute("class","overlay1");
    element[i].appendChild(overlay);
  }
  else
  {
    element[i].style.filter="grayscale(100%)";
  }
}



function opentab(evt,time)
{
  var i,contents,tablinks;
  contents = document.getElementsByClassName("content");
  for (i = 0 ; i < contents.length ; i++)
  {
    contents[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks1");
  for (i= 0 ; i < tablinks.length ; i++)
  {
    tablinks[i].className = tablinks[i].className.replace("active","")
  }
  document.getElementById(time).style.display = "flex";
  evt.currentTarget.className +=" active";
}
document.getElementById("defaultOpen").click();