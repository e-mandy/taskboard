let addTask = document.querySelector('.addTasks')
let taskDetails = document.querySelector('.task-details')
let overlay = document.querySelector('.overlay')
let closeDetails = document.querySelector('.close-details')
let inputStatus = document.querySelectorAll('.status')

// console.log('hello')

// addTask.addEventListener('click', () => {
//     taskDetails.classList.toggle('active')
//     overlay.classList.toggle('active')
// })

// closeDetails.addEventListener('click', ()=>{
//     taskDetails.classList.remove('active')
//     overlay.classList.remove('active')
// })

inputStatus.forEach((input) =>{
    if(input.checked){
        input.parentElement.classList.add('active')
    }
    input.addEventListener('change', ()=>{
        
        console.log('I move')
        inputStatus.forEach((radio)=>{
            radio.parentElement.classList.remove('active')
        })

        if(input.checked){
            input.parentElement.classList.add('active')
        }
    })
})

