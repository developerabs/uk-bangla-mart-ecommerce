window.addEventListener('DOMContentLoaded', () => {
  /*
  // Login - Register events
  */
  (function () {
    const loginBtn = document.querySelector('.my-account-loginreg .login-trigger .log-reg-btn');
    const regiBtn = document.querySelector('.my-account-loginreg .regi-trigger .log-reg-btn');
    const arr = [loginBtn, regiBtn];

    function toggler() {
      const loginForm = document.querySelector('.my-account-loginreg .login-form');
      const regiForm = document.querySelector('.my-account-loginreg .regi-form');
      const loginDesc = document.querySelector('.my-account-loginreg .login-trigger');
      const regiDesc = document.querySelector('.my-account-loginreg .regi-trigger');

      if (this == regiBtn) {
        regiDesc.classList.remove('show');
        loginDesc.classList.add('show');
        loginForm.classList.remove('show');
        regiForm.classList.add('show');

        setTimeout(() => {
          regiDesc.classList.add('d-none');
          loginDesc.classList.remove('d-none');
          loginForm.classList.add('d-none');
          regiForm.classList.remove('d-none');
        }, 100);
      }

      if (this == loginBtn) {
        loginDesc.classList.remove('show');
        regiDesc.classList.add('show');
        regiForm.classList.remove('show');
        loginForm.classList.add('show');

        setTimeout(() => {
          loginDesc.classList.add('d-none');
          regiDesc.classList.remove('d-none');
          regiForm.classList.add('d-none');
          loginForm.classList.remove('d-none');
        }, 100);
      }
    }

    arr.forEach((button) => {
      button.addEventListener('click', toggler);
    });
  })();
});
