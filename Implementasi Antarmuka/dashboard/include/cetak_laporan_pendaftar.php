<?php
include "../../koneksi/koneksi.php";
include "../../assets/libs/fpdf/fpdf.php";
include "../../assets/libs/fpdf/mc_table/mc_table.php";

// Ambil data dari tabel pendaftaran
$query = "SELECT * FROM pendaftaran";
$result = mysqli_query($koneksi, $query);

// Set header untuk membuat file PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="laporan_pendaftar.pdf"');

// Mulai cetak dengan menggunakan library FPDF
class PDF extends PDF_MC_Table
{
    function Header()
    {
        // Tambahkan header laporan di sini
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Laporan Pendaftar', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        // Tambahkan footer laporan di sini
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Buat objek PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', '', 10);

// Tambahkan header tabel
$pdf->Cell(10, 10, 'No', 1);
$pdf->Cell(30, 10, 'Nama', 1);
$pdf->Cell(30, 10, 'NIM', 1);
$pdf->Cell(20, 10, 'Semester', 1);
$pdf->Cell(30, 10, 'Fakultas', 1);
$pdf->Cell(40, 10, 'Program Studi', 1);
$pdf->Cell(40, 10, 'Peminatan', 1);
$pdf->Cell(20, 10, 'Jumlah SKS', 1);
$pdf->Ln();

// Tambahkan data dari database
$no = 1;
while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 10, $no, 1);
    $pdf->Cell(30, 10, $row['nama'], 1);
    $pdf->Cell(30, 10, $row['nim'], 1);
    $pdf->Cell(20, 10, $row['semester'], 1);
    $pdf->Cell(30, 10, $row['fakultas'], 1);
    $pdf->Cell(40, 10, $row['program_studi'], 1);
    $pdf->Cell(40, 10, $row['peminatan'], 1);
    $pdf->Cell(20, 10, $row['jumlah_sks'], 1);
    $pdf->Ln();
    $no++;
}

// Outputkan PDF
$pdf->Output();
?>
