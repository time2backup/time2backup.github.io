/*
 *  time2backup scripts
 */

// function to check client OS
function client_os() {

  // get OS
 	var os = navigator.platform;

  // OS detection RegExp
 	var pattern1 = new RegExp('win', 'i');
 	var pattern2 = new RegExp('mac', 'i');
 	var pattern3 = new RegExp('linux', 'i');

 	if (pattern1.test(os)) {
    return 'Windows';
  } else if (pattern2.test(os)) {
    return 'macOS';
  } else {
    if (pattern3.test(os)) {
      return 'Linux';
    } else {
      return 'Other';
    }
  }
}


// at page loading
$(document).ready(function() {

  // get client OS
  var os = client_os();

  switch(os) {
    case 'Windows':
      // change the script name to be executed
      $('#script-name').html('install.bat');
    case 'macOS':
      // Windows & macOS: change label of the download button
      $('#download-button').attr('href', $('#download-button').attr('href') + '?os=' + os);
      $('#download-button').html($('#download-button').html() + ' for ' + os);
  }
});
