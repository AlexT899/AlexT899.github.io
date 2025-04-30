// let o = [
//   {
//     name: "Alex",
//     job: " Junior Developer",
//     salary: 50000 + "$",
//   },
//   {
//     name: "John",
//     job: "Senior Developer",
//     salary: 60000 + "$",
//   },
// ];
// for (let i = 0; i < o.length; i++)
//   console.log(o[i].name + " " + o[i].job + " " + o[i].salary);

// let arr = [4, 5, 6, 3, 5, 3, 33];
// if (arr[2] > 8) {
//   console.log("Third number greater than 8");
// } else {
//   console.log("Third number smaller then 8");
// }
// if (arr[2] > 8 && arr[3] > 8) {
//   console.log("6 or 3 number greater than 8");
// } else {
//   console.log("6 or 3 number smaller then 8");
// }
// if (arr[2] > 5 || arr[3] > 5) {
//   console.log("6 или 3 больше 5");
// } else {
//   console.log("6 или 3 меньше 5");
// }

// function pin() {
//   let randomPin = "";
//   for (let i = 0; i < 4; i++) {
//     randomPin += Math.floor(Math.random() * 9);
//   }
//   console.log(randomPin);
// }
// pin();

// function randomString(len) {
//   let letters = "asdfghjklzxcvbnmqwertyuiop";
//   let randomElement = "";
//   for (i = 0; i < len; i++) {
//     let randomIndex = Math.floor(Math.random() * letters.length);
//     randomElement += letters[randomIndex];
//   }
//   console.log(
//     "Рандомная строка" +
//       " " +
//       randomElement +
//       " " +
//       "Состоит из" +
//       " " +
//       len +
//       " " +
//       "символов!"
//   );
//   // console.log(`Random string ${randomElement} consist of ${len} symbols`);
// }
// randomString(12);

// function userName(str, count) {
//   let specialSymbol = ["!", "£3", "$5", "&*", "()"];
//   let randomUsername = "";
//   let randomElement = "";
//   for (i = 0; i < count; i++) {
//     let randomIndex = Math.floor(Math.random() * specialSymbol.length);
//     randomElement += specialSymbol[randomIndex];
//     randomUsername = str + randomElement;
//   }
//   console.log(randomUsername);
// }
// userName("ASDF", 3);

// let arr = [4, 5, 6, 3, 5, 3, 33];
// if (arr[2] > 8) {
//   console.log("3 число больше 8");
// } else {
//   console.log("3 число меньше 8");
// }
// if (arr[2] > 8 && arr[3] > 8) {
//   console.log("3 или 4 число больше 8");
// } else {
//   console.log("3 или 4 число меньше 8");
// }
// if (arr[2] > 5 || arr[3] > 5) {
//   console.log("3 или 4 число больше 5");
// } else {
//   console.log("3 или 4 число меньше 5");
// }
