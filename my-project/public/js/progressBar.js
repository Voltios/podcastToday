let todosLi = document.querySelectorAll('.navv ul li');
let one = document.querySelector(".navv ul li:first-child")
    // let two = document.querySelector(".navv ul li:nth-child(2)")
    // let three = document.querySelector(".navv ul li:nth-child(3)")
    // let four = document.querySelector(".navv ul li:nth-child(4)")
let five = document.querySelector(".navv ul li:last-child")

let current = document.querySelector('.current')
one.addEventListener('click', () => {
    one == current ? console.log("si") : console.log("no")
})
two.addEventListener('click', () => {
    two == current ? console.log("si") : console.log("no")
})
three.addEventListener('click', () => {
    three == current ? console.log("si") : console.log("no")
})
four.addEventListener('click', () => {
    four == current ? console.log("si") : console.log("no")
})
five.addEventListener('click', () => {
    five == current ? console.log("si") : console.log("no")
})

// for (elem of todosLi) {
//     elem.addEventListener('click', function(e) {
//         e.stopPropagation();
//         console.log(current[0])
//         console.log(elem)
//         current[0] == elem ? console.log("true") : console.log("false")

//     })
// }