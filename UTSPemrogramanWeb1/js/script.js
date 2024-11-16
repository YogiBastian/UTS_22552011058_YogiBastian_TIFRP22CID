function validateLogin() {
    const username = document.getElementById("emailOrPhone").value;
    const password = document.getElementById("password").value;

    // Validasi sederhana menggunakan struktur if
    if (username === "admin" && password === "1234") {
        alert("Login Berhasil!");
        // Pindah ke halaman Menu Utama
        window.location.href = "main.html";
        return false; // Mencegah form dari pengiriman ulang
    } else {
        alert("Username atau Password salah. Silakan coba lagi.");
        return false; // Mencegah form dari pengiriman ulang
    }
}
