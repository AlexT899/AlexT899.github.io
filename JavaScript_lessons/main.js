// Урок 1

// function square(a) {
//   let x = a * a;
//   // console.log("Square is equal " + x);
//   console.log(`Square is equal ${x}`); //  это назвается интэрполяция. это когда во внутрь строки зашиваем переменную через знак $ и математические скобки.
// }
// square(5);
// function arrLength(arr) {
//   console.log(arr.length);
// }
// arrLength([5, 6, 7]);
// let arr = [5, 6, 7, 8];
// arrLength(arr);

//Урок 2
// console.log(1 === "1");
// let o = {
//   name: "Alex",
//   country: "Ireland",
//   job: "Software Developer",
// };

// let o2 = [
//   {
//     name: "Alex",
//     age: 35,
//   },
//   {
//     name: "Josh",
//     age: 20,
//   },
// ];
// // console.log(o2[1].name);
// for (let i = 0; i < o2.length; i++) {
//   console.log(o2[i].name + " " + o2[i].age); // конкатенация
// }

// let x = "55";
// let x2 = parseInt(x);
// if (typeof x2 === "number") {
//   console.log("x is number!");
// } else {
//   console.log("x is not a number!");
// }

// let y = 50;
// let a = String(y);
// console.log(typeof a);

// let z = 50;
// let b = z.toString();
// console.log(typeof b);

// let d = 2.145141;
// let d2 = d.toFixed(0);
// console.log(typeof d2);

// let d3 = Math.floor(d);
// console.log(typeof d3);

// let arr = [4, 5, 6, 3, 5, 3, 33];
// if (arr[2] > 8) {
//   console.log(" 3 число больше 8!");
// } else {
//   console.log("3 число меньше 8!");
// }
// if (arr[2] > 8 && arr[3] > 8) {
//   console.log(" 3 и 4 число больше 8!");
// } else {
//   console.log("3 и 4 число меньше 8!");
// }
// if (arr[2] > 5 || arr[3] > 5) {
//   console.log("3 или 4 число больше 5!");
// } else {
//   console.log("3 или 4 число меньше 5!");
// }

// Урок 3"
// function seasons(month, tepmerature) {
//   if (
//     (month == "December" || month == "January" || month == "February") &&
//     tepmerature < 0
//   ) {
//     console.log("Its winter");
//   } else if (
//     (month == "March" || month == "April" || month == "May") &&
//     tepmerature > 10 &&
//     tepmerature < 21
//   ) {
//     console.log("Its spring");
//   } else if (
//     (month == "June" || month == "July" || month == "August") &&
//     tepmerature > 20
//   ) {
//     console.log("Its summer");
//   } else if (
//     (month == "September" || month == "October" || month == "November") &&
//     tepmerature < 20 &&
//     tepmerature > 5
//   ) {
//     console.log("Its Autumn");
//   } else {
//     console.log("Error");
//   }
// }
// seasons("December", 18);

// function guessNumber(number) {
//   let randomNum = Math.floor(Math.random() * 50);
//   console.log(randomNum);
//   if (randomNum == number) {
//     console.log("You win");
//   } else if (number < randomNum) {
//     console.log("Загаданное число больше");
//   } else {
//     console.log("Загаданное число меньше!");
//   }
// }
// guessNumber(2);

// Урок 4
// function playGame(player) {
//   let game = ["Камень", "Ножницы", "Бумага"];
//   let randomIndex = Math.floor(Math.random() * game.length);
//   let randomElement = game[randomIndex];
//   if (randomElement == player) {
//     console.log("Ничья!");
//   } else if (
//     (player == "Камень" && randomElement == "Ножницы") ||
//     (player == "Бумага" && randomElement == "Камень") ||
//     (player == "Ножницы" && randomElement == "Бумага")
//   ) {
//     console.log("Вы Выйграли!");
//   } else {
//     console.log("Вы проиграли!");
//   }
// }
// playGame("Ножницы");

// function userName() {
//   let baseUsername = "username";
//   let specialSymbol = [!", "&", "23", "$!", "£7"];
//   let randomUsername = "";
//   let randomElement = "";
//   for (let i = 0; i < 3; i++) {
//     let randomIndex = Math.floor(Math.random() * specialSymbol.length);
//     randomElement += specialSymbol[randomIndex];
//     randomUsername = baseUsername + randomElement;
//   }

//   console.log(randomUsername);
// }
// userName(); // Усложнить это задание
// Урок 5
// function userName(str, count) {
//   let specialSymbol = ["!", "&", "23", "$!", "£7"];
//   let randomUsername = "";
//   let randomElement = "";
//   for (let i = 0; i < count; i++) {
//     let randomIndex = Math.floor(Math.random() * specialSymbol.length);
//     randomElement += specialSymbol[randomIndex];
//     randomUsername = str + randomElement;
//   }
//   console.log(randomUsername); //
// }
// userName("Alex", 4); //Для добавления специальных символов для username

// function randomString(len) {
//   let letters = "abcdefghijklmnopqrstuvwxyz";
//   let randomElement = "";
//   for (let i = 0; i < len; i++) {
//     let randomIndex = Math.floor(Math.random() * letters.length);
//     randomElement += letters[randomIndex];
//   }
//   console.log(`Рандомная строка ${randomElement} Состоит из ${len} символов`);
// }
// randomString(25); // Задание для вывода рандомных символов
// let randomNumber = Math.floor(Math.random() * 10); //  От 0 до 10
// let randomNumber = Math.floor(Math.random() * 10) + 1; // Это от 1 до 10
// console.log(randomNumber);

// function randomPin() {
//   let pin = "";
//   for (let i = 0; i < 4; i++) {
//     pin += Math.floor(Math.random() * 9);
//   }
//   console.log(pin);
// }
// randomPin(); // для генерации автоматического пин-кода
