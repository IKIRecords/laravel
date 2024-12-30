// Konfigurasi API Base URL
const API_BASE_URL = "http://127.0.0.1:8000/api";  // Atau URL produksi jika sudah di-deploy

// Contoh menggunakan fetch untuk request ke backend
function fetchItems() {
    fetch(`${API_BASE_URL}/items`)  // Menyambungkan ke endpoint /api/items
        .then(response => response.json())
        .then(data => {
            console.log(data);  // Menampilkan hasil response di console
        })
        .catch(error => console.error('Error:', error));  // Menangani error
}

// Memanggil fungsi fetchItems untuk mendapatkan data
fetchItems();
