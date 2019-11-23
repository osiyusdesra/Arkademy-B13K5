function pairsocks(socks, a, b, i, j) {

    let pair = socks.filter((a, i) => socks.some((b, j) => b === a && i !== j));
    let total = pair.length / 2;
    console.log((Math.floor(total) + " pair"));
}

pairsocks([5, 13, 7, 5, 9, 20, 9, 5, 14]); //input array angka-angka disini (dalam kurung siku)