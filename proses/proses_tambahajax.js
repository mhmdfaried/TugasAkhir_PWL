function sendData() {
        var xhr = new XMLHttpRequest();
        var url = "https://jsonplaceholder.typicode.com/posts";
        
        var data = JSON.stringify({
            nama: document.getElementById("nama").value,
            alamat: document.getElementById("alamat").value,
            nohp: document.getElementById("nohp").value,
            tgl_transaksi: document.getElementById("tgl_transaksi").value,
            jenis_barang: document.getElementById("jenis_barang").value,
            nama_barang: document.getElementById("nama_barang").value,
            jumlah: document.getElementById("jumlah").value,
            harga: document.getElementById("harga").value
        });

        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            console.log (this.responseText);
        };

        xhr.send(data);
        return false;
    }