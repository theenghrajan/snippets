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