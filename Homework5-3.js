//                      Задача 1 (3я ссылка)
//  Создайте ассоциативный массив содержащий описание человека.
// Задайте поля: имя, возраст, пол, индивидуальный номер.
// Заполните массив. Выведите его в консоли.

var user = {};
user.name = 'Илларион';
user.age = '57';
user.gender = 'мужской';
user.number = '349811002';

console.log(user);


//                      Задание 2
//Добавьте в массив метод, который будет рассчитывать год рождения человека исходя из его возраста и возвращать его.

var YearBirth = 2018 - user.age;
user.YearB = YearBirth
console.log(user.YearB);



//                      Задание 3
//Создайте ассоциативный массив свойство mas которое содержит массив чисел (любого количества),
//добавьте метод, который выводит сумму чисел содержащихся в mas.

//var mas = [5, 6, 34, 12, 45, 99, 104, 3, 1];

//var sum = 0;
//for (var i = 0; i < mas.length; i++) {
//    sum += mas[i]; }

//    console.log(sum);


var arr = {
    mas: [5, 6, 34, 12, 45, 99, 104, 3, 1]
};

arr.sum = function () {
    var res = 0;

    this.mas.forEach(function(value){
        res += value;
    });
  return res;
};
alert('sum:' + arr.sum());


//                      Задание 4
// Создайте массив, ключами которого служат артикулы товара (любое пятизначное число),
// а значениями – ассоциативный массив, который содержит название товара, стоимость,
// вес единицы товара, ссылку на изображение, отметку о доступности товара на складе.

//document.write(obj[10001].masa + '<br>'); << Для себя
//result.innerHTML = 'Photo: < img src="' + obj[10001].ssilka + '"> <br>'; << ili tak

//Выведите массив в консоль. Выведите на страницу HTML описание первого товара.


var obj = {
            10001: {name: 'креветка', price: '149.00', masa: '2 kg', ssilka: 'https://github.com/MishaPoliv/skillup-php/tree/homework5forLe5/krevetka.jpg', ready: 'Yes'},
            51000: {name: 'Треска', price: '53.40', masa: '1 kg', ssilka: 'https://github.com/MishaPoliv/skillup-php/tree/homework5forLe5/treska.jpg', ready: 'No'},
            89625: {name: 'Якорь', price: '2999.99', masa: '60 kg', ssilka: 'https://github.com/MishaPoliv/skillup-php/tree/homework5forLe5/yakor.jpg', ready: 'Yes'},
            71755: {name: 'Леска', price: '70.00', masa: '0.12 kg', ssilka: 'https://github.com/MishaPoliv/skillup-php/tree/homework5forLe5/leska.jpg', ready: 'Yes'}
    };

console.log(obj);
 //<<  ili tak

for (art in obj) {
    document.write(obj[art].name + '<br>');
    document.write(obj[art].price + '<br>');
    document.write(obj[art].masa + '<br>');
    document.write('Photo: <img src="' + obj[art].ssilka + '"> <br>');
    document.write(obj[art].ready + '<br>');
    document.write('<hr>');
}


//                        Задача  5
// Дан ассоциативный массив. Выведите его на страницу html в формате ключ — значение. Каждый элемент с новой строки.
document.write('<br>');

var day = {
    "d1" : "Понедельник",
    "d2" : "Вторник",
    "d3" : "Среда",
    "d4" : "Четверг"
};

for (var i = 1; i < 5; i++) {

    document.write('<br>');
    document.write('"' + "d"+i + '"' + ' - ');
document.write(day["d" +i]);
}


//                        Задача  6
//Дан ассоциативный массив. Выведите его на страницу html в формате ключ *** значение. Каждый элемент с новой строки.
document.write('<br>');


var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};
for (var i = 1; i < 7; i++) {


    document.write('<br>');
    document.write('"' + "d"+i + '"' + ' *** ');
    document.write(arr[i]);
}



//                          Задание 7
// Дан ассоциативный массив. Выведите его в консоль.
// Преобразуйте строку и сохраните в LocalStorage под именем mass.
// Считайте из LocalStorage запись mass.
// Выведите в консоль. Преобразуйте в массив и повторите вывод в консоль.

{
    var arr = {
        "k1" : "17w4",
        "k2" : "1sfsg7",
        "k3" : "17nd",
        "k16" : "1237",
        "k14" : "1w37",
        "3k1" : "1wrw7"
    };
}

console.log(arr);

//                      Задание 8
// Дан массив товаров, выведите товары на страницу цены которых больше 20
var goods = {
    "dd" : {
        "name": "Яблоки",
        "cost": 13
    },
    "dc" : {
        "name": "Груши",
        "cost": 23
    },
    "cd" : {
        "name": "Абрикосы",
        "cost": 33
    },
    "dee" : {
        "name": "Сливы",
        "cost": 43
    },
    "dd2" : {
        "name": "Вишни",
        "cost": 19
    },
};

for (var i = 0; i < 5; i++) {
    if (goods["cost"] > 20)
    {
document.write('<br>');
document.write(goods[]);
    }
}


//                          Задание 9
// Дан массив товаров, выведите товары на страницу HTML,
// цены которых лежат в диапазоне от 220 до 300 и количество (amount) больше 200

var goods = {
    "apple" : {
        "name": "Яблоки",
        "cost": 230,
        "amount":300
    },
    "pear" : {
        "name": "Груши",
        "cost": 34,
        "amount":100
    },
    "apricot" : {
        "name": "Абрикосы",
        "cost": 23,
        "amount":170
    },
    "plum" : {
        "name": "Сливы",
        "cost": 21,
        "amount":250
    },
    "cherry" : {
        "name": "Вишни",
        "cost": 19,
        "amount":312
    },
};

for (var i = 0; i < 5; i++) {
    if (350 > goods["cost"] > 220);
    {
        document.write('<br>');
        document.write(goods);
    }
}


