const root = document.documentElement;
const eye = document.getElementById('eyeball');
const beam = document.getElementById('beam');
const passwordInput = document.getElementById('password');
const fname = document.getElementById('fname');
const sname = document.getElementById('sname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const submit = document.getElementById('submit');
const input = document.querySelectorAll('.input-wrapper input');

root.addEventListener('mousemove', (e) => {
    let rect = beam.getBoundingClientRect();
    let mouseX = rect.right + (rect.width / 2);
    let mouseY = rect.top + (rect.height / 2);
    let rad = Math.atan2(mouseX - e.pageX, mouseY - e.pageY);
    let degrees = (rad * (20 / Math.PI) * -1) - 350;

    root.style.setProperty('--beamDegrees', `${degrees}deg`);
});

eye.addEventListener('click', e => {
    e.preventDefault();
    document.body.classList.toggle('show-password');
    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password'
    passwordInput.focus();
});

submit.addEventListener('click', e => {
    e.preventDefault();
    if (fname.value == ""){
        alert("insert");
    }
});



