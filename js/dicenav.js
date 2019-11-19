var dice = {
  sides: 20,
  roll: function () {
    var randomNumber = Math.floor(Math.random() * this.sides) + 1;
    return randomNumber;
  }
}
//Prints dice roll to the page

function printNumber(number) {
  var placeholder = document.getElementById('navi');
  if (number<"10"){
    placeholder.innerHTML = " "+number;
  }
  else{
    placeholder.innerHTML = number;
  }

}

var button = document.getElementById('navi');

button.onclick = function() {
  var result = dice.roll();
  printNumber(result);
};
