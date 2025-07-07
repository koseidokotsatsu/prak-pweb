document.getElementById('registerForm').addEventListener('submit', function (e) {
    const email = this.email.value;
    const password = this.password.value;
    const confirmPassword = this.confirm_password.value;
    const checkbox = this.persetujuan.checked;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        alert('Format email tidak valid!');
        e.preventDefault();
        return;
    }

    if (password.length < 6) {
        alert('Password minimal 6 karakter!');
        e.preventDefault();
        return;
    }

    if (password !== confirmPassword) {
        alert('Konfirmasi password tidak cocok!');
        e.preventDefault();
        return;
    }

    if (!checkbox) {
        alert('Anda harus menyetujui syarat dan ketentuan!');
        e.preventDefault();
        return;
    }
});
