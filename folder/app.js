
const getmoresettings = document.getElementById('moresettings');
const getmorebtns = document.getElementById('morebtns');

getmorebtns.addEventListener("click",function(){
   getmoresettings.classList.toggle('moretoggles');
});



const getpostimg = document.querySelectorAll('.socialpost')
const rightarrow = document.querySelector('.fa-circle-chevron-right');
const leftarrow = document.querySelector('.fa-circle-chevron-left');

const getdots = document.querySelectorAll('.dots')

let curimg = 0;
let actcolor = 0;

leftarrow.addEventListener("click",function(){
  curimg--;
  actcolor--;
  if(curimg < 0){
   curimg = 0;
  }
  socialpostleft();
  dotsfun();
})

rightarrow.addEventListener("click",function(){

   curimg++;
   actcolor++;

   if(curimg > getpostimg.length-1){
      curimg = getpostimg.length-1;
   }
   socialpostright();
   dotsfun();
});


function socialpostright() {
   for(var x = 0; x< getpostimg.length; x++){
    if(x === curimg){
      getpostimg[x].classList.add('postaespa');
      getpostimg[curimg-1].classList.replace('left-full','-left-full');
      getpostimg[curimg-1].style.transition = "all 1s";
    }else{
      getpostimg[x].classList.remove('postaespa');

    }

    if(curimg >= 1){
      leftarrow.style.display = 'block';
    }

    if(curimg >= 4){
      rightarrow.style.display = "none"
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


      if(curimg < 1){
         leftarrow.style.display = "none";
      }

      if(curimg < 4){
         rightarrow.style.display = "block"
      }
    


   }
}


function dotsfun(){
   for(var x = 0; x < getdots.length; x++){
      if(x === actcolor){
         getdots[x].classList.add('active-color');
      }else{
         getdots[x].classList.remove('active-color');
      }
   }

}


const heart = document.querySelector('.heartnoti')

for(var x = 0; x < getpostimg.length; x++){
   getpostimg[x].addEventListener("dblclick",function(){
      // heart.style. = "red";
      heart.innerHTML = `<i class="fa-solid fa-heart text-red-500 mr-2"></i>`
   });
}


