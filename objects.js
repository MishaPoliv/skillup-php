//Мини-задача на синтаксис объектов. Напишите код,
// по строке на каждое действие.

var user = {};                // Создайте пустой объект user.
user.name = 'Visya';         // Добавьте свойство name со значением Вася.
user.surname = 'Petrov';    // Добавьте свойство surname со значением Петров.
user.name = 'Sergey';      // Поменяйте значение name на Сергей.
console.log(user);

user.name = 'pestrov';      // Поменяйте значение name на Сергей.
console.log(user);

delete user.name;         // Удалите свойство name из объекта.
console.log(user);

for (var key in user) {
    alert('svoistvo: ' + key + ', zn4enie: ' + user[key]);
}



//massiv
//var goods = [1, 5, 0, 11, 55];

//alert(goods[goods.length -1]);

var names = ['HTML5', 'CSS3.1', 'JavaScript'];

var nameLengths = names.map(function(name) {
    return name.length;
});

// получили массив с длинами
alert( nameLengths );





