// JavaScript CRUD Mahasiswa (sesi sebelumnya): search + confirm delete + alert status
document.addEventListener("DOMContentLoaded", function () {
  const search = document.getElementById("searchMahasiswa");
  const rows = document.querySelectorAll("#mahasiswaTable tbody tr");

  if (search && rows.length > 0) {
    search.addEventListener("input", function () {
      const keyword = this.value.toLowerCase().trim();
      rows.forEach(function (row) {
        row.style.display = row.textContent.toLowerCase().includes(keyword) ? "" : "none";
      });
    });
  }

  document.querySelectorAll(".crud-delete-form").forEach(function (f) {
    f.addEventListener("submit", function (event) {
      if (!confirm("Yakin ingin menghapus data ini?")) {
        event.preventDefault();
      }
    });
  });

  const form = document.querySelector("[data-crud-form]");
  if (form) {
    form.addEventListener("submit", function (event) {
      let valid = true;
      form.querySelectorAll("input[type=text], input[type=email]").forEach(function (el) {
        el.classList.remove("is-invalid");
        if (el.value.trim() === "" || !el.checkValidity()) {
          el.classList.add("is-invalid");
          valid = false;
        }
      });
      if (!valid) {
        event.preventDefault();
        alert("Form belum valid. Periksa kembali input Anda.");
      }
    });
  }

  const status = new URLSearchParams(window.location.search).get("status");
  if (status === "tambah") alert("Data berhasil ditambahkan.");
  if (status === "update") alert("Data berhasil diperbarui.");
  if (status === "hapus") alert("Data berhasil dihapus.");
});
