// alert ('Hi, world'); // proverka komenta
/*
ili tak
 */

var admin, name;
name = 'Vasylyy';
admin = name;

alert (admin);


var age = prompt('возраст?', 18);

var message = (age < 17) ? 'PornHub banned you' :
    (age < 18) ? 'Привет!' :
        (age < 100) ? 'Здравствуйте!' :
            'Какой необычный возраст!';

alert( message );