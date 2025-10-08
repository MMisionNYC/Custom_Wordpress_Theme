'use strict';
const enter = document.getElementById('homepage');
const enterSurpriseOne = document.querySelector('.homeIntro');
const enterSurpriseTwo = document.querySelector('.homeIntroTwo');
const enterSurpriseThree = document.querySelector('.homeCapt');
const enterSurpriseFour = document.querySelector('.spanText');
const navEnter = document.querySelector('.nav');
const navLinks = document.querySelector('.nav__list');
const onScroll = document.querySelectorAll('.textBlock');
const onScrollRight = document.querySelectorAll('.rightTextBlock');
const thirdOnScroll = document.querySelector('.thirdSection');
const scrollOffset = 100;
const scrollOffset2 = 100;
let closestTier = null;
let closestExit = null;
let target = null;
let closestTierExpanded = null;
let closestTierExpandedAdditional = null;
let additionalParagraph = null;
let tripsExpanded = null;
let tripsExpandedHeader = null;
let trips = document.querySelectorAll('.tiers');
let slide = document.querySelectorAll('.mySlides');
let tiers = null;
let tiersExpanded = null;


let whoWeAre = document.querySelectorAll('.whoWeAre');
let whatWeDo = document.querySelectorAll('.whatWeDo');

// let tiersExpandedContainer = null;
let tiersExpandedContainer = document.querySelector('.fourTiers');

// let closeModalBtn = null;
let closeModalBtn = document.querySelectorAll('.tiersExpandedBtn');


let additional = null;
let additionalHeader = null;
const fourTiers = document.querySelector('#fourTiers');
let closeModal = null;
let tiersTrips = null;
const onScrollMenu = [...onScroll];
const onScrollMenuRight = [...onScrollRight];
const submitForm = document.getElementById('submitForm');

console.log(onScroll);
console.log(onScrollRight);

//navbar activate on hover
navEnter.addEventListener('mouseenter', navHover);
function navHover() {
  navEnter.classList.add('navActive');
  navLinks.classList.remove('hidden');
}
navEnter.addEventListener('mouseleave', navRevert);
function navRevert() {
  navEnter.classList.remove('navActive');
  navLinks.classList.add('hidden');
}

if (onScroll.length != '') {
  //Load images on scroll
  const elementInView = (el, offset = 0) => {
    const elementTop = onScrollMenu[0].getBoundingClientRect().top;
    return (
      elementTop <=
      (window.innerHeight || document.documentElement.clientHeight) - offset
    );
  };
  const displayScrollElement = () => {
    // onScrollMenu.classList.add('onScroll');
    onScrollMenu.forEach(element => {
      element.classList.add('onScroll');
    });
  };
  const hideScrollElement = () => {
    // onScrollMenu.classList.remove('onScroll');
    onScrollMenu.forEach(textBlock => {
      gsap.to(textBlock, {
        x: 300,
        scrollTrigger: {
          trigger: textBlock,
          scrub: true,
        },
      });
    });
    onScrollMenu.forEach(element => {
      element.classList.remove('onScroll');
    });
  };

  const handleScrollAnimation = () => {
    if (elementInView(onScrollMenu, scrollOffset)) {
      displayScrollElement();
    } else {
      hideScrollElement();
    }
  };
  window.addEventListener('scroll', () => {
    handleScrollAnimation();
  });
}
//On scroll rightside text block and images
//Load images on scroll
if (onScrollRight.length != '') {
  console.log(onScrollRight);
  const elementInViewRight = (el, offset = 0) => {
    const elementTopRight = onScrollMenu[0].getBoundingClientRect().top;
    return (
      elementTopRight <=
      (window.innerHeight || document.documentElement.clientHeight) - offset
    );
  };
  const displayScrollElementRight = () => {
    // onScrollMenu.classList.add('onScroll');
    onScrollMenuRight.forEach(element => {
      element.classList.add('onScrollRight');
    });
  };
  const hideScrollElementRight = () => {
    // onScrollMenu.classList.remove('onScroll');
    onScrollMenuRight.forEach(rightTextBlock => {
      gsap.to(rightTextBlock, {
        x: -300,
        scrollTrigger: {
          trigger: rightTextBlock,
          scrub: true,
        },
      });
    });
    onScrollMenuRight.forEach(element => {
      element.classList.remove('onScrollRight');
    });
  };

  const handleScrollAnimationRight = () => {
    if (elementInViewRight(onScrollMenuRight, scrollOffset)) {
      displayScrollElementRight();
    } else {
      hideScrollElementRight();
    }
  };
  window.addEventListener('scroll', () => {
    handleScrollAnimationRight();
  });
}
//navbar responsize resize when scrolled
window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    navEnter.classList.add('onScrollNav');
  } else {
    navEnter.classList.remove('onScrollNav');
    navEnter.classList.add('navHome');
  }
}

//third section homepage load image on scroll
//Load images on scroll
if (thirdOnScroll != null) {
  const elementInView2 = (el, offset2 = 0) => {
    const elementTop2 = el.getBoundingClientRect().top;
    return (
      elementTop2 <=
      (window.innerHeight || document.documentElement.clientHeight) - offset2
    );
  };
  const displayScrollElement2 = () => {
    thirdOnScroll.classList.add('opacity');
  };
  const hideScrollElement2 = () => {
    thirdOnScroll.classList.remove('opacity');
  };
  const handleScrollAnimation2 = () => {
    if (elementInView2(thirdOnScroll, scrollOffset2)) {
      displayScrollElement2();
    } else {
      hideScrollElement2();
    }
  };
  window.addEventListener('scroll', () => {
    handleScrollAnimation2();
  });
}

//functionality to call for openmodal pic elements
function openHomeModal(event) {
  tiersExpandedContainer.removeEventListener('click', openHomeModal, true);
  target = event.target;
  closestTier = target.closest('.tiers');
  trips = closestTier.querySelector('.tiers__trips__paragraphBlock');
  closeModal = closestTier.querySelector('.tiersExpandedBtn');

  closestTier.classList.add('flex');
  closestTier.classList.remove('none');

  trips.classList.remove('none');
  closeModal.classList.remove('none');
  closestTier.classList.add('.expandFourTiers');
  closestTier.scrollIntoView({
    behavior: 'smooth',
  });
  //listen to close
  closeModal.addEventListener('click', function closeModalExpanded(event) {
    closestTier.classList.remove('flex');
    trips.classList.add('none');
    closeModal.classList.add('none');
    closestTier.classList.remove('.expandFourTiers');
    tiersExpandedContainer.scrollIntoView({
      behavior: 'smooth',
    });
    tiersExpandedContainer.addEventListener('click', openHomeModal, true);
  });
}

document.querySelectorAll('.closeModal').forEach(function (closeModal) {
  closestExit = closeModal.addEventListener(
    'click',
    function () {
      //starting root
      // closeModal = closeModal.querySelector('.closeModal');
      tiersTrips = closeModal.parentElement;

      tiers = tiersTrips.parentElement;

      //trips is the paragraph copy
      trips = tiers.querySelector('.tiers__trips__paragraphBlock');

      //trips is the paragraph copy
      trips.classList.add('none');
      //tiersTrips gives tiers__trips so we need to go one level farther up to remove flex, do not remove tiersTrips or tiers wont work
      tiers.classList.remove('flex');

      closeModal.classList.add('none');
      fourTiers.scrollIntoView({
        behavior: 'smooth',
      });

      // console.log(trips);
      console.log(tiers);
      // console.log(closeModal);
    },
    true
  );
});


//I TRAVERSED THE DOM UPON USER CLICK!!!!!!
if (closeModalBtn.length != '') {
  tiersExpandedContainer.addEventListener('click', openHomeModal, true);
}

if (slide.length != '') {  
//slideshow functionality
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName('mySlides');
  // let dots = document.getElementsByClassName('dot');
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  // for (i = 0; i < dots.length; i++) {
  //   dots[i].className = dots[i].className.replace(' active', '');
  // }
  slides[slideIndex - 1].style.display = 'block';
  // dots[slideIndex - 1].className += ' active';
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
}

//functionality for what we do additional photos open modal functionality
function openModalExpanded(event) {
  tiersExpandedContainer.removeEventListener('click', openModalExpanded, true);
  target = event.target;
  closestTierExpanded = target.closest('.tiersExpanded');
  tripsExpanded = closestTierExpanded.querySelector(
    '.tiers__trips__paragraphBlock'
  );

  additional = closestTierExpanded.querySelector('.additional');
  tripsExpandedHeader = closestTierExpanded.querySelector('h2');
  closeModalBtn = closestTierExpanded.querySelector('.tiersExpandedBtn');

  closestTierExpandedAdditional = closestTierExpanded.querySelector(
    '.tiers__tripsAdditional'
  );
  additionalHeader = closestTierExpandedAdditional.querySelector('h2');
  additionalParagraph = closestTierExpandedAdditional.querySelector('.tiers__trips__paragraphBlock');

  closestTierExpanded.classList.add('flex');
  closestTierExpanded.classList.remove('none');

  tripsExpanded.classList.remove('none');
  closestTierExpandedAdditional.classList.remove('none');
  additionalParagraph.classList.remove('none');
  additional.classList.remove('none');
  additionalHeader.classList.remove('none');
  tripsExpandedHeader.classList.remove('none');
  closestTierExpanded.classList.add('flex');
  closeModalBtn.classList.remove('none');
  additional.classList.remove('none');

  closestTierExpanded.classList.add('expandFourTiers');
  closestTierExpanded.scrollIntoView({
    behavior: 'smooth',
  });

  //listen to close
  closeModalBtn.addEventListener('click', function closeModalExpandedAgain(event) {
    //closingFunctionality variables
    closestTierExpanded.classList.remove('flex');
    closestTierExpanded.classList.add('none');

    tripsExpanded.classList.add('none');
    closestTierExpandedAdditional.classList.add('none');
    additionalParagraph.classList.add('none');
    additional.classList.add('none');
    additionalHeader.classList.add('none');
    tripsExpandedHeader.classList.add('none');
    closestTierExpanded.classList.remove('flex');
    closeModalBtn.classList.add('none');
    additional.classList.add('none');

    closestTierExpanded.classList.remove('expandFourTiers');
    tiersExpandedContainer.scrollIntoView({
      behavior: 'smooth',
    });
    tiersExpandedContainer.addEventListener('click', openModalExpanded, true);
  });
}

//What we do additional photo functionality
if (whatWeDo.length != '') {
  tiersExpandedContainer.addEventListener('click', openModalExpanded, true);
}


// homepage functions
if (enter.length != '') {
  function hiThere() {
    enter.classList.add('load'),
      enterSurpriseOne.classList.add('load'),
      enterSurpriseTwo.classList.add('load'),
      enterSurpriseThree.classList.add('load'),
      enterSurpriseFour.classList.add('load');
  }
  //homepage function rolecall
  hiThere();
}
  enter.addEventListener('mouseenter', homeHover);
  function homeHover() {
    enter.classList.add('hover');
  }
  enter.addEventListener('mouseleave', homeRevert);
  function homeRevert() {
    enter.classList.remove('hover');
  }

  // const onScrollMenu = [...onScroll];
  // for (const item of onScrollMenu) console.log(item);

// // if (window.location.href.includes('planATrip' > -1)) {
// // Form Fillout Functionalities
// //form info
// if (submitForm != null) {
//   const form = document.querySelector('form');

//   form.addEventListener('submit', e => {
//     // on form submission, prevent default
//     e.preventDefault();

//     console.log(form.querySelector('input[name="fname"]')); // FOO
//     console.log(form.querySelector('input[name="lname"]')); // BAR
//     console.log(form.querySelector('input[name="email"]')); // FOO
//     console.log(form.querySelector('input[name="participants"]')); // BAR
//     console.log(form.querySelector('input[name="days"]')); // FOO
//     console.log(form.querySelector('input[name="start"]')); // BAR
//     console.log(form.querySelector('input[name="address"]')); // FOO
//     console.log(form.querySelector('input[name="city"]')); // BAR
//     console.log(form.querySelector('input[name="where"]')); // BAR
//     console.log(form.querySelector('input[name="budget"]')); // BAR
//     console.log(form.querySelector('input[name="quote"]')); // BAR
//     console.log(form.querySelector('input[name="themes"]')); // BAR
//     console.log(form.querySelector('input[name="additional"]')); // BAR

//     const formData = new FormData(form);

//     // formdata gets modified by the formdata event
//     console.log(formData.get('fname')); // foo
//     console.log(formData.get('lname'));
//     console.log(formData.get('email')); // foo
//     console.log(formData.get('participants'));
//     console.log(formData.get('days')); // foo
//     console.log(formData.get('start')); // foo
//     console.log(formData.get('address')); // foo
//     console.log(formData.get('city'));
//     console.log(formData.get('where')); // foo
//     console.log(formData.get('budget'));
//     console.log(formData.get('quote')); // foo
//     console.log(formData.get('themes')); // foo
//     console.log(formData.get('additional')); // foo
//   });

//   // formdata handler to retrieve data

//   form.addEventListener('formdata', e => {
//     console.log('formdata fired');

//     // modifies the form data
//     const formData = e.formData;
//     // formdata gets modified by the formdata event
//     formData.set('fname', formData.get('fname').toLowerCase());
//     formData.set('lname', formData.get('lname').toLowerCase());
//     formData.set('fname', formData.get('email').toLowerCase());
//     formData.set('lname', formData.get('participants').toLowerCase());
//     formData.set('fname', formData.get('days').toLowerCase());
//     formData.set('lname', formData.get('start').toLowerCase());
//     formData.set('address', formData.get('address').toLowerCase());
//     formData.set('city', formData.get('city').toLowerCase());
//     formData.set('where', formData.get('where').toLowerCase());
//     formData.set('budget', formData.get('budget').toLowerCase());
//     formData.set('quote', formData.get('quote').toLowerCase());
//     formData.set('themes', formData.get('themes').toLowerCase());
//     formData.set('additional', formData.get('additional').toLowerCase());
//     form.submit();
//   });
// }
// submitForm.addEventListener('submit', validateForm);
// function validateForm() {
//   const enterForm = document.querySelector('.btn.enterSite');
//   var fname = document.forms['planATripForm']['fname'].value;
//   var lname = document.forms['planATripForm']['lname'].value;
//   var email = document.forms['planATripForm']['email'].value;
//   var participants = document.forms['planATripForm']['participants'].value;
//   var days = document.forms['planATripForm']['days'].value;
//   var startLocation = document.forms['planATripForm']['start'].value;
//   let requiredFields = null;

//   if ((fname, lname, email, participants, days, startLocation == '')) {
//     requiredFields === false;
//   } else {
//     requiredFields === true;
//   }

//   if (requiredFields === true) {
//     enterForm.classList.remove('inactiveBtn');
//   }

//   if (requiredFields === false) {
//     alert('Name must be filled out');
//   }
// }

// submitForm.addEventListener('click', validateForm);
// function validateForm() {
//   let x = document.forms['planATripForm']['fname'].value;
//   if (x == '') {
//     alert('Name must be filled out');
//     return false;
//   }
// }
// var fname = document.forms['planATripForm']['fname'].value;
// var lname = document.forms['planATripForm']['lname'].value;
// var email = document.forms['planATripForm']['email'].value;
// var participants = document.forms['planATripForm']['participants'].value;
// var days = document.forms['planATripForm']['days'].value;
// var startLocation = document.forms['planATripForm']['start'].value;

//pixelArt and fineArts pages
// if (window.location.href.includes('pixelArt' || 'fineArts') > -1) {

//   });
