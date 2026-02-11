const form = document.getElementById('registrationForm');
// console.log(form);

//task 2
form.addEventListener('submit',function(event){
    event.preventDefault();
    const username = document.getElementById('4').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const passwordconfirm = document.getElementById('passwordconfirm').value;

    console.log('Username:', username);
    console.log('Email:', email);
    console.log('Password length:', password.length);
    

    // console.log('Form submission intercepted!');
})

//task 3
