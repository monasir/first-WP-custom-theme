const banner = document.querySelector('.overlay');
const header = document.querySelector('.header-big');
const walk = 20;

function shadow(e) {
    if(this == e.target){
    const width = banner.offsetWidth;
    const height = banner.offsetHeight;
    let {offsetX:x,offsetY:y} = e;
    
   
    const xWalk = (x/width * walk) -(walk/2);
    const yWalk = (y/height * walk) -(walk/2);
    console.log(xWalk, yWalk);
    console.log(x, y);
    header.style.textShadow = `${xWalk}px ${yWalk}px 0 rgba(0,0,0,1)`
    }
}

banner.addEventListener('mousemove',shadow);

if(this !== e.target) {
      
    x = x + e.target.offsetLeft;
    y = y + e.target.offsetTop;
    
  }