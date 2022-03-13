function hesab() {
    men_day = document.getElementById("men_date").value;
    men_min = document.getElementById("men_min").value;
    men_max = document.getElementById("men_max").value;

    var m1 = men_min - 18;
    var m2 = men_max - 11;

    men_date = new Date(men_day);


    var ovul_1 = new Date(men_date);
    var ovul_2 = new Date(men_date);


    ovul_1.setDate(ovul_1.getDate() + m1);
    ovul_2.setDate(ovul_2.getDate() + m2);

    var monthes = [
        'JANUARY',
        'FEBRUARY',
        'MARCH',
        'APRIL',
        'May',
        'JUNE',
        'JULY',
        'AUGUST',
        'SEMPTEMBER',
        'OCTOBER',
        'NOVEMBER',
        'DECEMBER'
    ];


    document.getElementById("netice_1").innerHTML = "Ovulation cycle menstruation <b><u>" + m1 + " - " + m2 + "</b></u>falls on the days of";
    document.getElementById("netice_2").innerHTML = "this, <b><u>" + ovul_1.getDate() + " " + monthes[ovul_1.getMonth()] + " – " + ovul_2.getDate() + " " + monthes[ovul_2.getMonth()] + "</b></u> dates back to";
}