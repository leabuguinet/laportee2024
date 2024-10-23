gsap.registerPlugin(ScrollTrigger);
//gsap.registerPlugin(toggleClass)
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";

const menuAnim = {
  
    init () {

      /* Animation of the desktop menu */

        let menuItemWithChildren = document.querySelectorAll('.menu-item-has-children');

        if(menuItemWithChildren){

          var tlmenu = gsap.timeline({
            paused: true
          }); 

          tlmenu.fromTo(".menu-menu-main-container .sub-menu .menu-item", {
            y: -50,
            visibility: "hidden",
            duration: 2.2,
            stagger: 0.1,
          },
          {
            opacity: 1,
            visibility: 'visible',
            duration: 0.5,
            stagger: 0.1,
            y: 0,
          })

          for(let p = 0; p < menuItemWithChildren.length; p++){
            
            menuItemWithChildren[p].addEventListener('mouseenter', () => {
              tlmenu.play();
            })

            menuItemWithChildren[p].addEventListener('mouseleave', () => {
              tlmenu.reverse();
            })
            
          }



        }

        /* Animation of the mobile menu */

        let mobileMenu = document.querySelector(".burger-menu");
        let mobileMenuLink = document.querySelector(".menu-menu-main-container-mobile");

        var tlmenumobileContainer = gsap.timeline({
          paused: true
        })

        tlmenumobileContainer.to('.menu-menu-main-container-mobile .menu',{
          display: 'block'
        })
        .to(".menu-menu-main-container-mobile", {
          height: '100vh',
        })
        .fromTo('.menu-menu-main-container-mobile .menu .menu-item',{
          opacity: 0, 
        }, {
          opacity: 1,
          stagger: 0.2
        })
      
          mobileMenu.addEventListener('click', () => {
          
            mobileMenu.classList.toggle('toggle');
            mobileMenuLink.classList.toggle('mobilemenu-open');

            if(mobileMenu && mobileMenu.classList.contains('toggle') === false) {

              tlmenumobileContainer.timeScale(2).reverse();

            } else {

              tlmenumobileContainer.timeScale(1).play();
            }



          })
        
    }
}

export default menuAnim;
