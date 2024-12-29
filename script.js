// Mengambil data dari server dan menampilkannya di tabel
async function fetchData() {
  try {
    const response = await fetch("server/proses.php");
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const data = await response.json();
    const tableBody = document.querySelector("#dataTable tbody");
    tableBody.innerHTML = ""; // Hapus data lama

    data.forEach((row) => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
                  <td>${row.name}</td>
                  <td>${row.email}</td>
                  <td>${row.gender}</td>
                  <td>${row.ip_address}</td>
                  <td>${row.browser}</td>
              `;
      tableBody.appendChild(tr);
    });
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

// Event untuk memuat data saat halaman dimuat
document.addEventListener("DOMContentLoaded", fetchData);

// Event untuk validasi form sebelum submit
const form = document.getElementById("dataForm");
form.addEventListener("submit", function (event) {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const agreement = document.getElementById("agreement");
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Validasi Nama
  if (!name || name.length < 3) {
    event.preventDefault(); // Mencegah pengiriman jika validasi gagal
    alert("Nama harus memiliki minimal 3 karakter!");
    return;
  }

  // Validasi Email
  if (!email || !emailRegex.test(email)) {
    event.preventDefault();
    alert("Masukkan email yang valid!");
    return;
  }

  // Validasi Checkbox
  if (!agreement.checked) {
    event.preventDefault();
    alert("Anda harus menyetujui syarat dan ketentuan!");
    return;
  }
});

// Event untuk memberikan feedback pada tombol submit
const submitButton = document.getElementById("submitBtn");
submitButton.addEventListener("click", function () {
  alert("Tombol Submit diklik! Form akan diproses.");
});

// Set Cookie
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000); // Set expiry date
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Get Cookie
function getCookie(name) {
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1);
    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }
  return "";
}

// Delete Cookie
function deleteCookie(name) {
  document.cookie = name + "=; Max-Age=-99999999;";
}

// Set Local Storage
function setLocalStorage(name, value) {
  localStorage.setItem(name, value);
}

// Get Local Storage
function getLocalStorage(name) {
  return localStorage.getItem(name);
}

// Remove Local Storage
function removeLocalStorage(name) {
  localStorage.removeItem(name);
}

// Set Session Storage
function setSessionStorage(name, value) {
  sessionStorage.setItem(name, value);
}

// Get Session Storage
function getSessionStorage(name) {
  return sessionStorage.getItem(name);
}

// Remove Session Storage
function removeSessionStorage(name) {
  sessionStorage.removeItem(name);
}
