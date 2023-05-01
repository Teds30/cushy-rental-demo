const showOptions = (id) => {
    const ele = `tr-${id}`
    const data = `data-${id}`

    var element = document.getElementById(ele)
    var details = document.getElementById(data)
    console.log(details)

    if (element.classList.contains('tr-selected')) {
        console.log('yes')
        element.classList.remove('tr-selected')

        details.style.display = 'none'
    } else {
        console.log('no')
        element.classList.add('tr-selected')

        details.style.display = 'flex'
    }
}
