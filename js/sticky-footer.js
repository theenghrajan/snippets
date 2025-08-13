$(document).ready(function () {
  //Sticky Footer Code Block Starts
  function stickyFooter() {
    let stickyFooter = $('.sticky-footer')
    let stickyFooterHeight = stickyFooter.innerHeight()
    let siteFooter = $('.site-footer')
    siteFooter.css('margin-bottom', stickyFooterHeight)
  }
  stickyFooter();

  let debounceTimeout
  $(window).on('resize', function () {
    clearTimeout(debounceTimeout)
    debounceTimeout = setTimeout(function () {
      stickyFooter()
    }, 250)
  })
  //Sticky Footer Code Block Ends
})

  < script id = "lead-answer-script"         defer         src = "https://app.leadanswer.io/embed.js"         data - id="bGVhZC1hbnN3ZXItLTI="         data - config="eyJpZCI6IjIiLCJpIjoiTEEiLCJuIjoiKDg1NSkgNTg1LTE2NTgiLCJwYyI6IiM0RkFFN0UiLCJzYyI6IiNmNmY2ZjYifQ==" ></ >