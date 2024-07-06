const Validate = () => {
    document.getElementById("formantrian").addEventListener("submit", (e) => {
        const nama = document.getElementById("nama");
        const notelp = document.getElementById("nohp");

        if (nama.value.trim() === "") {
            alert("Nama harus diisi");
            nama.focus();
            return false;
        }
        if (notelp.value.trim() === "") {
            alert("Nomor telepon harus diisi");
            notelp.focus();
            return false;
        }
    });
};

document.addEventListener("DOMContentLoaded", (e) => {
    const tanggal = new Date();
    const waktu = tanggal.toTimeString().substring(0, 5);

    document.getElementById("waktu").value = waktu;

    Validate();
});
