function sendData() {
        var xhr = new XMLHttpRequest();
        xhr.onerror = function () {
    console.error('Error in AJAX request.');
};

        var url = "https://jsonplaceholder.typicode.com/posts";
        
        var data = JSON.stringify({
            nama: document.getElementById("nama").value,
            tempat_lahir: document.getElementById("tempat_lahir").value,
            tanggal_lahir: document.getElementById("tanggal_lahir").value,
            alamat: document.getElementById("alamat").value,
            jenis_kelamin: document.getElementById("jenis_kelamin").value,
            agama: document.getElementById("agama").value,
            email: document.getElementById("email").value,
            no_telepon: document.getElementById("no_telepon").value,
            nilai_matematika: document.getElementById("nilai_matematika").value,
            nilai_ipa: document.getElementById("nilai_ipa").value,
            nilai_ips: document.getElementById("nilai_ips").value,
            nilai_b_indonesia: document.getElementById("nilai_b_indonesia").value,
            nilai_b_inggris: document.getElementById("nilai_b_inggris").value,
            nilai_agama: document.getElementById("nilai_agama").value,
            nama_ayah: document.getElementById("nama_ayah").value,
            nama_ibu: document.getElementById("nama_ibu").value,
            pekerjaan_ayah: document.getElementById("pekerjaan_ayah").value,
            pekerjaan_ibu: document.getElementById("pekerjaan_ibu").value,
            pendidikan_ayah: document.getElementById("pendidikan_ayah").value,
            pendidikan_ibu: document.getElementById("pendidikan_ibu").value,
            no_teleponortu: document.getElementById("no_teleponortu").value,
            penghasilan: document.getElementById("penghasilan").value,
            alamat_ortu: document.getElementById("alamat_ortu").value
        });

        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            console.log (this.responseText);
        };

        xhr.send(data);
        return false;
    }