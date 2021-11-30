$(document).ready(function() {

    let bodyHeight = $(document).outerHeight()
    let footerheight =  $('#colorlib-footer').outerHeight()

    let bodyWrapperHeight  = bodyHeight - footerheight
    $('#body-wrapper').css('height' , `${bodyWrapperHeight}px`)
})