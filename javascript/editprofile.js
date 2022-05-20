function editMode(){
    // Grab all the info from the html
    let username = document.querySelector(".username");
    let fName = document.querySelector(".fName");
    let lName = document.querySelector(".lName");
    let gender = document.querySelector(".gender");
    let nation = document.querySelector(".nation");
    let dob = document.querySelector(".dob");
    let phone = document.querySelector(".phone");
    let email = document.querySelector(".email");
    let pass = document.querySelector(".pass");

    // Set the input field to editable
    username.disabled= false;
    fName.disabled= false;
    lName.disabled= false;
    gender.disabled= false;
    nation.disabled= false;
    dob.disabled= false;
    phone.disabled= false;
    email.disabled= false;
    pass.disabled= false;

    document.querySelector("#edit").style.display="none";
    document.querySelector("#save").style.display="initial";
}