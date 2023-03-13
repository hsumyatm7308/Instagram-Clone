
const getmoresettings = document.getElementById('moresettings');
const getmorebtns = document.getElementById('morebtns');

const socialface = document.getElementById('socialface');
const accountprofile = document.getElementById('accountprofile');

getmorebtns.addEventListener("click",function(){
   getmoresettings.classList.toggle('moretoggles');

   
});

socialface.addEventListener('click',function(){
   getmoresettings.classList.add('moretoggles');

})

accountprofile.addEventListener("click",function(){
   getmoresettings.classList.add('moretoggles');
})




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



const postacc = document.querySelectorAll('.postacc');
const hoveracc = document.querySelectorAll('.hoveracc');

postacc.forEach(function(postac,postidx){

    postac.addEventListener('mouseover',function(){
      
         for(var x = 0; x < hoveracc.length; x++){
            if(postidx === x){
              hoveracc[x].classList.add('showacc')

            }else{
              hoveracc[x].classList.remove('showacc')

            }
         }
      
    })


    postac.addEventListener('mouseleave',function(){
      
      for(var x = 0; x < hoveracc.length; x++){
         if(postidx === x){
           hoveracc[x].classList.remove('showacc')

         }
      }
   
 })



})




   















const heart = document.querySelector('.heartnoti');
const blankheart = document.getElementById('blankheart')
const savedmark = document.querySelector('.savedmark');
const bookmark = document.getElementById('bookmark')

for(var x = 0; x < getpostimg.length; x++){
   getpostimg[x].addEventListener("dblclick",function(){
      blankheart.classList.toggle('fa-solid');
      blankheart.classList.toggle('text-red-500')
   });
}

heart.addEventListener("click",function(){      
      blankheart.classList.toggle('fa-solid');
      blankheart.classList.toggle('text-red-500')   
})

savedmark.addEventListener("click",function(){
      bookmark.classList.toggle('fa-solid');
})


const getcomment = document.getElementById('comment');
const commentsubmit = document.querySelector('.commentsubmit');

getcomment.addEventListener('keydown',function(){
   
      //  console.log(getcomment.value.length-1)

       if(getcomment.value.length-1  === 1){
         commentsubmit.style.display = "block";
      
      }else if(getcomment.value.length-1 < 1){
       commentsubmit.style.display = "none";

      }
      
});










const autoyear = document.getElementById("autoyear")
const getyear = new Date().getUTCFullYear()
autoyear.textContent = getyear;
