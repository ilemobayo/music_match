var myArray = [ path + 'reggae.jpg', path + 'rock-scream.jpg ', path + 'hiphop.jpg', path + 'latina.jpg', path + 'funk.jpg', path + 'jazz2.jpg', path + 'groove.png']

var count = 1;

setInterval(function() {
 
  if (count >= myArray.length) count = 0; 
  
  var rand = myArray[count];

  document.getElementById('readyTo').src = rand;
  
  count++;

}, 1500); 