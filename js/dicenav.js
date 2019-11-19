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
    placeholder.style.left="8px";
    placeholder.innerHTML = number;
  }
  else{
    placeholder.style.left="3px";
    placeholder.innerHTML = number;
  }

}

var button = document.getElementById('navi');

button.onclick = function() {
  var result = dice.roll();
  printNumber(result);
};
