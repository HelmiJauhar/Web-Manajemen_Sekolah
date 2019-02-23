function validasiForm(){
    var kode_mapel = document.getElementById('kode_mapel');
    var mapel = document.getElementById('mapel');
    var alokasi_waktu = document.getElementById('alokasi_waktu');
    var semester = document.getElementById('semester');

    if (kode_mapel.value == "") {
        alert("Anda belum mengisi kode mata pelajaran");
        kode_mapel.focus();
        return false;
    }
    else if (mapel.value == "") {
        alert("Anda belum mengisi jenis mata pelajaran");
        mapel.focus();
        return false;
    }
    else if (alokasi_waktu.value == "") {
        alert("Anda belum mengisi alokasi waktu");
        alokasi_waktu.focus();
        return false;
    }
    else if (semester.value == "") {
        alert("Anda belum mengisi jumlah semester");
        semester.focus();
        return false;
    }
    else
    {
        return true;
    }
}