// Select your input element.
var name = document.getElementById('name');

// Listen for input event on numInput.
name.onkeydown = function(e) {
    if((e.keyCode > 46 && e.keyCode < 58)
      || (e.keyCode > 95 && e.keyCode < 106) 
      || e.keyCode == 190) {
        return false;
    }
}
