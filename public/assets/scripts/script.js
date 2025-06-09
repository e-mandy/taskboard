let addTask = document.querySelector('.addTasks')
let taskDetails = document.querySelector('.task-details')
let overlay = document.querySelector('.overlay')
let closeDetails = document.querySelector('.close-details')

console.log('hello')

addTask.addEventListener('click', () => {
    taskDetails.classList.toggle('active')
    overlay.classList.toggle('active')
})

closeDetails.addEventListener('click', ()=>{
    taskDetails.classList.remove('active')
    overlay.classList.remove('active')
})