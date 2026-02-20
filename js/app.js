const cartPred = new Swiper('.cart-popup .cart-pred-slider', {
  speed: 400,
  spaceBetween: 10,
  slidesPerView: 3,
  loop: true,
  navigation: {
    nextEl: '.cart-popup .predlo .next',
    prevEl: '.cart-popup .predlo .prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3
    }
  }
});

const cardPred = new Swiper('.card-popup .cart-pred-slider', {
  speed: 400,
  spaceBetween: 10,
  slidesPerView: 3,
  loop: true,
  navigation: {
    nextEl: '.card-popup .predlo .next',
    prevEl: '.card-popup .predlo .prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3
    }
  }

});


const timePopupTopSlider = new Swiper('.time-popup-top-slider', {
  speed: 400,
  spaceBetween: 10,
  slidesPerView: 'auto',
  navigation: {
    nextEl: '.time-popup .time-top-list .next',
  },
});

const menuSlider = new Swiper('.menu-top-slider', {
  speed: 400,
  spaceBetween: 10,
  slidesPerView: 'auto',
  navigation: {
    nextEl: '.menu-top .container .arrow',
  },
});


const popupOffset = document.querySelector('.offset')
popupOffset.onclick = () => {
  document.querySelectorAll('.popup').forEach((el) => {
    el.classList.remove('active')
  })
  popupOffset.classList.remove('active')
}

function openPopup(popup) {
  popup.classList.add('active')
  popupOffset.classList.add('active')
}
function closePopup(popup, offset = true) {
  popup.classList.remove('active')
  offset ? popupOffset.classList.remove('active') : popupOffset.classList.add('active');
}


const cartPopup = document.querySelector('.cart-popup')
const cartOpen = document.querySelectorAll('.cart-open')
const cartClose = document.querySelectorAll('.cart-close')

cartOpen.forEach((el) => { el.onclick = () => { openPopup(cartPopup) } })
cartClose.forEach((el) => { el.onclick = () => { closePopup(cartPopup) } })

const deliviryPopup = document.querySelector('.deliviry-popup')
const deliviryOpen = document.querySelectorAll('.deliviry-open')
const deliviryClose = document.querySelectorAll('.deliviry-close')

deliviryOpen.forEach((el) => { el.onclick = () => { openPopup(deliviryPopup) } })
deliviryClose.forEach((el) => { el.onclick = () => { closePopup(deliviryPopup, false) } })


const paymentPopup = document.querySelector('.payment-popup')
const paymentOpen = document.querySelectorAll('.payment-open')
const paymentClose = document.querySelectorAll('.payment-close')

paymentOpen.forEach((el) => { el.onclick = () => { openPopup(paymentPopup) } })
paymentClose.forEach((el) => { el.onclick = () => { closePopup(paymentPopup, false) } })



const timePopup = document.querySelector('.time-popup')
const timeOpen = document.querySelectorAll('.time-open')
const timeClose = document.querySelectorAll('.time-close')

timeOpen.forEach((el) => { el.onclick = () => { openPopup(timePopup) } })
timeClose.forEach((el) => { el.onclick = () => { closePopup(timePopup, false) } })

const cardPopup = document.querySelector('.card-popup')
const cardOpen = document.querySelectorAll('.card-open')
const cardClose = document.querySelectorAll('.card-close')

cardOpen.forEach((el) => { el.onclick = () => { openPopup(cardPopup) } })
cardClose.forEach((el) => { el.onclick = () => { closePopup(cardPopup) } })

const loginPopup = document.querySelector('.login-popup')
const loginOpen = document.querySelectorAll('.login-open')
const loginClose = document.querySelectorAll('.login-close')

loginOpen.forEach((el) => { el.onclick = () => { openPopup(loginPopup) } })
loginClose.forEach((el) => { el.onclick = () => { closePopup(loginPopup) } })

const smsPopup = document.querySelector('.sms-popup')
const smsOpen = document.querySelectorAll('.sms-open')
const smsClose = document.querySelectorAll('.sms-close')

smsOpen.forEach((el) => { el.onclick = () => { openPopup(smsPopup) } })
smsClose.forEach((el) => { el.onclick = () => { closePopup(smsPopup, false) } })


const lkPopup = document.querySelector('.lk-popup')
const lkOpen = document.querySelectorAll('.lk-open')
const lkClose = document.querySelectorAll('.lk-close')

lkOpen.forEach((el) => { el.onclick = () => { openPopup(lkPopup) } })
lkClose.forEach((el) => { el.onclick = () => { closePopup(lkPopup, false) } })

const lkselfPopup = document.querySelector('.lk-self')
const lkselfOpen = document.querySelectorAll('.lk-self-open')
const lkselfClose = document.querySelectorAll('.lk-self-close')

lkselfOpen.forEach((el) => { el.onclick = () => { openPopup(lkselfPopup) } })
lkselfClose.forEach((el) => { el.onclick = () => { closePopup(lkselfPopup, false) } })


const historyPopup = document.querySelector('.history-popup')
const historyOpen = document.querySelectorAll('.history-open')
const historyClose = document.querySelectorAll('.history-close')

historyOpen.forEach((el) => { el.onclick = () => { openPopup(historyPopup) } })
historyClose.forEach((el) => { el.onclick = () => { closePopup(historyPopup, false) } })



const selfPopup = document.querySelector('.self-popup')
const selfOpen = document.querySelectorAll('.self-open')
const selfClose = document.querySelectorAll('.self-close')

selfOpen.forEach((el) => { el.onclick = () => { openPopup(selfPopup) } })
selfClose.forEach((el) => { el.onclick = () => { closePopup(selfPopup, false) } })


