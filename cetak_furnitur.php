
    <script type="text/javascript">
    window.print()
    </script>
    
    <style type="text/css">
    #print {
        margin:auto;
        text-align:center;
        font-family:"Calibri", Courier, monospace;
        width:1200px;
        font-size:14px;
    }
    #print .title {
        margin:20px;
        text-align:right;
        font-family:"Calibri", Courier, monospace;
        font-size:12px;
    }
    #print span {
        text-align:center;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;   
        font-size:10px;
    }
    #print table {
        border-collapse:collapse;
        width:100%;
        margin:18px;
    }
    #print .table1 {
        border-collapse:collapse;
        width:90%;
        text-align:center;
        margin:10px;
    }
    #print table hr {
        border:3px double #000;   
        
    }
    #print .ttd {
        float:right;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    #print table th {
        color:#000;
        font-family:Verdana, Geneva, sans-serif;
        font-size:10px;
    }
    #logo{
        width:111px;
        height:90px;
        padding-top:10px;   
        margin-left:10px;
    }

    h1,h2,h3,h4{
        line-height:10px;
    }
    #print .camat {
        float:left;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    </style>

    <title>Cetak laporan furnitur</title>
    <div id="print">
    <table class='table1'>
            <tr>
<td><img src='images/logo_pemkab_bogor.png' height="150" width="150"></td>
                <td>

        <h2 style="font-size:32px; margin:20px">PEMERINTAHAN DESA SASAK PANJANG</h2>
        <h1 style="font-size:40px">KECAMATAN TAJURHALANG</h1>
        <h2 style="font-size:24px">JL. AMD. RT. 001/008 DESA SASAK PANJANG KABUPATEN BOGOR</h2>
        <h3 style="font-size:30px; margin-top:10px" >Desa Sasak Panjang - Kecamatan Tajurhalang - Bogor - 16320</h3>
    </td>
    </tr>
</table>
    
<table class='table'>   
<td><hr/></td>

</table>
<td>LAPORAN DATA BARANG INVENTARISASI ASET KANTOR</td>
<br>
<td><h3>LAPORAN DATA FURNITUR</h3></td>
<tr>
<td>
<table border=1px; class='table' width="90%">
<tr>
<th >No.Barang</th>
<th>Model</th>
<th>Merk</th>
<th>Status</th>
<th>Tgl Input</th>
<th>Tahun Beli</th>
<th>Jumlah</th>
<th>Satuan Harga</th>
<th>Total Harga</th>
</tr>

<?php 
if(isset($_GET['tahun'])==''){
    require_once 'oop/class_laporan.php';
    $query2 = "SELECT * FROM crudfurnitur ORDER BY id ASC";
    $cetak->cetakfurnitur($query2);
}else{
    require_once 'oop/class_laporan.php';
    $query2 = "SELECT * FROM crudfurnitur WHERE YEAR(th_beli)=".$_GET['tahun'];
    $cetak->cetakfurnitur($query2);
}


?>

</table>
</tr>
</table>
</div>

<div id="print">
<table width="450" text-align="left" class="camat">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" text-align="center">
<strong>Mengetahui,<br>Kepala Desa</strong>
      <br><br><br>
<strong><u><br>ANDY UMI YULAIKAH, M.Pd.</u><br>NIP:-<br></strong><small></small>
</td>
</tr>
</table>
</div>

<div id="print">
<table width="450" text-align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" text-align="center">
<strong>Sasak Panjang,<?php 
    $tgl=date('d M Y');
    echo $tgl;
?> 
</strong>
<strong>Seketaris Desa</strong>
      <br><br><br><br><br>
<strong><u>IWAN</u><br> <br></strong><small></small>
</td>
</tr>
</table>
</div>

