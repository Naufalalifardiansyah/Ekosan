
const tanggalTujuan = new Date('Jan 18, 2023 18:00:00').getTime();

const hitungMundur = setInterval(function() {

    const sekarang = new Date().getTime()
    const selisih = tanggalTujuan - sekarang;

    const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

    const jam  = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    
    const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

    const detik = Math.floor(selisih % (1000 * 60) / 1000);

    const tgltgg = document.getElementById('tgltgg');
    tgltgg.innerHTML = 'Waktu anda tinggal : ' + 
    hari + ' hari ' + jam + ' jam ' + menit + ' menit ' + detik + ' detik ';

     if( selisih < 0) {
         clearInterval(hitungMundur);
         tgltgg.innerHTML = 'Waktu anda habis!';
    }
    console.log(selisih);
}, 1000);