
function showContactModal()
{
  // console.log('')
  $('#exampleModalCenter').modal('show')
}
function toggleContactModal() {
  $('#exampleModalCenter').modal('toggle')
}
function showErrorsModal() {
  $('#errormodal').modal('toggle')
}
function showSidebar(){
  $('.popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}
function hideSidebar(){
  $('.popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}
function toTheId(id) {
  document.getElementById(id).scrollIntoView();
}
function openSidemenu(){


  $('#sidemenu').toggle()
  $('#openbutton').toggle()
  $('#closebutton').toggle()

}
function openSidemenu1(){

  $('#sidemenu1').toggle()

}

  $('#dropdownactivate').click(function(){

    $(".hoverdropdown").toggle();
  });

  $('.dropdownrightactivate').click(function(){

    $(".dropdownright").toggle();
  }

  )
function setCookieSession()
{
  axios
  .get("/cookiesAccept")
  .then(response => {
    return true
  })
  .catch(function(error) {
    console.log(error.response);
  });

  $('#cookiedisclaimer').toggle()
  // $('#cookiedisclaimer').toggle()
  // set the session
}
