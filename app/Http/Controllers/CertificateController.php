<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;

class CertificateController extends Controller
{
  public function marksheet()
    {

        $pdf = new TCPDF('P', 'mm', array('210', '297'), false, 'UTF-8', false);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(false, 0);

        $pdf->addpage();
        $imagePath1 = public_path('images/Subharti_University_Demo_1_-_Copy.jpg');
        
        // Use Image() to add the background image
        $pdf->Image($imagePath1, 0, 0, '210', '297', "JPG", '', 'R', true);
        $pdf->setPageMark();

           
    // Add QR code
    $qrCodeData = 'https://www.google.com'; // Replace with your QR code data
    $pdf->write2DBarcode($qrCodeData, 'QRCODE,L', 170, 16, 25, 19);
      



        // $pdf->setY(30);
        // $pdf->setFont('helvetica', '', 20);
        // $pdf->Cell(0, 20, 'Semester Academic Report', '0', 1, 'C');
        $pdf->setY(45);
        $pdf->setFont('helvetica', 'B', 15);
        $pdf->Cell(0, 10, 'GRADE CARD', '0', 1, 'C');



        $pdf->setXY(30 , 50);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Student Name:', '0', 0, 'R');
        $pdf->setXY(40, 50);
        $pdf->setFont('helvetica', '', 9);
        $pdf->Cell(18, 20, 'Roshan Dhawde', '0', 0, 'L');

        $pdf->setXY(30 , 56);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Mothers Name:', '0', 0, 'R');
        $pdf->setXY(40, 56);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'XYZ', '0', 0, 'L');


        $pdf->setXY(30 , 62);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Registration No:', '0', 0, 'R');
        $pdf->setXY(40, 62);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'AUG355986', '0', 0, 'L');


        $pdf->setXY(30 , 67);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Term:', '0', 0, 'R');
        $pdf->setXY(40, 67);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'Semester-I', '0', 0, 'L');


        $pdf->setXY(30 , 73);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Programme:', '0', 0, 'R');
        $pdf->setXY(40, 73);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'php Developer ', '0', 0, 'L');



        $pdf->setXY(110 , 56);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Department:', '0', 0, 'R');
        $pdf->setXY(120, 56);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'Software', '0', 0, 'L');


        $pdf->setXY(110 , 62);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'University Enrollment no:', '0', 0, 'R');
        $pdf->setXY(120, 62);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, '85633', '0', 0, 'L');


        $pdf->setXY(110 , 67);
        $pdf->setFont('helvetica', 'B', 10);
        $pdf->Cell(10, 20, 'Examination:', '0', 0, 'R');
        $pdf->setXY(120, 67);
        $pdf->setFont('helvetica', '', 10);
        $pdf->Cell(18, 20, 'Undeclared', '0', 0, 'L');
        


       
        $imagePath2 = public_path('images/passportphoto.jpg');
        $pdf->Image($imagePath2, 165, 49, 28,34);

      

        $borderWidth = 0.1;
        $pdf->SetLineWidth($borderWidth);

        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->SetXY(12, 90);
        $pdf->Cell(22, 10, 'Course code', 'LBT', 'C');
        $pdf->SetXY(34, 90);
        $pdf->Cell(96, 10, 'Course', 'LBT', 0, 'C');
        $pdf->SetXY(130, 90);
        $pdf->MultiCell(17, 10, 'Credit Enroll', 'LBT', 'C');
        $pdf->SetXY(147, 90);
        $pdf->MultiCell(17, 10, 'Credit Earned', 'LBT', 'C');
        $pdf->SetXY(164, 90);
        $pdf->Cell(17, 10, 'Grade', 'LBT',0, 'C');
        $pdf->SetXY(181, 90);
        $pdf->MultiCell(17, 10, 'Grade Points', 'LBTR', 'c');

        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 100);
        $pdf->Cell(22, 10, 'FNDN101', 'L', 0, 'R');
        $pdf->SetXY(34, 100);
        $pdf->Cell(96, 10, 'API INTEGRATION', 'L', 0, 'L');
        $pdf->SetXY(130, 100);
        $pdf->Cell(17, 10, '6.0', 'L',0, 'C');
        $pdf->SetXY(147, 100);
        $pdf->Cell(17, 10, '6.0', 'L',0, 'C');
        $pdf->SetXY(164, 100);
        $pdf->Cell(17, 10, 'C+', 'L', 0,'C');
        $pdf->SetXY(181, 100);
        $pdf->Cell(17, 10, '2.80', 'LR',0, 'C');


        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 110);
        $pdf->Cell(22, 10, 'FNDN102', 'L', 0, 'R');
        $pdf->SetXY(34, 110);
        $pdf->Cell(96, 10, 'WRITTEN & VERBAL COMMUNICATION', 'L', 0, 'L');
        $pdf->SetXY(130, 110);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(147, 110);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(164, 110);
        $pdf->Cell(17, 10, 'B', 'L', 0,'C');
        $pdf->SetXY(181, 110);
        $pdf->Cell(17, 10, '3.20', 'LR',0, 'C');


        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 120);
        $pdf->Cell(22, 10, 'FNDN103', 'L', 0, 'R');
        $pdf->SetXY(34, 120);
        $pdf->Cell(96, 10, 'INSPIRATIONS', 'L', 0, 'L');
        $pdf->SetXY(130, 120);
        $pdf->Cell(17, 10, '1.5', 'L',0, 'C');
        $pdf->SetXY(147, 120);
        $pdf->Cell(17, 10, '1.5', 'L',0, 'C');
        $pdf->SetXY(164, 120);
        $pdf->Cell(17, 10, 'D', 'L', 0,'C');
        $pdf->SetXY(181, 120);
        $pdf->Cell(17, 10, '2.00', 'LR',0, 'C');

        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 130);
        $pdf->Cell(22, 10, 'FNDN104', 'L', 0, 'R');
        $pdf->SetXY(34, 130);
        $pdf->Cell(96, 10, 'ELEMENTS OF DESIGN', 'L', 0, 'L');
        $pdf->SetXY(130, 130);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(147, 130);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(164, 130);
        $pdf->Cell(17, 10, 'B-', 'L', 0,'C');
        $pdf->SetXY(181, 130);
        $pdf->Cell(17, 10, '3.00', 'LR',0, 'C');

        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 140);
        $pdf->Cell(22, 10, 'FNDN105', 'L', 0, 'R');
        $pdf->SetXY(34, 140);
        $pdf->Cell(96, 10, 'VISUALIZATION & REPRESENTATION-I', 'L', 0, 'L');
        $pdf->SetXY(130, 140);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(147, 140);
        $pdf->Cell(17, 10, '3.0', 'L',0, 'C');
        $pdf->SetXY(164, 140);
        $pdf->Cell(17, 10, 'B-', 'L', 0,'C');
        $pdf->SetXY(181, 140);
        $pdf->Cell(17, 10, '3.00', 'LR',0, 'C');



        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 150);
        $pdf->Cell(22, 10, 'FNDN106', 'L', 0, 'R');
        $pdf->SetXY(34, 150);
        $pdf->Cell(96, 10, 'DESIGN PROCESS MODULE', 'L', 0, 'L');
        $pdf->SetXY(130, 150);
        $pdf->Cell(17, 10, '1.5', 'L',0, 'C');
        $pdf->SetXY(147, 150);
        $pdf->Cell(17, 10, '1.5', 'L',0, 'C');
        $pdf->SetXY(164, 150);
        $pdf->Cell(17, 10, 'P', 'L', 0,'C');
        $pdf->SetXY(181, 150);
        $pdf->Cell(17, 10, '--', 'LR',0, 'C');

        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 160);
        $pdf->Cell(22, 10, 'FNDN107', 'L', 0, 'R');
        $pdf->SetXY(34, 160);
        $pdf->Cell(96, 10, 'UNLEARNING MODULE', 'L', 0, 'L');
        $pdf->SetXY(130, 160);
        $pdf->Cell(17, 10, 'NC', 'L',0, 'C');
        $pdf->SetXY(147, 160);
        $pdf->Cell(17, 10, 'NC', 'L',0, 'C');
        $pdf->SetXY(164, 160);
        $pdf->Cell(17, 10, 'P', 'L', 0,'C');
        $pdf->SetXY(181, 160);
        $pdf->Cell(17, 10, '--', 'LR',0, 'C');

        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 170);
        $pdf->Cell(22, 40, '', 'LB', 0, 'R');
        $pdf->SetXY(34, 170);
        $pdf->Cell(96, 40, '', 'LB', 0, 'L');
        $pdf->SetXY(130, 170);
        $pdf->Cell(17, 40, '', 'LB',0, 'C');
        $pdf->SetXY(147, 170);
        $pdf->Cell(17, 40, '', 'LB',0, 'C');
        $pdf->SetXY(164, 170);
        $pdf->Cell(17, 40, '', 'LB', 0,'C');
        $pdf->SetXY(181, 170);
        $pdf->Cell(17, 40, '', 'LRB',0, 'C');



        $pdf->SetFont('helvetica', '', 10);
        $pdf->SetXY(12, 213);
        $pdf->Cell(93, 7, 'Semester Grade Point Average(SGPA)', 1, 0, 'C');
        $pdf->SetXY(105, 213);
        $pdf->Cell(93, 7, 'Cumulative Grade Point Average(CGPA)', 1, 0, 'C');


        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 220);
        $pdf->Cell(26, 13, 'Earned Crdits', 'LB', 0, 'C');
        $pdf->SetXY(38, 220);
        $pdf->Cell(35, 13, 'Earned Credit Points', 'LB', 0, 'C');
        $pdf->SetXY(73, 220);
        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->Cell(32, 13, 'SGPA', 'LB',0, 'C');
        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(105, 220);
        $pdf->Cell(30, 13, 'Total Earned Credits', 'LB',0, 'C');
        $pdf->SetXY(135, 220);
        $pdf->MultiCell(33, 13, 'Total Earned Credit Points','LBT' , 'C',0, 1, '', '', true, 0, false, true, 13, 'M');
        $pdf->SetXY(168, 220);
        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->Cell(30, 13, 'CGPA', 'LBR',0, 'C');
        $pdf->SetFont('helvetica', '', 9);


        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(12, 233);
        $pdf->Cell(26, 13, '17.0', 'LB', 0, 'C');
        $pdf->SetXY(38, 233);
        $pdf->Cell(35, 13, '44.0', 'LB', 0, 'C');
        $pdf->SetXY(73, 233);
        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->Cell(32, 13, '2.86 (Good)', 'LB',0, 'C');
        $pdf->SetFont('helvetica', '', 9);
        $pdf->SetXY(105, 233);
        $pdf->Cell(30, 13, '17.0', 'LB',0, 'C');
        $pdf->SetXY(135, 233);
        $pdf->MultiCell(33, 13, '44.40','LBT' , 'C',0, 1, '', '', true, 0, false, true, 13, 'M');
        $pdf->SetXY(168, 233);
        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->Cell(30, 13, '2.86(Good)', 'LBR',0, 'C');
        $pdf->SetFont('helvetica', '', 9);

        //    //QR CODE
        //    $style = array(
        //     'border' => false,
        //     'vpadding' => 0,
        //     'hpadding' => 0,
        //     'fgcolor' => array(0, 0, 0),
        //     'bgcolor' => false,
        //     'module_width' => 1,
        //     'module_height' => 1
        // );




        // $pdf->write2DBarcode('SEM-1 RESULT' , 'QRCODE,H', 10, 254, 28, 20, $style, 'N');
        // $pdf->SetXY(16,275);
        // $pdf->SetFont('Arial', '', 8);
        // $pdf->Cell(20, 5, 'AFY 00098', 0 , 'C');

            // Add 1D barcode at the end of the page
            $pdf->SetFont('helvetica', 'B', 12);
            $pdf->SetXY(11, 260);
            $pdf->Cell(0, 10, 'Scube University, Mumbai', 0, 1, 'L'); // Draw centered text
            $barcodeData = '123456789'; // Replace with your barcode data
            $pdf->write1DBarcode($barcodeData, 'C39', '', '', '', 10, 0.4, array(), 'N');

        $imagePath2 = public_path('images/signature.png');
        $pdf->Image($imagePath2, 92, 258, 23,20);
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->SetXY(92,273);
        $pdf->MultiCell(30, 6, 'Jasmin Gohit , Head of Examination', 0 , 'C');

    
        $imagePath2 = public_path('images/Signature-PNG-Image-File.png');
        $pdf->Image($imagePath2, 130, 255, 35,20);
        $pdf->SetFont('helvetica', 'B', 9);
        $pdf->SetXY(130,276);
        $pdf->Cell(34, 5, 'University of Security Software Solutions', 0 , 'C');



        $pdf->output('marksheet.pdf');

    }
}
