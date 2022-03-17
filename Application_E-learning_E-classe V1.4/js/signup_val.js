
const form = document.getElementById("signup-form");
const username = document.getElementById("name-signup");
const email = document.getElementById("email-signup");
const password = document.getElementById("pass-signup");
const password2 = document.getElementById("comfirmpass-signup");
let erroR = false;

form.addEventListener('submit', function(e) {
    //if(erroR = false && setError){
       e.preventDefault(); 
   // }
        validateInputs();

    
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        erroR = true;
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        erroR = true;
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        erroR = true;
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        erroR = true;
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        erroR = true;
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        erroR = true;
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        erroR = true;
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

};