// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party

// Loop through number of people.
do {
    // ask each user about his/her name.
    let user_name= prompt("Please enter your name");

    // ask each user about his/her age.
    let user_age= prompt("Please enter your age");

    // if younger than 18, print: you are too young
    if (user_age <= 18 ) {
        console.log('Sorry!',user_name,'you are too young');
    }
    // if older than 35, print: you are too old
    else if (user_age >= 35) {
        console.log('Sorry!',user_name,'you are too old');
    }
    // if between 18 and 35, ask the user about his/her name and welcome the user to the party.
    else{
        console.log('Welcome!',user_name,'please enter the party');
    }
  } while (confirm("is there anyone else?"));