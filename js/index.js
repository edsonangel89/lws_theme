let animatedMedia = document.getElementById('animated-media');
let animatedText1 = document.getElementById('animated-text-1');
let animatedText2 = document.getElementById('animated-text-2');
let animatedText3 = document.getElementById('animated-text-3');

animatedMedia.setAttribute('data-aos','fade-up');
animatedMedia.setAttribute('data-aos-duration',"250");
animatedText1.setAttribute('data-aos','fade-left');
animatedText1.setAttribute('data-aos-duration',"400");

animatedText2.setAttribute('data-aos','fade-right');
animatedText2.setAttribute('data-aos-duration',"400");

animatedText3.setAttribute('data-aos','fade-up');
animatedText3.setAttribute('data-aos-duration',"400");

let cover1 = document.getElementById('slide-1');
let cover2 = document.getElementById('slide-2');
let cover3 = document.getElementById('slide-3');

cover1.setAttribute('data-aos', 'flip-up');
cover1.setAttribute('data-aos-duration', '1600');
cover1.style.overflow = 'hidden';
cover2.setAttribute('data-aos', 'flip-right');
cover2.setAttribute('data-aos-duration', '1600');
cover2.style.overflow = 'hidden';
cover3.setAttribute('data-aos', 'flip-down');
cover3.setAttribute('data-aos-duration', '1600');
cover3.style.overflow = 'hidden';

let call = document.getElementById('call-form-container');

call.setAttribute('data-aos', 'zoom-in');
call.setAttribute('data-aos-duration', '650');