<?php 
    if (!function_exists('format_hari_tanggal')) {
        function format_hari_tanggal($timestamp)
        {
            $hari = [
                'Sunday' => 'Minggu',
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu'
            ];
    
            $bulan = [
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember'
            ];
    
            $hari_ini = $hari[date('l', strtotime($timestamp))];
            $tanggal = date('d', strtotime($timestamp));
            $bulan_ini = $bulan[date('m', strtotime($timestamp))];
            $tahun = date('Y', strtotime($timestamp));
    
            return "$hari_ini, $tanggal $bulan_ini $tahun";
        }
    }
    
?>