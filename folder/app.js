
const getmoresettings = document.getElementById('moresettings');
const getmorebtns = document.getElementById('morebtns');

getmorebtns.addEventListener("click",function(){
   getmoresettings.classList.toggle('moretoggles');
});



const getpostimg = document.querySelectorAll('.socialpost')
const rightarrow = document.querySelector('.fa-circle-chevron-right');
const leftarrow = document.querySelector('.fa-circle-chevron-left');

let curimg = 0;

leftarrow.addEventListener("click",function(){
  curimg--;
  if(curimg < 0){
   curimg = 0;
  }
  socialpostleft();
})

rightarrow.addEventListener("click",function(){

   curimg++;

   if(curimg > getpostimg.length-1){
      curimg = getpostimg.length-1;
   }
   socialpostright();
});


function socialpostright() {
   for(var x = 0; x< getpostimg.length; x++){
    if(x === curimg){
      getpostimg[x].classList.add('postaespa');
      getpostimg[curimg-1].classList.replace('left-full','-left-full');
      getpostimg[curimg-1].style.transition = "all 1s"
    }else{
      getpostimg[x].classList.remove('postaespa');

    }
   }
}



function socialpostleft(){
   for(var x = 0; x < getpostimg.length; x++){
      if(x === curimg){
      getpostimg[x].classList.add('postaespa');
      getpostimg[curimg+1].classList.replace('-left-full','left-full');
      getpostimg[curimg+1].style.transition = "all 1s"


      }else{
         getpostimg[x].classList.remove('postaespa')
      }
   }
}


