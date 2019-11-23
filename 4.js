function abbreviation(akr) {
    var akronim = akr.match(/\b[A-Z]*/g).join('');
    console.log(akronim);
}

abbreviation("JAwa TIMur");