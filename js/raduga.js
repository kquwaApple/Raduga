let auth = document.getElementById('AuthWin');
let reg = document.getElementById('regWin');
let windows = 'auth';

function showRegistr() {
    if (windows == 'auth') {
        reg.style.display = 'block';
        auth.style.display = 'none';
        windows = 'reg';
    } else {
        console.log('Окно уже открыто');
    }
}

function showAuth() {
    if (windows == 'reg') {
        reg.style.display = 'none';
        auth.style.display = 'block';
        windows = 'auth';
    } else {
        console.log('Окно уже открыто');
    }
}