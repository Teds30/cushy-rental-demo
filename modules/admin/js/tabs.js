function openTab(index) {
    var i
    var x = document.getElementsByClassName('tab-content')
    var y = document.getElementsByClassName('tab')
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'none'
        y[i].classList.remove('tab-selected')
    }
    document.getElementById(`tab-content-${index}`).style.display = 'block'
    document.getElementById(`tab-${index}`).classList.add('tab-selected')
}
