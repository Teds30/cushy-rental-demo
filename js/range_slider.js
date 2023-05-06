window.onload = function () {
    slideOne()
    slideTwo()
    console.log('i run')
}
let sliderOne = document.getElementById('slider-1')
let sliderTwo = document.getElementById('slider-2')
let displayValOne = document.getElementById('range1')
let displayValTwo = document.getElementById('range2')
let inputOne = document.getElementById('slider-input-1')
let inputTwo = document.getElementById('slider-input-2')
let minGap = 0
let sliderTrack = document.querySelector('.slider-track')
let sliderMaxValue = document.getElementById('slider-1').max
function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap
    }
    displayValOne.textContent = sliderOne.value
    document.getElementById('slider-input-1').value = sliderOne.value
    // console.log('hi')
    fillColor()
}
function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap
    }
    displayValTwo.textContent = sliderTwo.value
    document.getElementById('slider-input-2').value = sliderTwo.value
    fillColor()
}
function fillColor() {
    percent1 = (sliderOne.value / sliderMaxValue) * 100
    percent2 = (sliderTwo.value / sliderMaxValue) * 100
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #03b077 ${percent1}% , #03b077 ${percent2}%, #dadae5 ${percent2}%)`
}

function manualOne() {
    if (inputOne.value > inputTwo.value) {
        inputOne.value = inputTwo.value
    }
    sliderOne.value = inputOne.value
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap
    }
    displayValOne.textContent = sliderOne.value
    fillColor()
}
function manualTwo() {
    // if (inputOne.value > inputTwo.value) {
    //     inputTwo.value = inputOne.value
    // }
    sliderTwo.value = inputTwo.value
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap
    }
    displayValTwo.textContent = sliderTwo.value
    fillColor()
}
