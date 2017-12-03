Kerjakan soal dengan benar!!!
<style>
    .butir-soal{
        list-style:none;
    }
</style>
<?php
$matkul = $_POST['matkul'];
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * from soal where kategori='$matkul'");

$nomor = 0;
echo "<form method='post' action='hasilkerja.php'>";
    echo "<ol>";
    foreach($query as $data)
    {
        echo "<li>";
        echo $data['soal']."<br/>";//soal
        //pilihan soal
        echo   
            "<input type='radio' name='".$data['no']."' value='a'><label>".$data['a']."</label><br/>".
            "<input type='radio' name='".$data['no']."' value='b'><label>".$data['b']."</label><br/>".
            "<input type='radio' name='".$data['no']."' value='c'><label>".$data['c']."</label><br/>".
            "<input type='radio' name='".$data['no']."' value='d'><label>".$data['d']."</label><br/>";
        $nomor++;
    }
    ?>
    
        </ol>
        <input type='hidden' name='matkul' value='<?php echo $matkul?>'/>
        <input type='hidden' name='jumlahsoal' value='<?php echo $nomor?>'/>
        <input type='hidden' name="hasil" "multimedia"/>
        <input type='hidden' name="menit" id='menit'/>
        <input type='hidden' name="detik" id='detik'/>
        <input type="text" name="waktu" id="timersoal" readonly/>
        <button type='submit'>Submit</button>
    </form>
<script>
window.onload=function(){
    var menit = 29;
    var detik = 60;
    var waktu = menit*detik;
    window.setInterval(function(){
        detik--;
        if(detik < 0)
        {
            detik = 59;
            menit--;
        }

        document.getElementById('timersoal').value = menit+":"+detik;
        document.getElementById('menit').value = menit;
        document.getElementById('detik').value = detik;
        if(menit == 0 && detik == 0)
        {
            document.multimedia.submit();
        }
    }, 1000);
};
</script>