"use strict"

 function sqr(number)
{
    return number * number;
}

console.log('Kvadrat 9 =' + sqr(9));


//возращение 2х цифр
function sum(number1, number2)
{
    return number1 + number2;
}
var resultP = document.getElementById('results');

resultP.innerHTML = '2 + 15 =' + sum(2, 15);

//vozroshenie dnya nedeli

function dayOfWeek(day)
{
switch (day) {
    case 1: return 'Monday';
    case 2: return 'Tuesday';
    case 3: return 'Wed';
    case 4: return 'Thur';
    case 5: return 'Fri';
    case 6: return 'Saturday';
    case 7: return 'Sunday';
}
        return 'Wrong day';
}
resultP.innerHTML += '<br>'
resultP.innerHTML += 'Day is (2): ' + dayOfWeek(2);

resultP.innerHTML += '<br>'
resultP.innerHTML += 'Day is (15): ' + dayOfWeek(15);


function factorial(value)
{
    var ret;

    if (value < 1) {
        ret = null;
    } else if (value == 1) {
        ret = 1;
    }
        else {
        ret = value * factorial(value - 1)
}
return ret;
}

resultP.innerHTML += '<br>'
//debugger;  //ostanovka
    resultP.innerHTML += 'Factorial 5:' + factorial(5);


//var hello = "Привет, мир!";

//alert( hello.toUpperCase() ); // "ПРИВЕТ, МИР!"

//var n = 12.345;

//alert( n.toFixed(9) ); // "12.34500000"

//alert( 3e9 ); // 300000

//alert( Infinity ^ 0 );


//rebus
//var str = "строкаVak";

//str = str[6] + str[7] + str[8];

//alert( str ); // ока



