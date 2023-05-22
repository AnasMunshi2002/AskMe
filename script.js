const ratings = document.querySelectorAll('.rating');
const ratingsContainer = document.querySelector('.ratings-container');
const sendBtn = document.querySelector('#send');
const panel = document.querySelector('#panel');
let selectedRating = 'Satisfied';

ratingsContainer.addEventListener('click', (e) => {
    if(e.target.parentNode.classList.contains('rating')) {
        removeActive();
        e.target.parentNode.classList.add('active');
        selectedRating=" Neutral ";
    }
    if(e.target.classList.contains('rating')) {
        removeActive();
        e.target.classList.add('active');
        selectedRating = "Not Satisfied ";
    }

})

sendBtn.addEventListener('click', (e) => {
    panel.innerHTML = `
        
        Thank You!
        
        Feedback : ${selectedRating}
        We'll use your feedback to improve our customer support
    `;
})

function removeActive() {
    for(let i = 0; i < ratings.length; i++) {
        ratings[i].classList.remove('active');
    }
}

