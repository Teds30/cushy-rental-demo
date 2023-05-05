$('.stepper-btn-plus, .stepper-btn-minus').on('click', function (e) {
    console.log('asd')
    const isNegative = $(e.target)
        .closest('.stepper-btn-minus')
        .is('.stepper-btn-minus')
    const input = $(e.target).closest('.stepper').find('input')
    if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
})
