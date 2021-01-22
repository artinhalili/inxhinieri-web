const slide = document.querySelector('.image-slide');
const images = document.querySelectorAll('.image-slide img');

//buttons

const prevBtn = document.querySelector('#prevButton');
const nextBtn = document.querySelector('#nextButton');

let count = 1;
const size = images[2].clientWidth;

slide.style.transform = 'translateX('+(-size * count)+ 'px)';

//btn listeners

nextBtn.addEventListener('click', ()=>{
    if (count >= images.length - 1)return;

   slide.style.transition = "transform 0.5 ease-in-out";
   count++;
   slide.style.transform = 'translateX(' + (-size * count) + 'px)';
});

prevBtn.addEventListener('click', ()=>{
    if (count <= 0)return;
    slide.style.transition = 'transform 0.4 ease-in-out';
    count--;
    slide.style.transform = 'translateX(' + (-size * count) + 'px)';
});

slide.addEventListener('transitionend', ()=>{
   if (images[count].id === 'lastClone'){
       slide.style.transition = 'none';
       count = images.length - 2 ;
       slide.style.transform = 'translateX(' + (-size * count) + 'px)';
   }
    if (images[count].id === 'firstClone'){
        slide.style.transition = 'none';
        count = images.length - count ;
        slide.style.transform = 'translateX(' + (-size * count) + 'px)';
    }
});