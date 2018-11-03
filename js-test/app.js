// 1. Scrie o functie care sa returneze daca un an este bisect sau nu. Pentru a afla daca un an este bisect sau nu, se aplica regulile urmatoare:

// - anii care sunt divizibili cu 4 sunt ani bisecti
// - *dar* anii care sunt divizibili cu 100 NU sunt ani bisecti
// - *dar* anii care sunt divizibili cu 400 SUNT ani bisecti

function leapYear(year) {
    if (year % 4 === 0 && year % 400 === 0) {
      return true;
    } else if (year % 400 === 0 && year % 100 === 0) {
      return false;
    }
  
    return false;
}

console.log(leapYear(2018));

// 2. Scrie o functie care accepta ca parametru un array si care muta toate "0"-urile la sfarsitul array-ului, lasand celelalte elemente acolo unde sunt

function mutaZero(array) {
    let noZeroArray = [];
    let zeroArray = [];

    for (let i = 0; i < array.length; i++) {
        if (array[i] === 0) {
            zeroArray.push(array[i]);
        } else {
            noZeroArray.push(array[i]);
        }
    }

    return noZeroArray.concat(zeroArray);
}

console.log(mutaZero([false,1,0,1,2,0,1,3,"a"])); // intoarce [false,1,1,2,1,3,"a",0,0]